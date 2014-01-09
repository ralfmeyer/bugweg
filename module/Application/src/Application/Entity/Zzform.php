<?php

namespace Application\Entitiy;

class Zzform{

	protected $id;
	protected $formname;
	protected $feldname;
	protected $tbfeldname;
	protected $bezeichnung;
	protected $sort;
	protected $gruppe;
	protected $typ;
	protected $cssid;
	protected $cssname;
	protected $lookuptable;
	protected $lookupfldbezeichnung;	
	protected $lookupfldid;
	protected $optionvalues;	
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;
	}

	public function setFormname($formname){
		$this->formname = $formname;
	}
	
	public function getFormname(){
		return $this->formname;
	}	

	public function setFeldname($feldname){
		$this->feldname = $feldname;
	}
	
	public function getFeldname(){
		return $this->feldname;
	}	

	public function setTbfeldname($tbfeldname){
		$this->tbfeldname = $tbfeldname;
	}
	
	public function getTbfeldname(){
		return $this->tbfeldname;
	}	

	public function setBezeichnung($bezeichnung){
		$this->bezeichnung = $bezeichnung;
	}
	
	public function getBezeichnung(){
		return $this->bezeichnung;
	}	

	public function setSort($sort){
		$this->sort = $sort;
	}
	
	public function getSort(){
		return $this->sort;
	}	

	public function setGruppe($gruppe){
		$this->gruppe = $gruppe;
	}
	
	public function getGruppe(){
		return $this->gruppe;
	}	
	
	public function setTyp($typ){
		$this->typ = $typ;
	}
	
	public function getTyp(){
		return $this->typ;
	}	

	public function setCssid($cssid){
		$this->cssid = $cssid;
	}
	
	public function getCssid(){
		return $this->cssid;
	}	

	public function setCssname($cssname){
		$this->cssname = $cssname;
	}
	
	public function getCssname(){
		return $this->cssname;
	}	

	public function setLookuptable($lookuptable){
		$this->lookuptable = $lookuptable;
	}
	
	public function getLookuptable(){
		return $this->lookuptable;
	}	

	public function setLookupfldbezeichnung($lookupfldbezeichnung){
		$this->lookupfldbezeichnung = $lookupfldbezeichnung;
	}
	
	public function getLookupfldbezeichnung(){
		return $this->lookupfldbezeichnung;
	}	

	public function setLookupfldid($lookupfldid){
		$this->lookupfldid = $lookupfldid;
	}
	
	public function getLookupfldid(){
		return $this->lookupfldid;
	}	

	public function setOptionvalues($optionvalues){
		$this->optionvalues = $optionvalues;
	}
	
	public function getOptionvalues(){
		return $this->optionvalues;
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