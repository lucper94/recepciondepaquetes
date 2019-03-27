<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "conexion.php";
class Config
{
    public $precio_contenedor = '';
    public $precio_vagon = '';
    public $porcentaje_descuento = '';
    const TABLA = 'configuracion';

    public function obtenerConfiguracion()
    {
        
        try
        {
            $conexion = new Database();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id = 1');    
            $consulta->execute();
            $registro = $consulta->fetch();
            return $registro;
        }catch(Exception $e)
        {
            echo  $e ;
        }
    }

    public function actualizarConfiguracion()
    {
        try

       {
            $conexion = new Database();

            $consulta = $conexion->prepare('UPDATE  ' . self::TABLA .' set precio_contenedor = :precio_contenedor,precio_vagon = :precio_vagon,porcentaje_descuento = :porcentaje_descuento');
            $consulta->bindParam(':precio_contenedor', $this->precio_contenedor);
            $consulta->bindParam(':precio_vagon', $this->precio_vagon);
            $consulta->bindParam(':porcentaje_descuento', $this->porcentaje_descuento);
            $consulta->execute();
           
            return true;

        }catch(Exception $e)
        {
            echo  $e ;
        }
        
    }
}
