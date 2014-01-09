<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

 use Zend\Db\ResultSet\ResultSet;
 use Zend\Db\TableGateway\TableGateway;

 use Application\Model\Art;
 use Application\Model\Bereich;
 use Application\Model\Zzform;
 
 use Application\Table\ArtTable;
 use Application\Table\BereichTable; 
 use Application\Table\ZzformTable;  
 
 
class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
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
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
	
     public function getServiceConfig()
     {
         return array(
             'factories' => array(
                 'Application\Model\ArtTable' =>  function($sm) {
                     $tableGateway = $sm->get('ArtTableGateway');
                     $table = new ArtTable($tableGateway);
                     return $table;
                 },
                 'ArtTableGateway' => function ($sm) {
                     $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                     $resultSetPrototype = new ResultSet();
                     $resultSetPrototype->setArrayObjectPrototype(new Art());
                     return new TableGateway('art', $dbAdapter, null, $resultSetPrototype);
                 },
                 'Application\Model\BereichTable' =>  function($sm) {
                     $tableGateway = $sm->get('BereichTableGateway');
                     $table = new BereichTable($tableGateway);
                     return $table;
                 },
                 'BereichTableGateway' => function ($sm) {
                     $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                     $resultSetPrototype = new ResultSet();
                     $resultSetPrototype->setArrayObjectPrototype(new Bereich());
                     return new TableGateway('bereich', $dbAdapter, null, $resultSetPrototype);
                 },			
				 'Application\Model\ZzformTable' =>  function($sm) {
                     $tableGateway = $sm->get('ZzformTableGateway');
                     $table = new ZzformTable($tableGateway);
                     return $table;
                 },
                 'ZzformTableGateway' => function ($sm) {
                     $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                     $resultSetPrototype = new ResultSet();
                     $resultSetPrototype->setArrayObjectPrototype(new Zzform());
                     return new TableGateway('zzform', $dbAdapter, null, $resultSetPrototype);
                 },	
             ),
         );
     }	
	 
}
