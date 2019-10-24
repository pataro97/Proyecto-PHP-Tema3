<?php
    require_once("lib/funciones.php");

    $tabla = generarTabla();

    $cabecera = array_keys($tabla[0]);

    $indice = $_GET['indice'];

    $tabla = eliminar($tabla, $indice);

    require_once("./template/libros.php");
?>