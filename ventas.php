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
    <title>PRODUCTOS ABM</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">  


    <?php 
        include("includes/menu.php"); 
        include("includes/conexion.php");

        
        $consulta1 = "select * from compras";

        $resultado1 = mysqli_query($conexion, $consulta1) or die('Error en la QUERRY 1');

        

    ?> 

</head>
<body class="container" ; background=  "img/fondo1.jpg" ;  >
    <?php if($_SESSION['administrador']=='si'){ ?>
    <?php menu(); ?>
    
    <br>
    
    
     <!-- TABLA -->


    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-sm table-hover table table table-striped table-dark">
                    <thead>
                        <tr style="background: #005545; color: white" class="text-center">
                            <td>Usuario</td><td>Productos</td><td>Precio Total</td><td>Fecha</td><td>Codigo</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php  
                        while($z = mysqli_fetch_array($resultado1)){
                            echo "<tr>";
                            echo "<td>".$z['usuario']."</td>";
                            echo "<td class='text-center'>".$z['productos']."</td>";
                            echo "<td class='text-center'>".$z['total']."</td>";
                            echo "<td class='text-center'>".$z['fecha']."</td>";
                            echo "<td class='text-center'>".$z['codigo']."</td>";
                            echo "</tr>";
                            
                            
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <?php } else {
        header('Location: index.php');
        }?>
    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>