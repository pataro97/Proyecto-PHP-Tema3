<?php
  require_once("../lib/funciones.php");
  $tabla = generarTabla();
  $key = $_GET['indice'];
  $registro = $tabla[$key];
  $id = $registro['Id'];
  $descripcion = $registro['Descripcion'];
  $modelo = $registro['Modelo'];
  $categoria = $registro['Categoria'];
  $unidades = $registro['Unidades'];
  $precio = $registro['Precio'];

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
            <p>Detalle</p>
            <form method="POST" action="../editar.php?indice=<?=$key?>">
              <div class="form-group">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="<?= $descripcion ?>" disabled>
              </div>
              <div class="form-group">
                <label>Modelo</label>
                <input type="text" class="form-control" name="modelo" value="<?= $modelo ?>" disabled>
              </div>
              <div class="form-group">
                <label>Categoria</label>
                <input type="text" class="form-control" name="categoria" value="<?= $categoria ?>" disabled>
              </div>
              <div class="form-group">
                <label>Unidades</label>
                <input type="text" class="form-control" name="unidades" value="<?= $unidades ?>" disabled>
              </div>
              <div class="form-group">
                <label>Precio</label>
                <input type="text" class="form-control" name="precio" value="<?= $precio ?>" disabled>
              </div>
              <a class="btn btn-danger" href="../index.php">Cancelar</a>
            </form>
        </div>
        <?php require_once("partials/footer.php"); ?>
    </body>
</html>