<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Admin\Model\Material;
use Admin\Model\MaterialTable;
use Admin\Model\Usuario;
use Admin\Model\UsuarioTable;
use Admin\Model\Cliente;
use Admin\Model\ClienteTable;
use Admin\Model\Nave;
use Admin\Model\NaveTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Shared\CustomListener\TemplateMapListener;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        
        $themeListener = new TemplateMapListener();
        $themeListener->attach($eventManager);
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    'Admin' => __DIR__ . '/src/' . 'Admin',
                    'Shared' => __DIR__ . '/src/' . 'Shared',
                ),
            ),
        );
    }
    
    public function getServiceConfig()
     {
         return array(
             'factories' => array(
                 // Material
                 'Admin\Model\MaterialTable' =>  function($sm) {
                     $tableGateway = $sm->get('MaterialTableGateway');
                     $table = new MaterialTable($tableGateway);
                     return $table;
                 },
                         
                 'MaterialTableGateway' => function ($sm) {
                     $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                     $resultSetPrototype = new ResultSet();
                     $resultSetPrototype->setArrayObjectPrototype(new Material());
                     return new TableGateway('material', $dbAdapter, null, $resultSetPrototype);
                 },
                 // Usuario
                 'Admin\Model\UsuarioTable' =>  function($sm) {
                     $tableGateway = $sm->get('UsuarioTableGateway');
                     $table = new UsuarioTable($tableGateway);
                     return $table;
                 },
                         
                 'UsuarioTableGateway' => function ($sm) {
                     $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                     $resultSetPrototype = new ResultSet();
                     $resultSetPrototype->setArrayObjectPrototype(new Usuario());
                     return new TableGateway('usuario', $dbAdapter, null, $resultSetPrototype);
                 },
                 // Cliente
                 'Admin\Model\ClienteTable' =>  function($sm) {
                     $tableGateway = $sm->get('ClienteTableGateway');
                     $table = new ClienteTable($tableGateway);
                     return $table;
                 },
                         
                 'ClienteTableGateway' => function ($sm) {
                     $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                     $resultSetPrototype = new ResultSet();
                     $resultSetPrototype->setArrayObjectPrototype(new Cliente());
                     return new TableGateway('cliente', $dbAdapter, null, $resultSetPrototype);
                 },
                 // Nave
                 'Admin\Model\NaveTable' =>  function($sm) {
                     $tableGateway = $sm->get('NaveTableGateway');
                     $table = new NaveTable($tableGateway);
                     return $table;
                 },
                         
                 'NaveTableGateway' => function ($sm) {
                     $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                     $resultSetPrototype = new ResultSet();
                     $resultSetPrototype->setArrayObjectPrototype(new Nave());
                     return new TableGateway('nave', $dbAdapter, null, $resultSetPrototype);
                 },
             ),
         );
     }
    
    
    
}
