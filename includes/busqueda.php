<?php
    function busqueda(){ ?>
    
        <!-- Etiqueta NAV general -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">

                <!-- Enlace al inicio y boton responsive -->    
                <a class="navbar-brand" href="index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>    

                <!-- div colapsable y lista final -->    
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav nav-pills ">

                        <!-- Elementos de la lista del menu -->
                
                        <form class="navbar-form navbar-left" role="search"> 
                        <div class="form-group"> <input type="text" name="buscador" id="buscador"  class="form-control" placeholder="Buscar producto"> <button type="submit"  class="btn btn-success">Buscar</button></div> 
                        
                        

                    </ul>
                </div>
                
                    
            </div>
        </nav>        
    <?php
    }
?>