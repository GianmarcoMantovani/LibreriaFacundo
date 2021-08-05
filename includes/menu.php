<?php
    function menu(){ ?>


    <style>
     
/* ICONO CONECTADO */
.fa-circle{
  color: green;
}
.fa-user{
  color:orange;
}

     </style>
    
        <!-- Etiqueta NAV general -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">

                <!-- Enlace al inicio y boton responsive -->    
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" width = "75px" height = "75px"></img></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>    

                <!-- div colapsable y lista final -->    
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav nav-pills ">

                        <!-- Elementos de la lista del menu -->
                        <?php
                            if($_SESSION['administrador']=='si'){
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administracion
                                </a>
                                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-primary" href="bdd.php">Bases de Datos</a>
                                    <a class="dropdown-item text-primary" href="ventas.php">Ventas</a>
                                    
                                </div>
                            </li>
                        <?php
                            }
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Productos
                            </a>
                            <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-primary" href="juguetes.php">Juguetes</a>
                                <a class="dropdown-item text-primary" href="articulos_escolares.php">Articulos Escolares</a>
                                <a class="dropdown-item text-primary" href="libros.php">Libros</a>
                                
                            </div>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="informacion.php">Información</a>
                        </li>

                        <!-- buscador -->
                        <li class="nav-item active">
                         <div >
                            <form action="buscador.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                            <input type="text" id="buscar" name="buscar" maxlength="15" placeholder="Ingrese producto a buscar" class="form-control">
                            </div>
                        </li>

                        <li class="nav-item active">
                            <div>
                             <button type="submit" name="submit" class="btn btn-primary btn-block">Buscar</button>  
                            </div> 
                            </form>
                        </div>
                        
                        

                    </ul>
                </div>




                <?php
                    if($_SESSION['autorizado']=='no'){
                ?>
                <div class="navbar navbar-expand-lg">
                    <ul class="nav nav-pills ">
                        <form class="form-inline my-2 my-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="loguin.php">Login</a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="registro.php">Registrarse</a>
                            </li>
                        </form>
                        

                    </ul>
                </div>
                <?php
                    }else{
                ?>
                
                <?php if($_SESSION['administrador']=='no'){ ?>
                    <div class="navbar navbar-expand-lg">
                        <ul class="nav nav-pills ">
                            <form class="form-inline my-2 my-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="carrito.php"><ion-icon name="cart-sharp"></ion-icon>(<?php   
                                        include("includes/conexion.php");
                                        $usuario = $_SESSION['usuario'];
                                        $consulta = "select * from carrito where usuario='$usuario'";
                                        $resultado = mysqli_query($conexion, $consulta) or die('Error en la QUERRY');

                                        $contador = 0;

                                        while($z = mysqli_fetch_array($resultado)){
                                        $contador = $contador + 1;
                                        } 
                                        echo $contador; 
                                    ?>)</a>
                                </li>
                            </form>
                        </ul>
                    </div>
                <?php } ?>
                
                <div class="navbar navbar-expand-lg">
                    <ul class="nav nav-pills ">
                        <form class="form-inline my-2 my-lg-0">
                            
                            
                             <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-circle" aria-hidden="true"></i>

          <i class="fas fa-user"></i>

          <!-- AQUI APARECE EL NOMBRE DEL USUARIO CUANDO INICIA SESION -->
          <?php
          if ((isset($_SESSION['administrador'])) or ($_SESSION['autorizado'] != ""))
         {
         
          echo "Hola ". $_SESSION['usuario'];

           }
       ?>




      </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="perfil_usuario.php">Mi Cuenta</a>
          <a class="dropdown-item" href="#">Ayuda </a>
          <a class="dropdown-item" href="cerrar.php">Cerrar sesion </a>
        </div>
      </li>
                        </form>
                    </ul>
                </div>
                <?php
                    }
                ?>

               


                    
            </div>
                  
        </nav>        
    <?php
    }
?>
<!-- CSS Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
