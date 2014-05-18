<?php
/**
 * Class that implement the observer pattern
 *
 * @author Luca Di Vincenzo
 *
 */

class Ship extends AbstractSubject {
	
	private $name;
	
	private $observers = array();
	
	public function __construct($name="") {
		$this->name= $name;
	}

	/**
	 * Method to allow other classes to subscribe
	 * to the subject 
	 */
	public function attach(AbstractObserver $observer_in) {
		array_push($this->observers, $observer_in);
	}
	
	/**
	 * Method to unscribe
	 */
	public function detach(AbstractObserver $observer_in) {
		$key = array_search($observer_in, $this->observers);
		if($key){
			unset($this->observers[$key]);
		}
	}
	
	/**
	 * Notify subscribers that something has changed
	 */
	public function notify() {
		foreach($this->observers as $obs) {
			$obs->update($this);
		}
	}
	
	public function setName($name){
		$this->name= $name;
		$this->notify();
	}
	
	public function getName(){
		return $this->name;
	}
}