<?php
    require_once("lib/funciones.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);
    $ordenar = $_GET['ordenar'];
    $tabla = ordenar($tabla, $ordenar);

    require_once("template/libros.php");
?>