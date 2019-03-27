<?php
include_once "conexion.php";
class Detalle_Factura
{
    public $factura_id = '';
    public $precio = '';
    const TABLA = "detalle_factura";

    public function agregarDetalle()
    {
        try

        {
            $conexion = new Database();
            
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (factura_id, precio, descuento) VALUES(:factura_id, :precio, :descuento)');
            $consulta->bindParam(':factura_id', $this->factura_id);
            $consulta->bindParam(':precio', $this->precio);
            $consulta->bindParam(':descuento', $this->descuento);
            $consulta->execute();
     
         }catch(Exception $e)
         {
             echo  $e ;
         }
    }

    public static function obtenerDetalle($id)
    {
        try
        {
            $conexion = new Database();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where factura_id = '.$id);    
            $consulta->execute();
            $registro = $consulta->fetchAll();
            return $registro;
        }catch(Exception $e)
        {
            echo  $e ;
        }
    }
 
}