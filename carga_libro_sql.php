<?php
$check = getimagesize($_FILES["imagen"]["tmp_name"]);
if($check != false){
    include('includes/conexion.php');

    
    $libro = $_POST['libro'];
    $autor = $_POST['autor'];
    $precio = $_POST['precio'];
    $editorial = $_POST['edit'];
    $stock = $_POST['stock'];
    $imagen = $_FILES['imagen']["tmp_name"];
    $imgContent = addslashes(file_get_contents($imagen));
    $genero = $_POST['genero'];

    
    $consulta1 = "select count(producto) as nuevo from libros where producto = '$libro'";
    

    $resultado1 = mysqli_query($conexion,$consulta1);

    while($a = mysqli_fetch_assoc($resultado1)){
        $existe1 = $a['nuevo'];
    }
    
    
    if($existe1 == 1 ){
        
        header('location:abm_libros.php');
        exit();

    }else{
        
           
        


            $alta = "insert into libros values('','$libro','$stock' ,'$editorial','$autor','$precio',0,'$imgContent')";
            $resultado_alta = mysqli_query($conexion,$alta);
        
        }
        
        header('location:abm_libros.php');
        exit();

    
}else{
    header('location:abm_libros.php');
    exit();
}

?>