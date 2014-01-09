<?php

namespace Application\Table;

use Zend\Db\Tablegateway\Tablegateway;


class ZzformTable{

	protected $tableGateway;
	
	public function __construct(Tablegateway $tableGateway){
		$this->tableGateway = $tableGateway;
	}
	
	public function fetchAll(){
		$resultSet = $this->tableGateway->select();
		return $resultSet;
	}
	
	public function fetchAllfromForm($formName){
		$resultSet = $this->tableGateway->select()->where( array('formname' => $formName));
		return $resultSet;
	}
	
	public function getZzform($id){
		$id = (int) $id;
		$rowset = $this->tableGateway->select(array('id' => $id));
		$row = $rowset->current();
		if (!$row){
			throw new \Exception ("Could not find row $id");
		}
		return $row ;
	}
	
	public function saveZzform(Zzform $zzform){
		$data = $zzform->changeArray();
		
		$id = (int)$zzform->id;
		if ($id == 0){
			$this->tableGateway->insert($data);
		} else {
			if ($this->getZzform($id)){
				$this->tableGateway->update($data, array('id' => $id));
			} else {
				throw new \Exception('zzForm existiert nicht');
			}
		}
	}
	
	public function deleteZzform ($id){
		$this->tableGateway->delete(array('id' => (int)$id));
	}



}