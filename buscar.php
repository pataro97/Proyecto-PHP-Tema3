<?php
    require_once("lib/funciones.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);
    $expresion = $_GET['texto'];
    $tabla = filtrar($tabla, $expresion);

    require_once("template/libros.php");
?>