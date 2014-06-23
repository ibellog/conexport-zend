<?php

/* 
 * Creado por Cristian Nores.
 * @cristiannores

 */
namespace Admin\Model;

class Usuario
{
    public $id_usuario;
    public $nombre;
    public $apellido;
    public $rut;
    public $supervisor_id;
    public $supervisor_rut;
    public $correo;
    public $tipo;
    public $fono;
    public $password;
    
    
    public function exchangeArray($data)
     {
         $this->id_usuario = (!empty($data['ID_USUARIO'])) ? $data['ID_USUARIO'] : null;
         $this->nombre = (!empty($data['NOMBRE'])) ? $data['NOMBRE'] : null;
         $this->apellido  = (!empty($data['APELLIDO'])) ? $data['APELLIDO'] : null;
         $this->rut  = (!empty($data['RUT'])) ? $data['RUT'] : null;
         $this->supervisor_id  = (!empty($data['SUPERVISOR_ID'])) ? $data['SUPERVISOR_ID'] : null;
         $this->supervisor_rut  = (!empty($data['SUPERVISOR_RUT'])) ? $data['SUPERVISOR_RUT'] : null;
         $this->correo  = (!empty($data['CORREO'])) ? $data['CORREO'] : null;
         $this->tipo  = (!empty($data['TIPO'])) ? $data['TIPO'] : null;
         $this->fono  = (!empty($data['FONO'])) ? $data['FONO'] : null;
         $this->password  = (!empty($data['PASSWORD'])) ? $data['PASSWORD'] : null;
     }
    
    
}
