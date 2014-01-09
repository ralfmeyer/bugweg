<?php

namespace Application\Model;

class Zzform{

	public $id;
	public $formname;
	public $feldname;
	public $tbfeldname;
	public $sort;
	public $gruppe;
	public $typ;
	public $cssid;
	public $cssname;
	public $lookuptable;
	public $lookupfldbezeichnung;
	public $lookupfldid;
	public $optionvalues;
	
	
	public function exchangeArray($data){
		$this->id 			= (!empty($data['id'])) 		? $data['id'] : null;
		$this->formname 	= (!empty($data['formname'])) 	? $data['formname'] : null ;
		$this->feldname 	= (!empty($data['feldname'])) 	? $data['feldname'] : null ;
		$this->tbfeldname 	= (!empty($data['tbfeldname'])) ? $data['tbfeldname'] : null ;
		$this->bezeichnung 	= (!empty($data['bezeichnung'])) ? $data['bezeichnung'] : null ;
		$this->sort 		= (!empty($data['sort'])) 		? $data['sort'] : null ;
		$this->gruppe 		= (!empty($data['gruppe'])) 	? $data['gruppe'] : null ;
		$this->typ 			= (!empty($data['typ'])) 		? $data['typ'] : null ;
		$this->cssid 		= (!empty($data['cssid'])) 		? $data['cssid'] : null ;
		$this->cssname 		= (!empty($data['cssname'])) 	? $data['cssname'] : null ;
		$this->lookuptable 	= (!empty($data['lookuptable'])) ? $data['lookuptable'] : null ;
		$this->lookupfldbezeichnung = (!empty($data['lookupfldbezeichnung'])) ? $data['lookupfldbezeichnung'] : null ;
		$this->lookupfldid  = (!empty($data['lookupfldid'])) ? $data['lookupfldid'] : null ;
		$this->optionvalues = (!empty($data['optionvalues'])) ? $data['optionvalues'] : null ;
	}
	
	public function changeArray(){
		$data = array();
		$data['id'] 					= $this->id; 		
		$data['formname'] 				= $this->formname;
		$data['feldname'] 				= $this->feldname;
		$data['tbfeldname'] 			= $this->tbfeldname;
		$data['bezeichnung'] 			= $this->bezeichnung;
		$data['sort'] 					= $this->sort;
		$data['gruppe'] 				= $this->gruppe;
		$data['typ'] 					= $this->typ;
		$data['cssid'] 					= $this->cssid;
		$data['cssname'] 				= $this->cssname;
		$data['lookuptable']			= $this->lookuptable;
		$data['lookupfldbezeichnung'] 	= $this->lookupfldbezeichnung;
		$data['lookupfldid'] 			= $this->lookupfldid;
		$data['optionvalues']			= $this->optionvalues;
		return $data ;
	}

}


