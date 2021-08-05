<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja de juguete</title>


    <link href="css/bootstrap.min.css" rel="stylesheet"> 


    <?php  
    
        $producto = $_GET['producto'];
        $marca = $_GET['marca'];
        $precio = $_GET['precio'];

    ?>
    

</head>
<body class="container">


    <div class ="alert alert-dark" role= "alert">
        <h5 class="text-center">Baja de juguete.</h5>
     </div>


     <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            
                <form action="borrar_producto_sql.php" method="post">
                    <div class="form-group">
                        <label for="producto">Producto</label>
                        <input type="text" id="producto" name="producto" readonly value="<?php echo $producto; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" id="marca" name="marca" readonly value="<?php echo $marca; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" id="precio" name="precio" readonly value="<?php echo $precio; ?>" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block" name="boton" value=1>Eliminar registros</button>
                    <button type="submit" class="btn btn-danger btn-block" name="boton" value=0>Cancelar la baja</button>
                </form>
            
            </div>
            <div class="col-3"></div>
        </div>
     </div>
     
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>