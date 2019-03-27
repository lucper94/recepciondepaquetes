
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="card m-5" >
  <div class="card-body">
    <form class="row" action="guardar.php" method="POST"> 
 
        <div class="col-md-12 row">
            <div class="col-md-12">
                <label><b>Informacion de factura</b></label>
                <div class="float-right mb-3 mr-2"><a href="index.php"><button type="button" class="btn btn-primary pull-rigth">Regresar</button></a></div>
                <hr>
                <br>
            </div>
            <div class="form-group col-md-12">
                <label>Nombre de la unidad</label>
                <input type="text" class="form-control" name="nombre_unidad" required>
            </div>

            <div class="form-group col-md-6">
                <label >Medio de transporte</label>
                <select class="custom-select" name="medio_transporte" required>
                    <option selected>Selecciona...</option>
                    <option value="ferrocarril">Ferrocarril</option>
                    <option value="barco">Barco</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label >Cantidad de unidades</label>
                <input type="number" class="form-control" name="cantidad_unidades" required>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-info float-right">Agregar</button>
            </div>
        </div>
    </form>
    </div>
    </div>
  
</body>
</html>
<?php
?>