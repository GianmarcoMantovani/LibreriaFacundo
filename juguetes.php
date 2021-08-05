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
    <title>JUGUETES</title>

    <!-- CSS Boostrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">  
    <!-- CSS -->
    <link href="css/app.css" rel="stylesheet">  

    <!-- Archivos a incluir -->
    <?php 
      include("includes/menu.php"); 
      include("includes/conexion.php");

      ///Paso 1) Datos de conexion.
      // Paso 2) Creamos la conexion al servidor.

      // Paso 3) Conectamos con la BDD

      //PASO 4 - consultas de SQL
      $consulta1 = "select * from juguetes";

      //PASO 5 - ejecutar la querry
      $resultado1 = mysqli_query($conexion, $consulta1) or die('Error en la QUERRY 1');

      //PASO 6 - Cerrar la conexion
    ?> 

</head>
<body class="container" ; background=  "img/fondo1.jpg" ;  >
    <?php menu(); ?>
    
    <br>
    <!--- Fila 1 carrusel--->


    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="img/jjj.jpg" class="d-block w-100" height = "300px" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="img/juguetes2.jpg" class="d-block w-100" height = "300px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/juguetes3.jpg" class="d-block w-100" height = "300px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/juguetes4.jpg" class="d-block w-100" height = "300px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/juguetes5.jpg" class="d-block w-100" height = "300px" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
  

    
<br>

<!--- Fila 2 Tabla --->



<div class="conteiner pt-5">
  <div class="row">
  <div class="col-sm-3">
  </div>
    <?php  
      while($z = mysqli_fetch_array($resultado1)){
        if($z['borrar'] == 0 && $z['stock'] > 0){
          echo '<div class="col-sm-3">';
            
            echo '<div class="card">';
              echo '<img src="data:image/png;base64,'.base64_encode($z['img']).'" class="card-img-top" height = "200" alt="...">';
              echo '<div class="card-body">';
                echo "<h5 class='card-title'>".$z['producto']."</h5>";
                echo "<h6 class='card-subtitle mb-2 text-muted'>Marca: ".$z['marca']."</h6>";
                echo "<h6 class='card-text'>Precio: $".$z['precio']."</h6>";
                echo '<form action="carritoPost.php" method="post">';
                  echo '<input type="hidden" id="tipo" name="tipo" value="juguete"></input>';
                  echo '<input type="hidden" id="id" name="id" value="'.$z['ID'].'"></input>';
                  echo '<p>Cantidad: <input class="form-control" type="number" id="can" name="can" min="1" max="'.$z['stock'].'" value="1"></p>';
                  echo '<button class="btn btn-primary"><ion-icon name="cart-sharp"></ion-icon>  Comprar</button>';
                echo '</form>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        }
      }
    ?>
  </div>
</div>



<br>
<br>
<br>
<br>
</body>
<!-- JavaScript -->
<script src="jquery/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- CSS Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>
<?php include("footer.php"); ?> <!-- pie de pagina -->