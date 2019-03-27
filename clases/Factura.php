<?php
include_once "clases/conexion.php";
include_once "clases/Config.php";
include_once "clases/Detalle_Factura.php";
class Factura
{

    public $fecha_creacion = '';
    public $medio_transporte = '';
    public $cantidad_unidades = '';
    public $total = '';
    public $descuento = '';
    const TABLA = 'facturas';

    public function __construct() {
        $this->fecha_creacion = date("Y-m-d H:m");
     }
    
    public function agregarFactura()
    {
        try

       {
            $conexion = new Database();
            $config = new Config();
            $config = $config->obtenerConfiguracion();

            
            $config['porcentaje_descuento'];
         
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombre_unidad,fecha_creacion, medio_transporte, cantidad_unidades) VALUES(:nombre_unidad,:fecha_creacion, :medio_transporte, :cantidad_unidades)');
            $consulta->bindParam(':nombre_unidad', $this->nombre_unidad);
            $consulta->bindParam(':fecha_creacion', $this->fecha_creacion);
            $consulta->bindParam(':medio_transporte', $this->medio_transporte);
            $consulta->bindParam(':cantidad_unidades', $this->cantidad_unidades);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
           
            if($this->cantidad_unidades >= 20 && $this->medio_transporte == 'barco'){
                for ($i=0; $i < $this->cantidad_unidades; $i++) { 
                    $Detalle = new Detalle_Factura();
                    $Detalle->factura_id = $this->id;
                    $Detalle->precio = $config['precio_contenedor'];
                    if($i <= 19){
                        $Detalle->descuento = (((float)$config['porcentaje_descuento']/100)*((float)$config['precio_contenedor']));
                    }else{
                        $Detalle->descuento = 0;
                    }
                    $Detalle->agregarDetalle();
                }
            }else{
                for ($i=0; $i < $this->cantidad_unidades; $i++) { 
                    $Detalle = new Detalle_Factura();
                    $Detalle->factura_id = $this->id;
                    if($this->medio_transporte == 'barco'){
                        $Detalle->precio = $config['precio_contenedor'];
                    }else{
                        $Detalle->precio = $config['precio_vagon'];
                    }
                    $Detalle->descuento = 0;
                    $Detalle->agregarDetalle();
                }
            }

            return true;

        }catch(Exception $e)
        {
            echo  $e ;
        }
        
    }
    public static function obtenerFacturas()
    {
        try
        {
            $conexion = new Database();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . '');    
            $consulta->execute();
            $registro = $consulta->fetchAll();
            return $registro;
        }catch(Exception $e)
        {
            echo  $e ;
        }
    }
    public static function obtenerFactura($id)
    {
        try
        {
            $conexion = new Database();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where id = '.$id);    
            $consulta->execute();
            $registro = $consulta->fetch();
            return $registro;
        }catch(Exception $e)
        {
            echo  $e ;
        }
    }
 
}


