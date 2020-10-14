<?php

class Factura{
   public $id;  
   public $fecha_creada;  
   public $iva = 19;  
}


$factura = new Factura;
/* $factura->iva = "hola"; */

echo "hola $factura->iva ";

?>