<?php
  session_start();
  if(!isset($_SESSION ['autorizado'])){
    $_SESSION['autorizado']='no';
    $_SESSION['administrador']='no';
    
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>


    <link href="css/bootstrap.min.css" rel="stylesheet"> 


    <?php  include('includes/menu.php');

?>

<?php
include("includes/conexion.php");
$usuario =$_SESSION['usuario'];

  $consulta3 = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
             $resultado3 = mysqli_query($conexion, $consulta3);
             while($b = mysqli_fetch_assoc($resultado3)){
           
    $usuario = $b['usuario'];
    $nombre = $b['nombre'];
    $apellido = $b['apellido'];
    $correo = $b['correo'];
	$ciudad = $b['ciudad'];
	$telefono = $b['telefono'];
}    

    ?>

</head>
<body class="container" ; background=  "img/fondo1.jpg" ;  style=" background-size: cover;">
    <?php menu(); ?>


    <div class="alert alert-primary" align="center" role="alert">Editar Perfil</div>
    


    <div class="row"  style="background-color: RGB(255, 160, 122); ">
        <div class="col-2"></div>

        <div class="col-8">
            <form action="actualizar_perfil.php" method="post" enctype="multipart/form-data">
                <hr size="2px" color="black" />

                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario" readonly value="<?php echo $usuario; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" class="form-control">
                </div> 
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" value="<?php echo $apellido; ?>" class="form-control">
                </div>

  <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text"  id="ciudad" class="form-control" id="ciudad" name="ciudad" value="<?php echo $ciudad; ?>">
                </div> 
  <div class="form-group">
                    <label for="correo">Telefono</label>
                     <input type="text"  id="telefono" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono; ?>">
                </div> 

                <hr size="2px" color="black" />

                                                           

                    <button type="submit" class="btn btn-primary btn-block" name="boton">Editar usuario</button>
                <br><br>                             
            </form>
        </div>
        
        <div class="col-2"></div>
    </div>    

</div>
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php include("footer.php"); ?> <!-- pie de pagina -->