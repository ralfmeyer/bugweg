<?php

namespace Application\Entitiy;

class Kontakt{

	protected $id;
	protected $benutzer_id;
	protected $kontaktart_id;
	protected $bezeichnung;
	protected $inhalt;
	
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;
	}

	public function setBenutzer_id($benutzer_id){
		$this->benutzer_id = $benutzer_id;
	}
	
	public function getBenutzer_id(){
		return $this->benutzer_id;
	}	

	public function setKontaktart_id($kontaktart_id){
		$this->kontaktart_id = $kontaktart_id;
	}
	
	public function getKontaktart_id(){
		return $this->kontaktart_id;
	}	

	public function setBezeichnung($bezeichnung){
		$this->bezeichnung = $bezeichnung;
	}
	
	public function getBezeichnung(){
		return $this->bezeichnung;
	}	

	public function setInhalt($inhalt){
		$this->inhalt = $inhalt;
	}
	
	public function getInhalt(){
		return $this->inhalt;
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