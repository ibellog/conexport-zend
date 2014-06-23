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

class MaterialController extends AbstractActionController
{
    protected $materialTable;
    
    public function indexAction()
    {
      return new ViewModel(array(
             'material' => $this->getMaterialTable()->fetchAll(),
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
     public function getMaterialTable()
     {
         if (!$this->materialTable) {
             $sm = $this->getServiceLocator();
             $this->materialTable = $sm->get('Admin\Model\MaterialTable');
         }
         return $this->materialTable;
     }
}
