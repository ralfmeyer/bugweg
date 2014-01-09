<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BereichController extends AbstractActionController
{

    protected $bereichTable;

    public function indexAction()
    {
       return new ViewModel( array ( 'bereiche' => $this->getBereichTable()->fetchAll(),
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
	
	public function getBereichTable()
	{
		if (!$this->bereichTable){
			$sm = $this->getServiceLocator();
			$this->bereichTable = $sm->get('Application\Model\BereichTable');
		}
		return $this->bereichTable ;
	}

}

