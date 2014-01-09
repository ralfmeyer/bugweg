<?php

namespace Application\Model;

class Art{

	public $id;
	public $bezeichnung;
	
	public function exchangeArray($data){
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		$this->bezeichnung = (!empty($data['bezeichnung'])) ? $data['bezeichnung'] : null ;
	}

}


