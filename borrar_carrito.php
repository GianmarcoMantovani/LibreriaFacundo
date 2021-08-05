<?php
session_start();

include("includes/conexion.php");

$p_producto = $_GET['producto'];
$usuario = $_SESSION['usuario'];



        $alta = "DELETE FROM `carrito` WHERE `usuario` = '$usuario' and `producto` = '$p_producto'";
        $resultado_alta = mysqli_query($conexion,$alta);
  
header("Location:".$_SERVER['HTTP_REFERER']);  
