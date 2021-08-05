<?php
session_start();

include("includes/conexion.php");

$subTotal = 0;
$total = 0;
$h = 0;
$usuario = $_SESSION['usuario'];
$productos = [];


$verificar = "select count(usuario) as nuevo from carrito where usuario='$usuario'";
$resultado_verificar = mysqli_query($conexion, $verificar) or die('Error en la QUERRY');

while($a = mysqli_fetch_assoc($resultado_verificar)){
    $existe1 = $a['nuevo'];
}



if($existe1 == 0){
        
    header("Location:".$_SERVER['HTTP_REFERER']); 
    exit(); 
    
}else{


        
    $consulta = "select * from carrito where usuario='$usuario'";
    $resultado = mysqli_query($conexion, $consulta) or die('Error en la QUERRY 1');

    
    

    while($z = mysqli_fetch_array($resultado)){

        $producto = $z['producto'];

        $consulta1 = "SELECT * FROM `juguetes` WHERE `producto`= '$producto'";
        $resultado1 = mysqli_query($conexion, $consulta1) or die('Error en la QUERRY 2');

        while($j = mysqli_fetch_array($resultado1)){
                
            $cantidad = $j['stock'];

            $stock = $cantidad - $z['cantidad'];

            $update = "UPDATE `juguetes` SET `stock`='$stock' WHERE `producto` = '$producto'";
            $resultado_update = mysqli_query($conexion, $update) or die('Error en la QUERRY juguetes');

        }

        $consulta2 = "SELECT * FROM `escolares` WHERE `producto`= '$producto'";
        $resultado2 = mysqli_query($conexion, $consulta2) or die('Error en la QUERRY 3');

        while($e = mysqli_fetch_array($resultado2)){
                
            $cantidad = $e['stock'];

            $stock = $cantidad - $z['cantidad'];

            $update = "UPDATE `escolares` SET `stock`='$stock' WHERE `producto` = '$producto'";
            $resultado_update = mysqli_query($conexion, $update) or die('Error en la QUERRY escolares');
            
        }

        $consulta3 = "SELECT * FROM `libros` WHERE `producto`= '$producto'";
        $resultado3 = mysqli_query($conexion, $consulta3) or die('Error en la QUERRY 4');

        while($e = mysqli_fetch_array($resultado3)){
                
            $cantidad = $e['stock'];

            $stock = $cantidad - $z['cantidad'];

            $update = "UPDATE `libros` SET `stock`='$stock' WHERE `producto` = '$producto'";
            $resultado_update = mysqli_query($conexion, $update) or die('Error en la QUERRY libros');
            
        }



        
        $subTotal = $z['precio']*$z['cantidad'];
        $total = $total+$subTotal;
        $productos[$h] = $z['producto']." [".$z['cantidad']."]";
        $h = $h + 1;
    }



    date_default_timezone_set('America/Argentina/Buenos_Aires');

    $lista_productos = implode(" - ",$productos);

    $fecha = date('d-m-Y h:i:s a', time());  

    $alta = "insert into compras values('$usuario','$lista_productos','$total','$fecha','')";
    $resultado_alta = mysqli_query($conexion, $alta) or die('Error en la QUERRY alta');

    $borrar = "DELETE FROM `carrito` WHERE `usuario` = '$usuario'";
    $resultado_borrar = mysqli_query($conexion, $borrar) or die('Error en la QUERRY borrar');




    header("Location: confirmacion_compra.php"); 

}

?>