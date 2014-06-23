<?php

/* 
 * Creado por Cristian Nores.
 * @cristiannores

 */

namespace Admin\Model;

 use Zend\Db\TableGateway\TableGateway;

 class ClienteTable
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

     public function getCliente($id_cliente)
     {
         $id_cliente  = (int) $id_cliente;
         $rowset = $this->tableGateway->select(array('id_cliente' => $id_cliente));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $id_cliente");
         }
         return $row;
     }

     public function saveCliente(Admin $cliente)
     {
              
         $data = array(
             'organizacion'             => $cliente->organizacion,
             'razon_social'             => $cliente->razon_social,
             'rut_cliente'              => $cliente->rut_cliente,
             'direccion'                => $cliente->direccion,
             'fono_cliente'             => $cliente->fono_cliente,
             'usuario_cliente'          => $cliente->usuario_cliente,
             'pass_cliente'             => $cliente->pass_cliente,
             
            
         );

         $id_cliente = (int) $cliente->id_cliente;
         if ($id_cliente == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getCliente($id_cliente)) {
                 $this->tableGateway->update($data, array('id_cliente' => $id_cliente));
             } else {
                 throw new \Exception('Cliente no existe');
             }
         }
     }

     public function deleteCliente($id_cliente)
     {
         $this->tableGateway->delete(array('id_cliente' => (int) $id_cliente));
     }
 }
 