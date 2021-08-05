<?php


class Password {
    const SALT = 'EstoEsUnSalt';
    public static function hash($password) {
        return hash('sha512', self::SALT . $password);
    }
    public static function verify($password, $hash) {
        return ($hash == self::hash($password));
    }
}


    session_start();
    include('includes/conexion.php');

    // 1. Recibo los valores
    $usuario = $_POST['user'];
    $clave = $_POST['pass'];

    // 2. Verifico si existe el usuario
    $consulta1 = "select count(usuario) as nuevo from usuarios where usuario = '$usuario'";

    $resultado1 = mysqli_query($conexion,$consulta1);

    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // 3. Estructura de decision
    if($existe==0){
        // No existe el usuario
        header("location:loguin.php");
    }else{
        // Existe y leemos la clave
        $consulta_clave_bdd = "select clave from usuarios where usuario = '$usuario'";
        $resultado_clave_bdd = mysqli_query($conexion,$consulta_clave_bdd);
        while($a = mysqli_fetch_assoc($resultado_clave_bdd)){
            $clave_bdd = $a['clave'];
        }
    }

    // 4. Verificamos la clave
    if(Password::verify($clave, $clave_bdd)){
        // Clave correcta - Recupero los datos de la BDD
        $consulta_datos = "select * from usuarios where usuario = '$usuario'";
        $resultado_datos = mysqli_query($conexion,$consulta_datos);
        while($b = mysqli_fetch_array($resultado_datos)){
            $_SESSION['usuario']=$b['usuario'];
            $_SESSION['correo']=$b['correo'];
			$admin = $b['admin'];
            $_SESSION['autorizado']='si';
        }
        if($admin == 0){
            $_SESSION['administrador']='si';
        }else{
            $_SESSION['administrador']='no';
        }
        
        header('location:index.php');


    }else{
        // Clave incorrecta
        header("location:loguin.php");
    }


?>