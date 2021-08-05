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
    <title></title>

    <!-- CSS / MEJORARLO-->
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
 <!-- estilos -->
<style>
.colorlogin {
  background: #fff; 

}
  </style>
</head>

<body class="container" ; background=  "img/fondo1.jpg" ;  style=" background-size: cover;">
<?php menu(); ?>
    <br>
    <!-- CARRUSEL -->
    <section>
        <div class="row g-0">
            <div class="col-lg-8 d-none d-lg-block">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item mejlibrofant min-vh-100 active">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold">Atencion al cliente al momento!</h5>
                          <a class="badge badge-primary">Visita nuestra tienda</a>
                        </div>
                      </div>
                      <div class="carousel-item mejlibrosterror min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold">Descubre nuevos libros!</h5>
                          <a class="badge badge-primary">Visita nuestra tienda</a>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <!-- LOGIN -->
            <div class="col-lg-4 colorlogin d-flex flex-column align-items-end min-vh-100">
                <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">

                <form action="ingresar.php" method="post">
                <!--<form class="mb-5">-->
                    <div class="mb-4">
                      <label for="user" class="form-label text-dark font-weight-bold required">Usuario</label>
                       <b-input-group>
                       <input type="text" name="user"  maxlength="10" class="form-control bg-dark-x border-0" id="user" placeholder="Ingresa tu usuario" required aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                      <label for="pass" class="form-label font-weight-bold required">Contraseña</label>
                      
                      <input type="password" name="pass" maxlength="16" class="form-control bg-dark-x border-0 mb-2" placeholder="Ingresa tu contraseña" required id="pass">
                      
                      <a href="recuperarcontraseña.php" id="" class="form-text text-danger text-decoration-none">¿Has olvidado tu contraseña?</a>
                    </div>
                    <button type="submit" id="button" class="btn btn-success btn-block">Iniciar sesión</button>
                  </form><!--- 
                <p class="font-weight-bold text-center text-muted">O inicia sesión con</p>
                <div class="d-flex justify-content-around">
                    <button type="button" class="btn btn-danger flex-grow-1 mr-2"><i class="fab fa-google lead mr-2"></i> Google</button>
                    <button type="button" class="btn btn-primary flex-grow-1 ml-2"><i class="fab fa-facebook-f lead mr-2"></i> Facebook</button>
                </div> --->
                </div>
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 mt-auto w-100">
                    <p class="d-inline-block mb-0">¿Todavia no tienes una cuenta?</p> <a href="registro.php" class="text-dark font-weight-bold text-decoration-none">Crea una ahora</a>
                </div>
            </div>
        </div>
      </section>
    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html> <?php include("footer.php"); ?> <!-- pie de pagina -->