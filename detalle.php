
<?php
require_once 'clases/Factura.php';
require_once 'clases/Detalle_Factura.php';
$factura = Factura::obtenerFactura($_GET['id']);
$detalles = Detalle_Factura::obtenerDetalle($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="card m-5" >
        <div class="card-body">
            <div class="col-md-12">
                <label><b>Detalle de factura</b></label>
                <div class="float-right mb-3 mr-2"><a href="index.php"><button type="button" class="btn btn-primary pull-rigth">Regresar</button></a></div>
                <hr>
            </div>

            <div class="col-md-8 row">
                <div class="col-md-6">
                    <label>ID</label>
                </div>
                <div class="col-md-6">
                    <label><b><?=$factura['id']?></b></label>
                </div>
            </div>
            <div class="col-md-8 row">
                <div class="col-md-6">
                    <label>Fecha</label>
                </div>
                <div class="col-md-6">
                    <label><b><?=$factura['fecha_creacion']?></b></label>
                </div>
            </div>
            <div class="col-md-8 row">
                <div class="col-md-6">
                    <label>Nombre de unidad</label>
                </div>
                <div class="col-md-6">
                    <label><b><?=$factura['nombre_unidad']?></b></label>
                </div>
            </div>
            <div class="col-md-8 row">
                <div class="col-md-6">
                    <label>Medio de transporte</label>
                </div>
                <div class="col-md-6">
                    <label><b><?=$factura['medio_transporte']?></b></label>
                </div>
            </div>
            <div class="col-md-8 row">
                <div class="col-md-6">
                    <label>Cantidad de unidades</label>
                </div>
                <div class="col-md-6">
                    <label><b><?=$factura['cantidad_unidades']?></b></label>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Factura ID</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Descuento</th>
                        <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $total = 0;
                            $total_descuento = 0;
                            foreach ($detalles as $key => $detalle) {
                            $total += $detalle['precio'];
                            $total_descuento += $detalle['descuento'];
                        ?>
                                <tr>
                                <th scope="row"><?=$key+1?></th>
                                <td><?=$detalle['factura_id']?></td>
                                <td><?="$".number_format($detalle['precio'],2)?></td>
                                <td><?="$".number_format($detalle['descuento'],2)?></td>
                                <td><b><?="$".number_format($detalle['precio']-$detalle['descuento'],2)?></b></td>
                                </tr>
                        <?php
                            }
                        ?>
                       
                        <tfoot>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"><?="$".number_format($total_descuento,2)?></th>
                            <th scope="col"><?="$".number_format($total,2)?></th>
                            </tr>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Total a pagar</th>
                            <th scope="col"><?="$".number_format($total-$total_descuento,2)?></th>
                            </tr>
                        </tfoot>
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</body>
</html>
<?php
?>