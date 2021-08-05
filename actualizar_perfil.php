<?php
   
   include('includes/conexion.php');

   $u_usuario = $_POST['usuario'];
   $u_nombre = $_POST['nombre'];
   $u_apellido = $_POST['apellido'];
   $u_correo = $_POST['correo'];
   $u_ciudad = $_POST['ciudad'];
   $u_telefono = $_POST['telefono'];
   $p_boton = $_POST['boton'];

$consulta3 = "SELECT * FROM usuarios WHERE usuario = '$u_usuario'";
        $resultado3 = mysqli_query($conexion, $consulta3);
        while($b = mysqli_fetch_assoc($resultado3)){
$u_admin = $b['admin'];
$u_clave = $b['clave'];
       } 
 

   

/*$conexion->query('update usuarios set usuario="$u_usuario",  ciudad="$u_ciudad", telefono="$u_telefono" where usuario ="$u_usuario" ')or die($conexion->error);
echo "actualizo";
echo $u_ciudad; 
echo $u_telefono; 
 */?>
<?php if($p_boton=1){
  $conexion->query("update usuarios set usuario='$u_usuario', ciudad='$u_ciudad', telefono='$u_telefono', apellido='$u_apellido', nombre='$u_nombre', correo='$u_correo' where usuario ='$u_usuario' ")or die($conexion->error);
       }else{
  header('location:index.php');  
    }
header('location:index.php');  
?>

