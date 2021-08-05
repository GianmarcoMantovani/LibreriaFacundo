<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja</title>


    <link href="css/bootstrap.min.css" rel="stylesheet"> 


    <?php  
    
        $producto = $_GET['producto'];
        $editorial = $_GET['editorial'];
        $precio = $_GET['precio'];
        $autor = $_GET['autor'];

    ?>
    

</head>
<body class="container">


    <div class ="alert alert-dark" role= "alert">
        <h5 class="text-center">Baja de Libro.</h5>
     </div>


     <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            
                <form action="borrar_libro_sql.php" method="post">
                    <div class="form-group">
                        <label for="producto">Producto</label>
                        <input type="text" id="producto" name="producto" readonly value="<?php echo $producto; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="marca">Editorial</label>
                        <input type="text" id="editorial" name="editorial" readonly value="<?php echo $editorial; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" id="precio" name="precio" readonly value="<?php echo $precio; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tipoProducto">Autor</label>
                        <input type="text" id="autor" name="autor" readonly value="<?php echo $autor; ?>" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="boton" value=1>Eliminar Libro</button>
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