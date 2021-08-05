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
    <title>Informacion</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">  

    <!-- Archivos a incluir -->
    <?php include("includes/menu.php"); ?> 

</head>
<body class="container" ; background=  "img/fondo1.jpg" ;  style=" background-size: cover;">
    <?php menu(); ?>
    <br>
    

    <img src="img/descarga.png" class="container"><br><br>

	

    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿Quienes somos?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="alert alert-secondary" role="alert">
          Somos un negocio familiar, llevamos mas de 35 años en el rubro de la jugueteria y libreria.
          Trabajamos directamente con la editorial Penguin Random House, una de las editoriales mas grandes del mundo.
          Trabajamos todo tipo de libros, escolares, novelas, infantiles y si no lo tenemos, lo conseguimos.
          Trabajamos todo tipo de juguetes y juegos de mesa.
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Contactanos
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">

          <div class="alert alert-danger" role="alert">
             Instagram: <a href="https://www.instagram.com/_libreriafacundo_/?hl=es-la" class="alert-link">_libreriafacundo_</a>
          </div>

          <div class="alert alert-primary" role="alert">
             Facebook: <a href="https://www.facebook.com/libreria.facundo" class="alert-link">Libreria Facundo</a>
          </div>

          <div class="alert alert-success" role="alert">
             Telefono: <a  class="alert-link"> (02344)-450827</a>
          </div>

          <div class="alert alert-secondary" role="alert">
             Direccion:  <a href="https://www.google.com/maps/contrib/107767443029582548986/place/ChIJJTJRXe_gvZURT0RCbRFozQ4/@-35.6363566,-59.7800479,16.3z/data=!4m6!1m5!8m4!1e1!2s107767443029582548986!3m1!1e1" class="alert-link"> Rivadavia 3072 - Saladillo Bs.As.</a>
          </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          ¿Que vendemos?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">

        <div class="alert alert-secondary" role="alert">
          - LIBROS (de todos los tipos)
        </div>
        <div class="alert alert-secondary" role="alert">
          - JUEGOS DE MESA
        </div>
        <div class="alert alert-secondary" role="alert">
          - JUGUETES
        </div>
        <div class="alert alert-secondary" role="alert">
          - ARTICULOS ESCOLARES
        </div>
        
      </div>
    </div>
  </div>
</div>


    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php include("footer.php"); ?> <!-- pie de pagina -->