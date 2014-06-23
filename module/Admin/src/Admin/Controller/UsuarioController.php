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

class UsuarioController extends AbstractActionController
{
    
    protected $usuarioTable;
    
    public function indexAction()
    {
        
        return new ViewModel(array(
             'usuario' => $this->getUsuarioTable()->fetchAll(),
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
    
    public function getUsuarioTable()
     {
         if (!$this->usuarioTable) {
             $sm = $this->getServiceLocator();
             $this->usuarioTable = $sm->get('Admin\Model\UsuarioTable');
         }
         return $this->usuarioTable;
     }
}
