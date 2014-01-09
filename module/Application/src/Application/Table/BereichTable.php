<?php

namespace Application\Table;

use Zend\Db\Tablegateway\Tablegateway;

class BereichTable{

	protected $tableGateway;
	
	public function __construct(Tablegateway $tableGateway){
		$this->tableGateway = $tableGateway;
	}
	
	public function fetchAll(){
		$resultSet = $this->tableGateway->select();
		return $resultSet;
	}
	
	public function getBereich($id){
		$id = (int) $id;
		$rowset = $this->tableGateway->select(array('id' => $id));
		$row = $rowset->current();
		if (!$row){
			throw new \Exception ("Could not find row $id");
		}
		return $row ;
	}
	
	public function saveBereich(Bereich $bereich){
		$data = array(
			'bezeichnung' => $bereich->bezeichnung
		);
		
		$id = (int)$bereich->id;
		if ($id == 0){
			$this->tableGateway->insert($data);
		} else {
			if ($this->getBereich($id)){
				$this->tableGateway->update($data, array('id' => $id));
			} else {
				throw new \Exception('Bereich existiert nicht');
			}
		}
	}
	
	public function deleteBereich ($id){
		$this->tableGateway->delete(array('id' => (int)$id));
	}



}