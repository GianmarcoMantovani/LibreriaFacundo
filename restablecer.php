<?php
  session_start();
  if(!isset($_SESSION ['autorizado'])){
    $_SESSION['autorizado']='no';
    $_SESSION['administrador']='no';
  }
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="CSS/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Archivos a incluir -->
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
<?php
 include "includes/conexion.php";
 $email =$_POST['email'];
 $bytes = random_bytes(5);/*genera bytes y abajo los convierte en hexadeximal*/
 $token =bin2hex($bytes);
?>
<?php

/* Conectamos con la base de datos y insertamos en la tabla passwords los campos, email, token, codigo*/
include "email_reset.php"; 
 if($enviado){  
    $conexion->query(" insert into passwords(email, token, codigo) 
    values('$email','$token','$codigo') ") or die ($conexion->error);

    echo ' <div class="container bootstrap snippets bootdey">
    <div class="alert alert-success alert-white rounded">
        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
        <div class="icon">
            <i class="fa fa-check"></i>
        </div>
        <strong>Exito!</strong> 
        Verifique su correo para cambiar la contraseña!
    </div>';
}

else{
    echo '<div class="alert alert-danger alert-white rounded">
    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
    <div class="icon">
        <i class="fa fa-times-circle"></i>
    </div>
    <strong>Error!</strong> 
    Error, volver a intentar el procedimiento
    </div>    
</div>';
}
?>
<body>
</body>
</html>