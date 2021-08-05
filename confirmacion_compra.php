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
    <title>Plantilla Web</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">  

    <!-- Archivos a incluir -->
    <?php include("includes/menu.php");
    include('includes/conexion.php'); ?> 

</head>
<body class="container" ; background=  "img/fondo1.jpg" ;  style=" background-size: cover;">
    <?php menu(); ?>
    <br>
    



      <?php
      $usuario = $_SESSION['usuario'];


 
      $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      // Output: 54esmdr0qf
      $codigo = substr(str_shuffle($permitted_chars), 0, 10);
      

      date_default_timezone_set('America/Argentina/Buenos_Aires');
      $fecha = date('d-m-Y h:i:s a', time());
      

      $consulta3 = "SELECT * FROM compras WHERE usuario = '$usuario'";
      $resultado3 = mysqli_query($conexion, $consulta3);


       $conexion->query("update compras set codigo='$codigo' where usuario ='$usuario' AND  fecha = '$fecha'")or die($conexion->error);


      ?>
      <br>
      <br>


    <h1 class='text-center'>¡MUCHAS GRACIAS POR SU COMPRA!</h1>
    <br>
    <h2 class='text-center'>Desde Libreria Facundo estamos agradecidos de que nos eligieras</h2>
    <br>
    <h2 class='text-center'>Con el siguiente codigo vas a poder retirar la compra en el local</h2>
    <br>

    
      


      <div class="alert alert-warning - text-center" role="alert">
        <h1>
        <?php echo $codigo; ?>
        </h1>
    </div>

      <br>
      <br>


    
	 <a  class="alert alert-warning - text-center" href="index.php">Regresar a la pagina principal</a>

    <br><br>
    <br>


    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

<?php include("footer.php"); ?> <!-- pie de pagina -->