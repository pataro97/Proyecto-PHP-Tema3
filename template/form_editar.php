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
            <form method="POST" action="../editar.php?indice=<?=$key?>">
            <p>Formulario Editar</p>
              <div class="form-group">
                <label>descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="<?= $descripcion ?>">
              </div>
              <div class="form-group">
                <label>modelo</label>
                <input type="text" class="form-control" name="modelo" value="<?= $modelo ?>">
              </div>
              <div class="form-group">
                <label>categoria</label>
                <select class="form-control" name="categoria">
                  <?php foreach ($generarDesplegable as $valor): ?>
                  <?php if ($valor == $categoria): ?>
                    <option selected="selected"><?=$valor?></option>
                  <?php else:?>
                      <option><?=$valor?></option>
                    <?php endif ?>
                  <?php endforeach;?>
                </select>
              </div>
              <div class="form-group">
                <label>unidades</label>
                <input type="text" class="form-control" name="unidades" value="<?= $unidades ?>">
              </div>
              <div class="form-group">
                <label>Precio</label>
                <input type="text" class="form-control" name="precio" value="<?= $precio ?>">
              </div>
              <a class="btn btn-danger" href="../index.php">Cancelar</a>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
        <?php require_once("partials/footer.php"); ?>
    </body>
</html>