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
    <title>Registro</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Archivos a incluir -->
    <?php  include('includes/menu.php');?>
    <?php  
        $mensaje = '';
        if(isset($_GET['mensaje'])){
            if($_GET['mensaje']=='uno'){echo '<script>window.alert("Las contraseñas no coinciden");</script>';}
        }
		if(isset($_GET['mensaje'])){
            if($_GET['mensaje']=='dos'){echo '<script>window.alert("La contraseña debe tener una Minuscula");</script>';}
        }
		if(isset($_GET['mensaje'])){
            if($_GET['mensaje']=='tres'){echo '<script>window.alert("La contraseña debe tener una Mayuscula");</script>';}
        }
		if(isset($_GET['mensaje'])){
            if($_GET['mensaje']=='cuatro'){echo '<script>window.alert("La contraseña debe tener un Número");</script>';}
        }
		if(isset($_GET['mensaje'])){
            if($_GET['mensaje']=='cinco'){echo '<script>window.alert("La contraseña debe tener al menos 6 caracteres");</script>';}
        }
		if(isset($_GET['mensaje'])){
            if($_GET['mensaje']=='seis'){echo '<script>window.alert("La contraseña no puede tener más de 16 caracteres");</script>';}
        }

    ?>
         <style>
.main{
 	margin-top: 70px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
</style>
         
</head>
<body class="container" ; background=  "img/fondo1.jpg" ;  style=" background-size: cover;">
    <?php menu(); ?>
	
    <!-- Titulo de la pagina -->
    <!--Formulario -->
    <div class="row  ">
        <div class="col-2 "></div>

        <div class="col-8 card text-white bg-dark mb-3 ">
            <form action="registro_sqL.php" method="post">
                <hr size="2px" color="black" />

                <!-- AGREGAR CARACTERES ESPECIALES -->
                <div class="form-group">
							<label for="usuario" class="cols-sm-2 control-label">Ingrese el usuario </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" maxlength="10" name="usuario" id="usuario" required placeholder="Ingresa tu usuario"/>
								</div>
							</div>
						</div>


                        <div class="form-group">
							<label for="clave" class="cols-sm-2 control-label">Ingrese la contraseña</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" maxlength="16" class="form-control" name="clave" id="clave" required placeholder="La contraseña debe tener entre 6 a 16 caracteres, al menos un numero, una letra mayuscula y una minuscula"/>
								</div>
							</div>
						</div>

                          <!--ARREGLAR PARA QUE AMBAS CONTRASEÑAS COINCIDAN Y SIGA -->
                        <div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirme contraseña</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" maxlength="16" class="form-control" name="clave2" id="clave2"  placeholder="confirma tu contraseña"/>
								</div>
							</div>
						</div>

                        <div class="form-group">
							<label for="nombre" class="cols-sm-2 control-label">Ingrese su nombre </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" maxlength="10" name="nombre" id="nombre" required placeholder="Ingresa tu usuario"/>
								</div>
							</div>
						</div>

                        <div class="form-group">
							<label for="apellido" class="cols-sm-2 control-label">Ingrese el apellido </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" maxlength="10" name="apellido" id="apellido" required placeholder="Ingresa tu apellido"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Ingresa tu email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="correo" id="correo" required  placeholder="Ingreas tu email"/>
								</div>
							</div>
						</div>
						
                <button type="submit" class="btn btn-success btn-block">Registrarse</button>
                <?php echo $mensaje; ?>
                <div class="login-register">
				            <a href="loguin.php">Login</a>
				         </div>
            </form>
        </div>
        
        <div class="col-2"></div>
    </div>    

    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>





