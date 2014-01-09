<?php

namespace Application\Table;

use Zend\Db\Tablegateway\Tablegateway;

class ArtTable{

	protected $tableGateway;
	
	public function __construct(Tablegateway $tableGateway){
		$this->tableGateway = $tableGateway;
	}
	
	public function fetchAll(){
		$resultSet = $this->tableGateway->select();
		return $resultSet;
	}
	
	public function getArt($id){
		$id = (int) $id;
		$rowset = $this->tableGateway->select(array('id' => $id));
		$row = $rowset->current();
		if (!$row){
			throw new \Exception ("Could not find row $id");
		}
		return $row ;
	}
	
	public function saveArt(Art $art){
		$data = array(
			'bezeichnung' => $art->bezeichnung
		);
		
		$id = (int)$art->id;
		if ($id == 0){
			$this->tableGateway->insert($data);
		} else {
			if ($this->getArt($id)){
				$this->tableGateway->update($data, array('id' => $id));
			} else {
				throw new \Exception('Art existiert nicht');
			}
		}
	}
	
	public function deleteArt ($id){
		$this->tableGateway->delete(array('id' => (int)$id));
	}



}