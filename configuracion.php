<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once "clases/Config.php";
    $config = new Config();
    $config = $config->obtenerConfiguracion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Configuración</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="card m-5" >
  <div class="card-body">
    <form class="row" action="actualizar.php" method="POST"> 
        <div class="col-md-10 ml-4">
            <div class="col-md-12">
                    <label><b>Configuración</b></label>
                    <div class="float-right mb-3 mr-2"><a href="index.php"><button type="button" class="btn btn-primary pull-rigth">Regresar</button></a></div>
                <hr>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="exampleFormControlInput1">Costo por vagon</label>
                </div>
                <div class="col-md-6">
                    <input type="number" step="0.01" class="form-control" name="precio_vagon" value="<?=$config['precio_vagon']?>" required >
                </div>
            </div>

            <div class="form-group row ">
                <div class="col-md-6">
                    <label for="exampleFormControlInput1">Costo por contenedor</label>
                </div>
                <div class="col-md-6">
                    <input type="number" step="0.01" class="form-control" name="precio_contenedor" value="<?=$config['precio_contenedor']?>" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="exampleFormControlInput1">Porcentaje de descuento a barcos por primeras 20 unidades</label>
                </div>
                <div class="col-md-6">
                    <input type="number" step="0.01" class="form-control" max=100 min=0 name="porcentaje_descuento" value="<?=$config['porcentaje_descuento']?>" required>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-info float-right">Actualizar</button>
            </div>
        </div>
    </form>
    </div>
    </div>
</body>
</html>
<?php
?>