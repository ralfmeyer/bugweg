<?php

namespace Application\Entitiy;

class Konfig{

	protected $id;
	protected $wert;
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function setWert($wert){
		$this->wert = $wert;
	}
	
	public function getWert(){
		return $this->wert;
	}

}