<?php

/* 
 * Creado por Cristian Nores.
 * @cristiannores

 */

namespace Admin\Model;

 use Zend\Db\TableGateway\TableGateway;
 
 class NaveTable
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

     public function getNave($id_nave)
     {
         $id_nave  = (int) $id_nave;
         $rowset = $this->tableGateway->select(array('id_nave' => $id_nave));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $id_nave");
         }
         return $row;
     }

     public function saveNave(Admin $nave)
     {
              
         $data = array(
             'nombre'         => $nave->nombre,
             'codigo'         => $nave->codigo,
           
         );

         $id_nave = (int) $nave->id_nave;
         if ($id_nave == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getNave($id_nave)) {
                 $this->tableGateway->update($data, array('id_nave' => $id_nave));
             } else {
                 throw new \Exception('Nave no existe');
             }
         }
     }

     public function deleteNave($id_nave)
     {
         $this->tableGateway->delete(array('id_nave' => (int) $id_nave));
     }

 }