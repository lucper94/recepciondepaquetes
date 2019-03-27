
<?php
require_once 'clases/Factura.php';
$facturas = Factura::obtenerFacturas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recepcion</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="card m-5" >
        <div class="card-body p-4">
            <div class="col-md-12 ">
                <label><b>Recepción de paquetes de carga</b></label>
                <hr>
                <div class="float-right mb-3 mr-2"><a href="nuevo.php"><button type="button" class="btn btn-primary pull-rigth">+ Nueva Factura</button></a></div>
                <div class="float-right mb-3 mr-2"><a href="configuracion.php"><button type="button" class="btn btn-warning pull-rigth">Configuración de precios</button></a></div>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre de la unidad</th>
                        <th scope="col">Medio de transporte</th>
                        <th scope="col">Cantidad de unidades</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Detalle</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($facturas as $key => $factura) {
                                
                        ?>
                                <tr>
                                <th scope="row"><?=$factura['id']?></th>
                                <td><?=$factura['nombre_unidad']?></td>
                                <td><?=$factura['medio_transporte']?></td>
                                <td><?=$factura['cantidad_unidades']?></td>
                                <td><?=$factura['fecha_creacion']?></td>
                                <td><a href="detalle.php?id=<?=$factura['id']?>"><button type="button" class="btn btn-info">Detalle</button></a></td>
                                </tr>
                        <?php
                            }
                        ?>
                       
                        
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</body>
</html>
<?php
?>