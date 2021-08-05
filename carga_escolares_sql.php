<?php
$check = getimagesize($_FILES["imagen"]["tmp_name"]);
if($check != false){
    include('includes/conexion.php');

    
    $producto = $_POST['producto'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $imagen = $_FILES['imagen']["tmp_name"];
    $imgContent = addslashes(file_get_contents($imagen));

    
    $consulta1 = "select count(producto) as nuevo from escolares where producto = '$producto'";

    $resultado1 = mysqli_query($conexion,$consulta1);

    while($a = mysqli_fetch_assoc($resultado1)){
        $existe1 = $a['nuevo'];
    }

    
    if($existe1 == 1){
        
        header('location:abm_escolares.php');
        exit(); 
        
    }else{
        
            $alta = "insert into escolares values('','$producto','$marca','$precio',$stock,0,'$imgContent')";
            $resultado_alta = mysqli_query($conexion,$alta);
        }
        


        header('location:abm_escolares.php');
        exit();

    }


?>