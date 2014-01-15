<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


use Application\Config\ServiceConfiguration;
use Zend\Debug\Debug;
use Zend\ServiceManager\ServiceManager;

class ArtController extends AbstractActionController
{

	protected $artTable ;

    public function indexAction()
    {
		/*
		// create service configuration
		$config = new ServiceConfiguration();

		// configure service manager
		$serviceManager = new ServiceManager($config);

		// output some classes
		Debug::dump($serviceManager->get('ArtCreateForm'));
		Debug::dump($serviceManager->get('Application\ArtService'));
		Debug::dump($serviceManager->get('ArtEntity'));
		Debug::dump($serviceManager->get('ArtEntity'));	
		*/

       return new ViewModel( array ( 'arten' => $this->getArtTable()->fetchAll(),
	   ));
    }
	
	public function listAction(){
	
	}
	
	public function addAction(){
	
	}
	
	public function editAction(){
	
	}
	
	public function deleteAction(){
	
	}
	
	public function getArtTable()
	{
		if (!$this->artTable){
			$sm = $this->getServiceLocator();
			$this->artTable = $sm->get('Application\Model\ArtTable');
		}
		return $this->artTable ;
	}


}

