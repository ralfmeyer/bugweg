<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ArtController extends AbstractActionController
{

	protected $artTable ;

    public function indexAction()
    {
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

