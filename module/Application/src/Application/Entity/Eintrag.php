<?php

namespace Application\Entitiy;

class Eintrag{

	protected $id;
	protected $art_id;
	protected $bereich_id;
	protected $bezeichnung;
	protected $beschreibung;
	protected $status;
	protected $letzterstand;
	protected $wichtig;
	protected $dringend;
	protected $termin;
	protected $anfang;
	protected $ende;
	protected $zeitrahmen;
	protected $sichtbarkeit;
	protected $benutzer_id_gemeldetvon;
	protected $gemeldetam;
	protected $benutzer_id_rueckmeldungvon;
	protected $rueckmeldungam;
	protected $benutzer_id_angelegtvon;
	protected $angelegtam;
	protected $benutzer_id_geaendertvon;
	protected $geaendertam;
	protected $externenr;
	
{	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;
	}

	public function setArt_id($art_id){
		$this->art_id = $art_id;
	}
	
	public function getArt_id(){
		return $this->art_id;
	}	

	public function setBereich_id($bereich_id){
		$this->bereich_id = $bereich_id;
	}
	
	public function getBereich_id(){
		return $this->bereich_id;
	}	

	public function setBezeichnung($bezeichnung){
		$this->bezeichnung = $bezeichnung;
	}
	
	public function getBezeichnung(){
		return $this->bezeichnung;
	}	

	public function setBeschreibung($beschreibung){
		$this->beschreibung = $beschreibung;
	}
	
	public function getBeschreibung(){
		return $this->beschreibung;
	}	

	public function setStatus($status){
		$this->status = $status;
	}
	
	public function getStatus(){
		return $this->status;
	}	

	public function setLetzterstand($letzterstand){
		$this->letzterstand = $letzterstand;
	}
	
	public function getLetzterstand(){
		return $this->letzterstand;
	}	

	public function setWichtig($wichtig){
		$this->wichtig = $wichtig;
	}
	
	public function getWichtig(){
		return $this->wichtig;
	}	

	public function setDringend($dringend){
		$this->dringend = $dringend;
	}
	
	public function getDringend(){
		return $this->dringend;
	}	

	public function setTermin($termin){
		$this->termin = $termin;
	}
	
	public function getTermin(){
		return $this->termin;
	}	

	public function setAnfang($anfang){
		$this->anfang = $anfang;
	}
	
	public function getAnfang(){
		return $this->anfang;
	}	

	public function setEnde($ende){
		$this->ende = $ende;
	}
	
	public function getEnde(){
		return $this->ende;
	}	

	public function setZeitrahmen($zeitrahmen){
		$this->zeitrahmen = $zeitrahmen;
	}
	
	public function getZeitrahmen(){
		return $this->zeitrahmen;
	}	

	public function setSichtbarkeit($sichtbarkeit){
		$this->sichtbarkeit = $sichtbarkeit;
	}
	
	public function getSichtbarkeit(){
		return $this->sichtbarkeit;
	}	

	public function setBenutzer_id_gemeldetvon($benutzer_id_gemeldetvon){
		$this->benutzer_id_gemeldetvon = $benutzer_id_gemeldetvon;
	}
	
	public function getBenutzer_id_gemeldetvon(){
		return $this->benutzer_id_gemeldetvon;
	}	

	public function setGemeldetam($gemeldetam){
		$this->gemeldetam = $gemeldetam;
	}
	
	public function getGemeldetam(){
		return $this->gemeldetam;
	}	

	public function setBenutzer_id_rueckmeldungvon($benutzer_id_rueckmeldungvon){
		$this->benutzer_id_rueckmeldungvon = $benutzer_id_rueckmeldungvon;
	}
	
	public function getBenutzer_id_rueckmeldungvon(){
		return $this->benutzer_id_rueckmeldungvon;
	}	

	public function setRueckmeldungam($rueckmeldungam){
		$this->rueckmeldungam = $rueckmeldungam;
	}
	
	public function getRueckmeldungam(){
		return $this->rueckmeldungam;
	}	

	public function setBenutzer_id_angelegtvon($benutzer_id_angelegtvon){
		$this->benutzer_id_angelegtvon = $benutzer_id_angelegtvon;
	}
	
	public function getBenutzer_id_angelegtvon(){
		return $this->benutzer_id_angelegtvon;
	}	

	public function setAngelegtam($angelegtam){
		$this-> = $angelegtam;
	}
	
	public function getAngelegtam(){
		return $this->angelegtam;
	}	

	public function setBenutzer_id_geaendertvon($benutzer_id_geaendertvon){
		$this->benutzer_id_geaendertvon = $benutzer_id_geaendertvon;
	}
	
	public function getBenutzer_id_geaendertvon(){
		return $this->benutzer_id_geaendertvon;
	}	

	public function setGeaendertam($geaendertam){
		$this->geaendertam = $geaendertam;
	}
	
	public function getGeaendertam(){
		return $this->geaendertam;
	}	

	public function setExternenr($externenr){
		$this->externenr = $externenr;
	}
	
	public function getExternenr(){
		return $this->externenr;
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