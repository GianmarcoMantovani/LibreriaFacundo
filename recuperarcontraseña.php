<?php
  session_start();
  if(!isset($_SESSION ['autorizado'])){
    $_SESSION['autorizado']='no';
    $_SESSION['administrador']='no';
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olvide mi contraseña</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Archivos a incluir -->
    <?php  include('includes/menu.php');?>
    <?php  
        

    ?>

</head>
<body class="container" ; background=  "" ;  style=" background-size: cover;">
    <?php menu(); ?>

    <!-- Titulo de la pagina -->
        <div class="alert alert-primary" aling="center" role="alert">Recuperacion de contraseña </div>
    

    <!--Formulario -->



    <div class="row  ">
        <div class="col-2 "></div>

        <div class="col-8 card text-white bg-dark mb-3 ">
            <form action="restablecer.php" method="post">
                <hr size="2px" color="black" />

                <div class="form-group">
							<label for="clave" class="cols-sm-2 control-label">Ingrese un email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="email" id="usuario" name="email" required placeholder="Ingrese un correo" class="form-control">
								</div>
							</div>
						</div>
                


                <button type="submit" class="btn btn-success btn-block">Enviar</button>
            
              
            </form>
        </div>
        
        <div class="col-2"></div>
    </div>    

    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>





