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

  <!-- CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">  

  <!-- Archivos a incluir -->
  <?php 

    include("includes/menu.php"); 
    include("includes/conexion.php");

    $busca = $_POST['buscar'];

    $buscar = mysqli_real_escape_string($conexion,$busca);


    //PASO 4 - consultas de SQL
    $consulta1 = "SELECT * FROM juguetes WHERE producto LIKE  ('%".$buscar."%') ";
    $consulta2 = "SELECT * FROM escolares WHERE producto LIKE  ('%".$buscar."%') ";
    $consulta3 = "SELECT * FROM libros WHERE producto LIKE  ('%".$buscar."%') ";

    //PASO 5 - ejecutar la querry
    $resultado1 = mysqli_query($conexion, $consulta1) or die('Error en la QUERRY 1');
    $resultado2 = mysqli_query($conexion, $consulta2) or die('Error en la QUERRY 2');
    $resultado3 = mysqli_query($conexion, $consulta3) or die('Error en la QUERRY 3');

      



  ?> 



</head>
<body class="container" ; background=  "img/fondo1.jpg" ;  >
    <?php menu(); ?>
    
    <br>
   
    
    


   

    <!-- MINIATURA DE JUGUETES -->
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
                  echo '<p>Cantidad: <input class="form-control" type="number" id="can" name="can" min="1" max="100" value="1"></p>';
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




<!-- MINIATURA DE ESCOLARES -->




     <div class="conteiner pt-5">
  <div class="row">
  <div class="col-sm-3">
  </div>
    <?php  
      while($z = mysqli_fetch_array($resultado2)){
        if($z['borrar'] == 0){
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
                  echo '<p>Cantidad: <input class="form-control" type="number" id="can" name="can" min="1" max="100" value="1"></p>';
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



<!-- MINIATURA DE LIBRO -->


<div class="conteiner pt-5">
  <div class="row">
  <div class="col-sm-3">
  </div>
    <?php  
      while($z = mysqli_fetch_array($resultado3)){
        if($z['borrar'] == 0){
          echo '<div class="col-sm-3">';
            
            echo '<div class="card">';
              echo '<img src="data:image/png;base64,'.base64_encode($z['img']).'" class="card-img-top" height = "200" alt="...">';
              echo '<div class="card-body">';
                echo "<h5 class='card-title'>".$z['producto']."</h5>";
                echo "<h6 class='card-subtitle mb-2 text-muted'>Autor: ".$z['autor']."</h6>";
                echo "<h6 class='card-text'>Precio: $".$z['precio']."</h6>";
                echo '<form action="carritoPost.php" method="post">';
                  echo '<input type="hidden" id="tipo" name="tipo" value="libros"></input>';
                  echo '<input type="hidden" id="id" name="id" value="'.$z['ID'].'"></input>';
                  echo '<p>Cantidad: <input class="form-control" type="number" id="can" name="can" min="1" max="100" value="1"></p>';
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
    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php include("footer.php"); ?> <!-- pie de pagina -->