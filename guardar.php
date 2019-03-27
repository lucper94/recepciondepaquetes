<?php

include_once "clases/Factura.php";

try
{
$factura = new Factura();
$factura->nombre_unidad = $_POST['nombre_unidad'];
$factura->medio_transporte = $_POST['medio_transporte'];
$factura->cantidad_unidades = $_POST['cantidad_unidades'];
if($factura->agregarFactura()){
    header("Location: detalle.php?id=".$factura->id);
};

}catch(Exception $e)
{
 echo $e ;
}
?>