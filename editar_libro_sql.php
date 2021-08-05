

<?php
   
        include('includes/conexion.php');

        $p_producto = $_POST['producto'];
        $p_editorial = $_POST['editorial'];
        $p_precio = $_POST['precio'];
        $p_stock = $_POST['stock'];
        $p_autor = $_POST['autor'];
        $p_boton = $_POST['boton'];

  $consulta3 = "SELECT * FROM libros WHERE producto = '$p_producto'";
             $resultado3 = mysqli_query($conexion, $consulta3);
             while($b = mysqli_fetch_assoc($resultado3)){
            
          
  $p_id = $b['ID'];

}
          ?>
    
        // Estructura de decision 
    <?php if($p_boton=1){
  $conexion->query("update libros set ID='$p_id', producto='$p_producto', stock='$p_stock', editorial='$p_editorial',
            autor='$p_autor', precio='$p_precio', borrar='0' where producto ='$p_producto' ")or die($conexion->error);
       }else{
  header('location:abm_libros.php');  
    }
header('location:abm_libros.php');  
?>