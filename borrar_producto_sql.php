<?php

include("includes/conexion.php");

$p_producto = $_POST['producto'];
$p_marca = $_POST['marca'];
$p_precio = $_POST['precio'];
$p_tipoProducto = $_POST['tipoProducto'];
$p_boton = $_POST['boton'];




// Estructura de decision 
if($p_boton==0){
    header('location:bdd.php');

}else{
    $baja = "delete from juguetes where producto = '$p_producto' ";
    $resultado_baja = mysqli_query($conexion,$baja); 

}

header('location:bdd.php');
exit();






?>