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
    <title>Libreria Facundo</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">  

    <!-- Archivos a incluir -->
    <?php include("includes/menu.php"); ?> 

</head>
<body class="container" ; background=  "img/fondo1.jpg" ;  style=" background-size: cover;">
    <?php menu(); ?>
    <br>


    <!--  PROMOCIONES  -->    
        <div class="alert alert-danger" role="alert" style="text-align: center;">PROMOCIONES</div>


        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-touch="false" data-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/envios.png" class="d-block w-100"    height = "300px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/dnicuenta.jpg" class="d-block w-100" height = "300px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/provincia.png" class="d-block w-100" height = "300px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/diapapa.jpg" class="d-block w-100" height = "300px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/6cuotas.jpg" class="d-block w-100" height = "300px" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControlsNoTouching" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControlsNoTouching" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>









    <!--  TABLA IMAGENES DE NOVEDADES  -->

      <div class="alert alert-danger" role="alert" style="text-align: center;">NOVEDADES</div>
    
         <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-sm table-hover table table table-striped table-dark border border-primary">
                    <thead>
                        <tr style="background: #005545; color: white" class="text-center">
                            <td><img class="border border-primary" src = "img/resplandor.jpg" width = "150px" height = "200px"/></td>

                             <td><img class="border border-secondary" src = "img/libro1.jpg" width = "150px" height = "200px"/></td>

                              <td><img class="border border-success" src = "img/libro2.jpg" width = "150px" height = "200px"/></td>

                               <td><img class="border border-danger" src = "img/libro3.jpg" width = "150px" height = "200px"/></td>

                                <td><img class="border border-warning" src = "img/libro4.jpg" width = "150px" height = "200px"/></td>

                                 <td><img class="border border-info" src = "img/libro5.jpg" width = "150px" height = "200px"/></td>

                                  <td><img class="border border-dark" src = "img/libro6.jpg" width = "150px" height = "200px"/></td>   <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                        
                    </tbody>
                </table>
            </div>

        </div>


        <br>

        <!--  TABLA IMAGENES DE PRODUCTOS POPULARES  -->

        <div class="alert alert-primary" role="alert" style="text-align: center;">POPULARES</div>
    
         <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-sm table-hover table table table-striped table-dark">
                    <thead>
                        <tr style="background: #005545; color: white" class="text-center">
                            <td><img class="border border-dark" src = "img/popular.jpg" width = "200px" height = "200px"/></td>

                             <td><img class="border border-info" src = "img/popular1.jpg" width = "200px" height = "200px"/></td>

                              <td><img class="border border-warning" src = "img/popular2.jpg" width = "200px" height = "200px"/></td>

                               <td><img class="border border-danger" src = "img/popular3.jpg" width = "200px" height = "200px"/></td>

                                <td><img class="border border-success" src = "img/popular4.jpg" width = "200px" height = "200px"/></td>

                                 <td><img class="border border-secondary" src = "img/popular5.jpg" width = "200px" height = "200px"/></td>

                                  <td><img class="border border-primary" src = "img/popular6.jpg" width = "200px" height = "200px"/></td>   <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                        
                    </tbody>
                </table>
            </div>

        </div>

    






      


    


    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>