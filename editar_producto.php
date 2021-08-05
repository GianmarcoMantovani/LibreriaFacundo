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


    <?php  include('includes/menu.php');?>

    <?php  
    $producto = $_GET['producto'];
    $marca = $_GET['marca'];
    $precio = $_GET['precio'];
    $stock = $_GET['stock'];
    

    ?>

</head>
<body class="container" ; background=  "img/fondo1.jpg" ;  style=" background-size: cover;">
    <?php menu(); ?>


    <div class="alert alert-primary" align="center" role="alert">Editar Articulos Escolares </div>
    


    <div class="row"  style="background-color: RGB(255, 160, 122); ">
        <div class="col-2"></div>

        <div class="col-8">
            <form action="editar_producto_sql.php" method="post" enctype="multipart/form-data">
                <hr size="2px" color="black" />

                <div class="form-group">
                    <label for="producto">Producto</label>
                    <input type="text" id="producto" name="producto" readonly value="<?php echo $producto; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="marca">Marca</label>
                        <input type="text" id="marca" name="marca" value="<?php echo $marca; ?>" class="form-control">
                </div> 
                <div class="form-group">
                    <label for="precio">Precio</label>
                        <input type="text" id="precio" name="precio" value="<?php echo $precio; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="marca">Stock:</label>
                    <input type="text" id="stock" name="stock" value="<?php echo $stock; ?>" class="form-control">
                </div> 


                <hr size="2px" color="black" />

                                                           

                    <button type="submit" class="btn btn-primary btn-block" name="boton" value=1>Editar producto</button>
                    <button type="submit" class="btn btn-danger btn-block" name="boton" value=0>Cancelar la edicion</button>  
                <br><br>                             
            </form>
        </div>
        
        <div class="col-2"></div>
    </div>    


    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>





