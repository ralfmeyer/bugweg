<?php

namespace Application\Entitiy;

class Benutzer{

	protected $id;
	protected $name;
	protected $anmeldename;
	protected $kennwort;
	protected $gesperrt;
	protected $extern;
	protected $berechtigung;
	
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;
	}

	public function setName($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}	

	public function setAnmeldename($anmeldename){
		$this->anmeldename = $anmeldename;
	}
	
	public function getAnmeldename(){
		return $this->anmeldename;
	}	

	public function setKennwort($kennwort){
		$this->kennwort = $kennwort;
	}
	
	public function getKennwort(){
		return $this->kennwort;
	}	

	public function setGesperrt($gesperrt){
		$this->gesperrt = $gesperrt;
	}
	
	public function getGesperrt(){
		return $this->gesperrt;
	}	

	public function setExtern($extern){
		$this->extern = $extern;
	}
	
	public function getExtern(){
		return $this->extern;
	}	

	public function setBerechtigung($berechtigung){
		$this->berechtigung = $berechtigung;
	}
	
	public function getBerechtigung(){
		return $this->berechtigung;
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