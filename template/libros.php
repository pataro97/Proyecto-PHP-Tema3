<?php $numArt = 0; ?>
<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap4\css\bootstrap.css" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    </head>
    <body>
        <div class="container">
            <?php require_once("template/partials/head.php") ?>
            <?php require_once("template/menu.php") ?>
            <article>
                <table class="table  table-inverse">
                    <thead class="thead">
                        <tr>
                            <th colspan="10">Articulos</th>
                        </tr>
                        <tr>
                        <?php foreach($cabecera as $atributo):?>
                            <th><?=$atributo?></th>
                        <?php endforeach;?> 
                        <th>Acciones</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php foreach ($tabla as $key => $libro):?>
                            <?php $numArt++; ?>
                            <tr>
                                <?php foreach ($libro as $valor):?>
                                <td><?=$valor?></td>
                                <?php endforeach;?>
                                <td>
                                    <a href="eliminar.php?indice=<?=$key?>" tittle="borrar">
                                        <i class="material-icons">clear</i>
                                    </a>
                                    <a tittle="modificar" href="template/form_editar.php?indice=<?=$key?>">
                                        <i  class="material-icons">edit</i>
                                    </a>
                                    <a tittle="modificar" href="template/form_detalle.php?indice=<?=$key?>">
                                        <i  class="material-icons">book</i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        
                    </tbody>
                </table>
                <p>Numero de articulos <?= $numArt?></p>
            </article>  
        </div>
        <?php require_once("template/partials/footer.php") ?>
        <!--JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>