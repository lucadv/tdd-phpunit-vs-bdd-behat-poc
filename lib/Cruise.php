<?php
/**
 *
 * @author Luca Di Vincenzo
 *
 */

class Cruise extends AbstractObserver {
	
	private $ship;
	
	private $name;
	
	private $extendedName;
	
	public function __construct(Ship $ship=null, $name="") {
		$this->ship= $ship;
		$this->name= $name;
		$this->setExtendedName();
	}
	
	public function update(AbstractSubject $subject) {
		$this->setExtendedName();
	}
	
	public function getShip(){
		return $this->ship;
	}
	
	public function setShip(Ship $ship){
		$this->ship= $ship;
		$this->setExtendedName();
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setName($cruiseName){
		$this->name= $cruiseName;
	}
	
	public function getExtendedName(){
		return $this->extendedName;
	}
	
	public function setExtendedName(){
		$shipName="";
		$cruiseName= $this->name;
		if(null != $this->ship){
			$shipName= " - " . $this->ship->getName();
		}
		$this->extendedName= $cruiseName.$shipName;
	}
	
}