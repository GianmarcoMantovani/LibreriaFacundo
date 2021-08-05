<?php
// Varios destinatarios
$para  =$email. ', '; // atención a la coma


// título
$título = 'Restablecer contraseña';
$codigo = rand(1000,9999); // codigo que genera un numero aleatorio de 4 digitos

// mensaje que le aparecera en la bandeja de entrada del usuario
$mensaje = '
<html>
<head>
  <title>Recordatorio, ejemplo (lanzamiento de nuevos libros)</title>
</head>
<body>
  <h1>Libreria Facundo</h1>
<div style="text-aling:center; background-color:#ccc">
  <p>Restablecer contraseña</p>
  <h3>'.$codigo.'</h3> 
  <p>  <a href ="http://localhost/LIBRERIA/reset.php?email='.$email.'&token='.$token.'">
   para restablecer da click aqui </p>
  <p> <small> Si usted no envio este codigo por favor omitir</small> </p>
</div>
 
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// EDITAR PARA FUNCIONAMIENTO FINAL
$cabeceras .= 'To: pepito <pepito@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
//$cabeceras .= 'Cc: ejemplo1@example.com' . "\r\n";
//$cabeceras .= 'Bcc: ejemplo2@example.com' . "\r\n";

// Enviarlo -> Si todo sale bien se envia el siguiente correo 
$mail =@mail ($para, $titulo , $mensaje , $cabeceras);
$enviado =false;
if(mail($para, $título, $mensaje, $cabeceras))
{
    $enviado=true;
}
?>