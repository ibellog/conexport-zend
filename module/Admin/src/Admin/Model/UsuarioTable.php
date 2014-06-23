<?php

/* 
 * Creado por Cristian Nores.
 * @cristiannores

 */

namespace Admin\Model;

 use Zend\Db\TableGateway\TableGateway;
 
 class UsuarioTable
 {
     protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }

     public function fetchAll()
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }

     public function getUsuario($id_usuario)
     {
         $id_usuario  = (int) $id_usuario;
         $rowset = $this->tableGateway->select(array('id_usuario' => $id_usuario));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $id_usuario");
         }
         return $row;
     }

     public function saveUsuario(Admin $usuario)
     {
              
         $data = array(
             'nombre'           => $usuario->nombre,
             'apellido'         => $usuario->apellido,
             'rut'              => $usuario->rut,
             'supervisor_id'    => $usuario->supervisor_id,
             'supervisor_rut'   => $usuario->supervisor_rut,
             'correo'           => $usuario->correo,
             'tipo'             => $usuario->tipo,
             'fono'             => $usuario->fono,
             'password'         => $usuario->password,
            
         );

         $id_usuario = (int) $usuario->id_usuario;
         if ($id_usuario == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getUsuario($id_usuario)) {
                 $this->tableGateway->update($data, array('id_usuario' => $id_usuario));
             } else {
                 throw new \Exception('Usuario no existe');
             }
         }
     }

     public function deleteUsuario($id_usuario)
     {
         $this->tableGateway->delete(array('id_usuario' => (int) $id_usuario));
     }

 }