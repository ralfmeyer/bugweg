<?php

namespace Application\Entitiy;

class Nachricht{

	protected $id;
	protected $eintrag_id;
	protected $benutzer_id;
	protected $kontakt_id;
	protected $angelegtam;
	protected $eingehend;
	protected $inhalt;
	
	
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

	public function setBenutzer_id($benutzer_id){
		$this->benutzer_id = $benutzer_id;
	}
	
	public function getBenutzer_id(){
		return $this->benutzer_id;
	}	

	public function setKontakt_id($kontakt_id){
		$this->kontakt_id = $kontakt_id;
	}
	
	public function getKontakt_id(){
		return $this->kontakt_id;
	}	

	public function setAngelegtam($angelegtam){
		$this->angelegtam = $angelegtam;
	}
	
	public function getAngelegtam(){
		return $this->angelegtam;
	}	

	public function setEingehend($eingehend){
		$this->eingehend = $eingehend;
	}
	
	public function getEingehend(){
		return $this->eingehend;
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