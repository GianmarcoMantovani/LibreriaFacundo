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
    <title>Carrito</title>

    <!-- CSS Boostrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">  
    <!-- CSS -->
    <link href="css/app.css" rel="stylesheet">  

    <!-- Archivos a incluir -->
    <?php 
        include("includes/menu.php"); 
        include("includes/conexion.php");

        $subTotal = 0;
        $total = 0;
        $usuario = $_SESSION['usuario'];


        $consulta = "select * from carrito where usuario='$usuario'";
        $resultado = mysqli_query($conexion, $consulta) or die('Error en la QUERRY');
    ?> 

</head>
<body class="container" ; background=  "img/fondo1.jpg" ;  >
    <?php menu(); ?>

    <br>
    <!--- Carrito Tabla --->

    <div class="conteiner pt-4">
        <div class="row">
            <table class="table table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col-4">Producto</th>
                        <th scope="col-3">Precio $</th>
                        <th scope="col-1">Cantidad</th>
                        <th scope="col-3">Subtotal $</th>
                        <th scope="col-1"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php while($z = mysqli_fetch_array($resultado)){
                        $subTotal = $z['precio']*$z['cantidad'];
                        $total = $total+$subTotal;
                        ?>
                        <tr>
                            <td class="pt-4"><?php echo $z['producto']?></td>
                            <td class="pt-4"><?php echo $z['precio']?></td>
                            <td class="pt-4"><?php echo $z['cantidad']?></td>
                            <td class="pt-4"><?php echo $subTotal?></td>
                            <td><a href="borrar_carrito.php?producto=<?php echo $z['producto']?>" id="btn-delete" class="btn btn-danger"><ion-icon name="trash-sharp"></ion-icon></a></td>
                        </tr>
                    <?php  }?>
                </tbody>
            </table>

        </div>
        <div  class="alert alert-info" role="alert">
            <h4 class="text-right">Total: $
                <spam id="total" class="text-darck" ><?php echo $total?> </spam>
                <a href="pago.php" type="button" class="btn btn-outline-danger">Pagar</a>
            </h4>
            
        </div>

       
    </div>



<br>
<br>
<br>
<br>
<!-- JavaScript -->
<script src="jquery/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>



</body>

<!-- CSS Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>
<?php include("footer.php"); ?> <!-- pie de pagina -->