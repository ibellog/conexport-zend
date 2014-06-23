<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ClienteController extends AbstractActionController
{
    
    protected $clienteTable;
    
    public function indexAction()
    {
       return new ViewModel(array(
             'cliente' => $this->getClienteTable()->fetchAll(),
             'template' => $this->layout('layout/layout2'),
         ));
      
    }
    public function agregarAction()
    {
      
    }
    
    public function editarAction()
    {
      
    }
    
    public function borrarAction()
    {
      
    }
    
     public function getClienteTable()
     {
         if (!$this->clienteTable) {
             $sm = $this->getServiceLocator();
             $this->clienteTable = $sm->get('Admin\Model\ClienteTable');
         }
         return $this->clienteTable;
     }
}
