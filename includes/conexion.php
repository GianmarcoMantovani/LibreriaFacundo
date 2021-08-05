<?php

        //Paso 1) Datos de conexion.
        $usuario = 'root';
        $clave = 'root';
        $servidor = 'localhost';
        $basededatos = 'libreria';

        // Paso 2) Creamos la conexion al servidor.
        $conexion = mysqli_connect($servidor,$usuario,$clave)
        or die('No se pudo conectar al servidor');

        // Paso 3) Conectamos con la BDD
        $bdd = mysqli_select_db($conexion,$basededatos)
        or die('No se pudo conectar con la base de datos');


?>