<?php
/**
 * 
 * @author Luca Di Vincenzo
 *
 */
class CruiseTest extends PHPUnit_Framework_TestCase {
		
	private $cruise;
	
	private $ship;
	
	
	public function setUp() {
		$this->ship= new Ship("Sovereign");
		$this->cruise= new Cruise($this->ship,"Royal");
		$this->ship->attach($this->cruise);
		
	}
	
	public function testCanChangeExtendedNameWhenShipNameChange(){
		
		$extendedName= $this->cruise->getExtendedName();

		$this->ship->setName("Mojon");
		
		$this->assertNotEquals($extendedName, $this->ship->getName());
		
	}
}