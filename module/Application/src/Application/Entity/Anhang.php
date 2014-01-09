<?php

namespace Application\Entitiy;

class Anhang{

	protected $id;
	protected $eintrag_id;
	protected $nachricht_id;
	protected $dateiname;
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function setEintrag_id($eintrag_id){
		$this->eintrag_id = $eintrag_id;
	}
	
	public function getEintrag_id(){
		return $this->eintrag_id;
	}
	
	public function setNachricht_id($nachricht_id){
		$this->nachricht_id = $nachricht_id;
	}
	
	public function getNachricht_id(){
		return $this->nachricht_id;
	}		
	
	public function setDateiname($dateiname){
		$this->dateiname = $dateiname;
	}
	
	public function getDateiname(){
		return $this->dateiname;
	}	

/*
	public function set($){
		$this-> = $;
	}
	
	public function get(){
		return $this->;
	}	
*/	

}