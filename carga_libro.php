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
    <title>Formulario</title>


    <link href="css/bootstrap.min.css" rel="stylesheet"> 


    <?php  include('includes/menu.php');?>

    <?php  
        $mensaje = 'Datos Cargados';
        if(isset($_GET['mensaje'])){
            if($_GET['mensaje']=='uno'){$mensaje = 'Cargue los datos';}
        }

    ?>

</head>
<body class="container" ; background=  "img/fondo1.jpg" ;  style=" background-size: cover;">
    <?php menu(); ?>


    <div class="alert alert-primary" align="center" role="alert">CARGA DE LIBROS </div>
    


    <div class="row"  style="background-color: RGB(255, 160, 122); ">
        <div class="col-2"></div>

        <div class="col-8">
            <form action="carga_libro_sql.php" method="post" enctype="multipart/form-data">
                <hr size="2px" color="black" />

                <div class="form-group">
                    <label for="producto">Libro:</label>
                    <input type="text" id="libro" name="libro" placeholder="Ingrese nombre del libro" class="form-control">
                </div>
                <div class="form-group">
                    <label for="marca">Autor:</label>
                    <input type="text" id="autor" name="autor" placeholder="Stephen King, Gabriel García Márquez, Florencia Bonelli, etc..." class="form-control">
                </div> 
                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="number" id="precio" name="precio" placeholder="Ingrese el precio del producto" class="form-control">
                </div>

                <div class="form-group">
                    <label for="precio">Editorial:</label>
                    <input type="text" id="edit" name="edit" placeholder="Ingrese la editorial del libro" class="form-control">
                </div>

                <div class="form-group">
                    <label for="marca">Stock:</label>
                    <input type="number" id="stock" name="stock" placeholder="Ingresar la cantidad de libros que hay en stock" class="form-control">
                </div> 

                <hr size="2px" color="black" />

                <div class="form-group">
                    <label for="exampleFormControlFile1">Cargar imagen del libro</label>
                    <input type="file" class="form-control-file" id="imagen" name="imagen">
                </div>


                <hr size="2px" color="black" />

                <fieldset>
                    <legend>Genero del libro</legend>
                    
                    <div class="form-group">
                        <label>
                            <input type="radio" name="genero" value="LibroTerror"> Suspenso / Terror
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="genero" value="LibroRomantico"> Romantico
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="genero" value="LibroPolicial"> Policial
                        </label>
                    </div>   
                    <div class="form-group">
                        <label>
                            <input type="radio" name="genero" value="LibroBiografia"> Biografia
                        </label>
                    </div>      
                    <div class="form-group">
                        <label>
                            <input type="radio" name="genero" value="LibroHistorico"> Historico
                        </label>
                    </div>       
                    <div class="form-group">
                        <label>
                            <input type="radio" name="genero" value="LibroeEscolar"> Escolar
                        </label>
                    </div>      
                </fieldset>  

                <hr size="2px" color="black" />

                                                           

                <button type="submit" name="submit" class="btn btn-primary btn-block">Enviar</button>  
                <br><br>                             
            </form>
        </div>
        
        <div class="col-2"></div>
    </div>    


    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>





