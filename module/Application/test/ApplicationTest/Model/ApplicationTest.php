<?php

namespace Application\Model;

use Application\Model\Art ;
use PHPUnit_Framework_TestCase;

class ApplicationTest extends PHPUnit_Framework_TestCase
{
	public function testApplicationInitialState(){
	}
	
	public function testArtArraySetsPropertiesCorrectly(){
		$art = new Art();
		$this->assertNull($album->id, '"id" solte null sein');
		$this->assertNull($album->bezeichnung, '"bezeichnung" solte null sein');
	}
}