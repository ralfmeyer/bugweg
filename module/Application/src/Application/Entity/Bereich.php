<?php

namespace Application\Entitiy;

class Bereich{

	protected $id;
	protected $bezeichnung;
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function setBezeichnung($bezeichnung){
		$this->bezeichnung = $bezeichnung;
	}
	
	public function getBezeichnung(){
		return $this->bezeichnung;
	}

}