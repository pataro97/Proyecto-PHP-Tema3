<?php
    require_once("../lib/funciones.php");
    $generarDesplegable = generarDesplegable();
?>
<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../bootstrap4\css\bootstrap.css" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <?php require_once("partials/head.php"); ?>
            <p>Añadir nuevo producto:</p>
            <form method="POST" action="../añadir.php">
              <div class="form-group">
                <label>descripcion</label>
                <input type="text" class="form-control" name="descripcion">
              </div>
              <div class="form-group">
                <label>modelo</label>
                <input type="text" class="form-control" name="modelo">
              </div>
              <div class="form-group">
                <label>categoria</label>
                <select class="form-control" name="categoria">
                  <?php foreach ($generarDesplegable as $valor): ?>
                    <option><?=$valor?></option>
                  <?php endforeach;?>
                </select>
              </div>
              <div class="form-group">
                <label>unidades</label>
                <input type="text" class="form-control" name="unidades">
              </div>
              <div class="form-group">
                <label>Precio</label>
                <input type="number" class="form-control" name="precio">
              </div>
              <a class="btn btn-danger" href="../index.php">Cancelar</a>
              <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
        <?php require_once("partials/footer.php"); ?>
    </body>
</html>