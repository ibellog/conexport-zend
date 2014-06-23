<?php

/* 
 * Creado por Cristian Nores.
 * @cristiannores

 */
namespace Admin\Model;

class Cliente
{
    public $id_cliente;
    public $organizacion;
    public $razon_social;
    public $rut_cliente;
    public $direccion;
    public $fono_cliente;
    public $usuario_cliente;
    public $pass_cliente;
   
    
    public function exchangeArray($data)
     {
         $this->id_cliente = (!empty($data['ID_CLIENTE'])) ? $data['ID_CLIENTE'] : null;
         $this->organizacion = (!empty($data['ORGANIZACION'])) ? $data['ORGANIZACION'] : null;
         $this->razon_social  = (!empty($data['RAZON_SOCIAL'])) ? $data['RAZON_SOCIAL'] : null;
         $this->rut_cliente  = (!empty($data['RUT_CLIENTE'])) ? $data['RUT_CLIENTE'] : null;
         $this->direccion  = (!empty($data['DIRECCION'])) ? $data['DIRECCION'] : null;
         $this->fono_cliente  = (!empty($data['FONO_CLIENTE'])) ? $data['FONO_CLIENTE'] : null;
         $this->usuario_cliente  = (!empty($data['USUARIO_CLIENTE'])) ? $data['USUARIO_CLIENTE'] : null;
         $this->pass_cliente  = (!empty($data['PASS_CLIENTE'])) ? $data['PASS_CLIENTE'] : null;
         
     }
    
    
}
