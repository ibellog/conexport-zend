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

class NaveController extends AbstractActionController
{
    protected $naveTable;
    
    public function indexAction()
    {
      return new ViewModel(array(
             'nave' => $this->getNaveTable()->fetchAll(),
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
    
    public function getNaveTable()
     {
         if (!$this->naveTable) {
             $sm = $this->getServiceLocator();
             $this->naveTable = $sm->get('Admin\Model\NaveTable');
         }
         return $this->naveTable;
     }
    
}
