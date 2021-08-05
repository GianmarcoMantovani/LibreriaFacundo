<?php
   
        include('includes/conexion.php');

        $p_producto = $_POST['producto'];
        $p_marca = $_POST['marca'];
        $p_precio = $_POST['precio'];
        $p_stock = $_POST['stock'];
        $p_boton = $_POST['boton'];

  $consulta3 = "SELECT * FROM escolares WHERE producto = '$p_producto'";
             $resultado3 = mysqli_query($conexion, $consulta3);
             while($b = mysqli_fetch_assoc($resultado3)){
            
          
  $p_id = $b['ID'];

}
          ?>
    
        // Estructura de decision 
    <?php if($p_boton=1){
  $conexion->query("update escolares set ID='$p_id', producto='$p_producto', marca='$p_marca', precio='$p_precio', stock='$p_stock', borrar='0' where producto ='$p_producto' ")or die($conexion->error);
       }else{
  header('location:abm_escolares.php');  
    }
header('location:abm_escolares.php');  
?>