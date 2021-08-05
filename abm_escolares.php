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

        
        $consulta1 = "select * from escolares";

        $resultado1 = mysqli_query($conexion, $consulta1) or die('Error en la QUERRY 1');

        

    ?> 

</head>
<body class="container" ; background=  "img/fondo1.jpg" ;  >
    <?php if($_SESSION['administrador']=='si'){ ?>
    <?php menu(); ?>
    
    <!-- BOTONES -->
<br>
    <div class="container text-center">
        <div class="row">
            <div class="col-4">
                <button type="button"  class="btn btn-success">
                    <a href="carga_juguete.php" style="color:white" >Cargar Juguete</a>
                </button>
            </div>
            <div class="col-4">
                <button type="button"  class="btn btn-success">
                    <a href="carga_escolares.php" style="color:white" >Cargar Art. Escolar</a>
                </button>
            </div>
            <div class="col-4">
                <button type="button"  class="btn btn-success">
                    <a href="carga_libro.php" style="color:white" >Cargar Libro</a>
                </button>
            </div>
            <div class="col-4">
                <button type="button"  class="btn btn-warning">
                    <a href="bdd.php" style="color:white" >Juguetes ABM</a>
                </button>
            </div>
            <div class="col-4">
                <button type="button"  class="btn btn-warning">
                    <a href="abm_escolares.php" style="color:white" >Articulos Escolares ABM</a>
                </button>
            </div>
            <div class="col-4">
                <button type="button"  class="btn btn-warning">
                    <a href="abm_libros.php" style="color:white" >Libros ABM</a>
                </button>
            </div>

        </div>
    </div>
    <br>
     <!-- TABLA -->


    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-sm table-hover table table table-striped table-dark">
                    <thead>
                        <tr style="background: #005545; color: white" class="text-center">
                            <td>Producto</td><td>Marca</td><td>Stock</td><td>Precio</td><td>Imagen</td><td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php  
                        
                        while($z = mysqli_fetch_array($resultado1)){
                            if($z['borrar'] == 0){
                                echo "<tr>";
                                echo "<td>".$z['producto']."</td>";
                                echo "<td class='text-center'>".$z['marca']."</td>";
                                echo "<td class='text-center'>".$z['stock']."</td>";
                                echo "<td class='text-center'>".$z['precio']."</td>";
                                echo '<td>'.'<img src = "data:image/png;base64,'.base64_encode($z['img']).'"width = "100px" height = "100px"/>'.'</td>';
                                
                                

                                echo "<td>
                                        <a href='editar_escolares.php?producto=".$z['producto']."
                                        &marca=".$z['marca']."
                                        &stock=".$z['stock']."
                                        &precio=".$z['precio']."
                                        ' >Editar</a>
                                        ||
                                        <a href='borrar_escolares.php?producto=".$z['producto']."
                                        &marca=".$z['marca']."
                                        &precio=".$z['precio']."
                                        '>Borrar</a>
                                      </td>";
                                echo "</tr>";
                            }
                            
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