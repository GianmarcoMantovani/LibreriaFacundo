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


include('includes/conexion.php');

// Recibo los valores del formulario.
$usuario = filter_var($_POST['usuario'],FILTER_SANITIZE_STRING);
$clave = filter_var($_POST['clave'],FILTER_SANITIZE_STRING);
$clave2 = filter_var($_POST['clave2'],FILTER_SANITIZE_STRING);
$nombre = filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
$apellido = filter_var($_POST['apellido'],FILTER_SANITIZE_STRING);
$correo = filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);


// Verificacion de contraseña
if($clave==$clave2){
    if (!preg_match('`[a-z]`',$clave)){
        //La clave debe tener al menos una letra minúscula
        header("Location: registro.php?mensaje=dos"); 
        exit();
    }
    if (!preg_match('`[A-Z]`',$clave)){
        //La clave debe tener al menos una letra mayúscula
        header("Location: registro.php?mensaje=tres"); 
        exit();
    }
    if (!preg_match('`[0-9]`',$clave)){
        //La clave debe tener al menos un caracter numérico
        header("Location: registro.php?mensaje=cuatro"); 
        exit();
    }
    if(strlen($clave) < 6){
        //La clave debe tener al menos 6 caracteres
        header("Location: registro.php?mensaje=cinco"); 
        exit();
    }
    if(strlen($clave) > 16){
        //La clave no puede tener más de 16 caracteres
        header("Location: registro.php?mensaje=seis"); 
        exit();
    }

    
    
}else{
    header("Location: registro.php?mensaje=uno"); 
    exit(); 
}





$clave_hash = Password::hash($clave);

//verificamos si el usuario existe en la bdd
// CREAR TABLA USERS
$consulta1 = "select count(usuario) as nuevo from usuarios where usuario = '$usuario'";
$resultado1 = mysqli_query($conexion,$consulta1);
$consulta2 ="select count(usuario) as nuevo from usuarios where correo ='$correo'";
$resultado2= mysqli_query($conexion,$consulta2);

while ($b = mysqli_fetch_assoc($resultado2)) {
    $existe2 = $b['nuevo'];
}

while($a = mysqli_fetch_assoc($resultado1)){
    $existe = $a['nuevo'];
}

// Estructura de desicion


if($existe == 1 || $existe2 == 1){
    header("Location: registro.php?mensaje=uno"); 
    
}else{
    //  MODIFICAR TENIENDO EN CUENTA LA TABLA CREADA!
    $alta = "INSERT INTO `usuarios`(`usuario`, `clave`, `admin`, `nombre`, `apellido`,`correo`) VALUES ('$usuario','$clave_hash',1,'$nombre','$apellido','$correo')";
    $resultado_alta = mysqli_query($conexion,$alta);

    header("Location: loguin.php");

}
   

    

?>