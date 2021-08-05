<?php

include("includes/conexion.php");

$p_producto = $_POST['producto'];
$p_autor = $_POST['autor'];
$p_precio = $_POST['precio'];
$p_editorial = $_POST['editorial'];
$p_boton = $_POST['boton'];




// Estructura de decision 
if($p_boton==0){
    header('location:abm_libros.php');   
}else{
    $baja = "delete from libros where producto = '$p_producto' ";
    $resultado_baja = mysqli_query($conexion,$baja);
}


header('location:abm_libros.php');
exit();
?>