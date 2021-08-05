<?php
session_start();

include("includes/conexion.php");

            $tipo = $_POST['tipo'];
            $cantidad = $_POST['can'];
            $p_id = $_POST['id'];
            $usuario = $_SESSION['usuario'];


if ($_SESSION['autorizado']=='si'){



            $contador = 0;

            if ($tipo == 'juguete') {
                $consulta = "select * from juguetes where ID='$p_id'";
                $resultado = mysqli_query($conexion, $consulta) or die('Error en la QUERRY');

                

                while($z = mysqli_fetch_array($resultado)){

                    if($z['borrar'] == 0){
                        $producto = $z['producto'];
                        $precio = $z['precio'];
                    }

                    $consulta1 = "select * from carrito where usuario='$usuario' and producto='$producto'";
                    $resultado1 = mysqli_query($conexion, $consulta1) or die('Error en la QUERRY');
                    while($z1 = mysqli_fetch_array($resultado1)){
                        if($z1['producto']==$producto){
                            $cant=$z1['cantidad']+$cantidad;
                            $alta = "UPDATE carrito SET cantidad = '$cant' WHERE carrito.usuario='$usuario' and carrito.producto = '$producto'";
                            $resultado_alta = mysqli_query($conexion,$alta);
                            $contador = 1;
                        }
                    }
                }
                if ($contador==0) {
                    $alta = "insert into carrito values('$usuario','$producto','$cantidad','$precio')";
                    $resultado_alta = mysqli_query($conexion,$alta);
                }
                
                


            }elseif ($tipo == 'escolares') {
                $consulta = "select * from escolares where ID='$p_id'";
                $resultado = mysqli_query($conexion, $consulta) or die('Error en la QUERRY');   

                while($z = mysqli_fetch_array($resultado)){
                    if($z['borrar'] == 0){
                        $producto = $z['producto'];
                        $precio = $z['precio'];
                    }
                    
                    $consulta1 = "select * from carrito where usuario='$usuario' and producto='$producto'";
                    $resultado1 = mysqli_query($conexion, $consulta1) or die('Error en la QUERRY');
                    while($z1 = mysqli_fetch_array($resultado1)){
                        if($z1['producto']==$producto){
                            $cant=$z1['cantidad']+$cantidad;
                            $alta = "UPDATE carrito SET cantidad = '$cant' WHERE carrito.usuario='$usuario' and carrito.producto = '$producto'";
                            $resultado_alta = mysqli_query($conexion,$alta);
                            $contador = 1;
                        }
                    }
                }
                if ($contador==0) {
                    $alta = "insert into carrito values('$usuario','$producto','$cantidad','$precio')";
                    $resultado_alta = mysqli_query($conexion,$alta);
                }


            }elseif ($tipo == 'libros') {
                $consulta = "select * from libros where ID='$p_id'";
                $resultado = mysqli_query($conexion, $consulta) or die('Error en la QUERRY');
                
                while($z = mysqli_fetch_array($resultado)){
                    if($z['borrar'] == 0){
                        $producto = $z['producto'];
                        $precio = $z['precio'];
                    }
                    
                    $consulta1 = "select * from carrito where usuario='$usuario' and producto='$producto'";
                    $resultado1 = mysqli_query($conexion, $consulta1) or die('Error en la QUERRY');
                    while($z1 = mysqli_fetch_array($resultado1)){
                        if($z1['producto']==$producto){
                            $cant=$z1['cantidad']+$cantidad;
                            $alta = "UPDATE carrito SET cantidad = '$cant' WHERE carrito.usuario='$usuario' and carrito.producto = '$producto'";
                            $resultado_alta = mysqli_query($conexion,$alta);
                            $contador = 1;

                        }
                    }
                }
                if ($contador==0) {
                    $alta = "insert into carrito values('$usuario','$producto','$cantidad','$precio')";
                    $resultado_alta = mysqli_query($conexion,$alta);
                }
                
            }

            header("Location:".$_SERVER['HTTP_REFERER']); 
}
else{
    header("Location:loguin.php");
}

            ?>
