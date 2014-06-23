<?php

/* 
 * Creado por Cristian Nores.
 * @cristiannores

 */
namespace Admin\Model;

class Material
{
    public $id_material;
    public $nombre;
    public $codigo;
    
    public function exchangeArray($data)
     {
         $this->id_material = (!empty($data['ID_MATERIAL'])) ? $data['ID_MATERIAL'] : null;
         $this->nombre = (!empty($data['NOMBRE'])) ? $data['NOMBRE'] : null;
         $this->codigo  = (!empty($data['CODIGO'])) ? $data['CODIGO'] : null;
     }
    
    
}
