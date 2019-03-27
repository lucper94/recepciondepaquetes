<?php

include_once "clases/Config.php";

try
{
var_dump($_POST);
$config = new Config();
$config->precio_contenedor = $_POST['precio_contenedor'];
$config->precio_vagon = $_POST['precio_vagon'];
$config->porcentaje_descuento = $_POST['porcentaje_descuento'];
if($config->actualizarConfiguracion()){
    header("Location: index.php");
};

}catch(Exception $e)
{
 echo $e ;
}
?>