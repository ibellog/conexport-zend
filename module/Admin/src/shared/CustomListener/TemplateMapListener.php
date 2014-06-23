<?php

/* 
 * Creado por Cristian Nores.
 * @cristiannores

 */
namespace shared\CustomListener;

use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;

class TemplateMapListener implements ListenerAggregateInterface
{
    protected $listeners = array();
    
    public function attach(EventManagerInterface $events) {
        $this->listeners[] = $events->attach(MvcEvent::EVENT_DISPATCH, array($this,'onDispatch'),900);
    }
    
    public function detach(EventManagerInterface $events) {
        if ($events->detach($listener))
        {
            unset($this->listeners[$index]);
        }
    }
    
    public function onDispatch(MvcEvent $e)
    {
     
    }
}
 
