<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
           // Rutas Admin.
            'admin-inicio' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin/inicio[/:action]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Inicio',
                        'action'     => 'index',
                    ),
                ),
            ),
            'admin-cliente' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin/cliente[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Cliente',
                        'action'     => 'index',
                    ),
                ),
            ),
             'admin-usuario' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin/usuario[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Usuario',
                        'action'     => 'index',
                    ),
                ),
            ),
             'admin-administrador' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin/administrador[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Administrador',
                        'action'     => 'index',
                    ),
                ),
            ),
             'admin-material' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin/material[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Material',
                        'action'     => 'index',
                    ),
                ),
            ),
             'admin-nave' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin/nave[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Nave',
                        'action'     => 'index',
                    ),
                ),
            ),
             'admin-destino' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin/destino[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Destino',
                        'action'     => 'index',
                    ),
                ),
            ),
            'admin-reporte-consolicacion' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin/reporte/consolidacion[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Consolidacion',
                        'action'     => 'index',
                    ),
                ),
            ),
            'admin-reporte-desconsolicacion' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin/reporte/desconsolidacion[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Desconsolidacion',
                        'action'     => 'index',
                    ),
                ),
            ),
            'admin-reporte-detaildamage' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin/reporte/detaildamage[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Detaildamage',
                        'action'     => 'index',
                    ),
                ),
            ),
            'admin-reporte-detaildiference' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin/reporte/detaildiference[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Detaildiference',
                        'action'     => 'index',
                    ),
                ),
            ),
             
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Admin\Controller\Inicio' => 'Admin\Controller\InicioController',
            'Admin\Controller\Cliente' => 'Admin\Controller\ClienteController',
            'Admin\Controller\Usuario' => 'Admin\Controller\UsuarioController',
            'Admin\Controller\Administrador' => 'Admin\Controller\AdministradorController',
            'Admin\Controller\Material' => 'Admin\Controller\MaterialController',
            'Admin\Controller\Nave' => 'Admin\Controller\NaveController',
            'Admin\Controller\Consolidacion' => 'Admin\Controller\ConsolidacionController',
            'Admin\Controller\Desconsolidacion' => 'Admin\Controller\DesconsolidacionController',
            'Admin\Controller\Detaildamage' => 'Admin\Controller\DetaildamageController',
            'Admin\Controller\Detaildiference' => 'Admin\Controller\DetaildiferenceController',
            'Admin\Controller\Destino' => 'Admin\Controller\DestinoController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
