<?php

namespace Application\Config;

use Application\Entity\Art;
use Zend\Math\Rand;
use Zend\ServiceManager\Config;
use Zend\ServiceManager\ServiceManager;

class ServiceConfiguration extends Config
{

	public function configureServiceManager( ServiceManager $serviceManager ){
		$serviceManager->setInvokableClass('Application\ArtCreateForm', 'Application\Form\ArtCreate');
		
		$serviceManager->setFactory('Application\ArtEntity', function ($serviceManager){
			$art = new Art();
			$art->setID( Rand::getInteger(10000, 99999));
			$art->setBezeichnung('Test Art');
			return $art;
		});
															   
		$serviceManager->setFactory('Application\ArtService', 'Application\Service\ArtFactory' );
		$serviceManager->setAlias('ArtCreateForm', 'Application\ArtCreateForm' );
		$serviceManager->setAlias('ArtEntity', 'Application\ArtEntity' ) ;
		$serviceManager->setShared('Application\ArtEntity', false ) ;
	}
}