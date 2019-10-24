<?php
    require_once("lib/funciones.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);

    $key = $_GET['indice'];
    $descripcion = $_POST['descripcion'];
    $modelo = $_POST['modelo'];
    $categoria = $_POST['categoria'];
    $unidades = $_POST['unidades'];
    $precio = $_POST['precio'];

    $registro = [
        "Id" => $key,
        "Descripcion" => $descripcion,
        "Modelo" => $modelo,
        "Categoria" => $categoria,
        "Unidades" => $unidades,
        "Precio" => $precio

    ];

    $tabla = actualizar($tabla,$registro,$key);

    require_once("template/libros.php")
?>