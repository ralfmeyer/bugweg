<?php

namespace Application\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ArtFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator){
		$createForm = $serviceLocator->get('Application\ArtCreateForm');
		$entity		= $serviceLocator->get('ArtEntity');
		
		$service	= new Art($createForm, $entity);
		return $service;
	}

}