<?php

/* 
 * Creado por Cristian Nores.
 * @cristiannores

 */
namespace Admin\Model;

class Nave
{
    public $id_nave;
    public $nombre;
    public $codigo;
   
    
    
    public function exchangeArray($data)
     {
         $this->id_nave = (!empty($data['ID_NAVE'])) ? $data['ID_NAVE'] : null;
         $this->nombre = (!empty($data['NOMBRE'])) ? $data['NOMBRE'] : null;
         $this->codigo  = (!empty($data['CODIGO'])) ? $data['CODIGO'] : null;
         
     }
    
    
}
