<?php
include "includes/conexion.php";
 $email =$_POST['email'];
 $token =$_POST['token'];
 $codigo =$_POST['codigo'];
 $res=$conexion->query("select * from passwords where 
     email='$email' and token='$token' and codigo=$codigo")or die($conexion->error);
 $correcto=false;
 /*VER EN QUE FECHA SE CREO EL TOKEN PARA VERIFICAR QUE NO ESTE VENCIDO*/ 
 if(mysqli_num_rows($res) > 0){
     $fila = mysqli_fetch_row($res);
     $fecha =$fila[4];
     $fecha_actual=date("Y-m-d h:m:s");
     $seconds = strtotime($fecha_actual) - strtotime($fecha);
     $minutos=$seconds / 60;
     $correcto=true;
 }else{
    $correcto=false;
}
?>
<?php
  session_start();
  if(!isset($_SESSION ['autorizado'])){
    $_SESSION['autorizado']='no';
    $_SESSION['administrador']='no';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar contraseña </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<?php include("includes/menu.php"); ?>
    <?php  
        $mensaje = 'Ingrese los datos';
        if(isset($_GET['mensaje'])){
            if($_GET['mensaje']=='uno'){$mensaje = 'Los datos ingresados son incorrectos';}
        }
     ?>

</head>
<body class="container" ; background=  "" ;  style=" background-size: cover;">
<?php menu(); ?> <!-- ERROR SI ELIMINO UN INCLUDE NO FUNCIONA EL MENU PRINCIPAL -->
<body>
<div class="row  ">
        <div class="col-2 "></div>

        <div class="col-8 card text-white bg-dark mb-3 ">
        <?php if($correcto){ ?>
                <form action="cambiarpassword.php" method="POST">
                <hr size="2px" color="black" />

                    <h2>Restablecer contraseña</h2>
                    <div class="mb-3">
                        <label for="c" class="form-label">Nuevo contraseña</label>
                        <input type="password" class="form-control" id="usuario" name="p1">
                    
                    </div>
                    <div class="mb-3">
                        <label for="c" class="form-label">Confirmar contraseña</label>
                        <input type="password" class="form-control" id="usuario" name="p2">
                        <input type="hidden" class="form-control" id="usuario" name="email" value="<?php echo $email?>">

                    </div>
                
                    <button type="submit" class="btn btn-success">Cambiar contraseña!</button>
                </form>
            <?php }else{ ?>
                <div class="alert alert-danger" >Código incorrecto o vencido</div> <!--La idea que el codigo pierda validez con el tiempo -->
            <?php } ?>

        </div>
    </div>
    <div class="col-2"></div>
    </div>    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>

 


