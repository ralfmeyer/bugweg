<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ZzformController extends AbstractActionController
{
	protected $zzformTable ;
	
    public function indexAction()
    {
       return new ViewModel( array ( 'zzforms' => $this->getZzformTable()->fetchAll(),
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
	
	public function getZzformTable()
	{
		if (!$this->zzformTable){
			$sm = $this->getServiceLocator();
			$this->zzformTable = $sm->get('Application\Model\ZzformTable');
		}
		return $this->zzformTable ;
	}

}

