<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\Behat\Exception\BehaviorException;


/**
 * Features context.
 */
class FeaturesContext extends BehatContext
{
	private $cruise;
	
	private $ship;
	
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
    	
    }
    
   

   /**
    * @Given /^that I have a cruise with name "([^"]*)"$/
    */
   public function iInstantiateANewCruise($cruiseName)
   {
   	$this->cruise= new Cruise();
       	$this->cruise->setName($cruiseName);
   }
   
   /**
    * @Given /^that the cruise is served by a ship named "([^"]*)"$/
    */
   public function iInstantiateANewShipAndAttachItToTheCruise($shipName)
   {
   	$this->ship= new Ship();
   	$this->ship->setName($shipName);
   	$this->cruise->setShip($this->ship);
   	$this->ship->attach($this->cruise);
   }
   
   /**
    * @Then /^the cruise name should be "([^"]*)"$/
    */
   public function iCheckTheExtendedNameOfTheCruise($expectedName)
   {
   	$actualName= $this->cruise->getExtendedName();
   		
   	if($expectedName != $actualName){
   		throw new BehaviorException("We were expecting the name of the cruise to be $expectedName but we got $actualName");
   	}
   }
   
   /**
    * @When /^I change the ship name to "([^"]*)"$/
    */
   public function iChangeTheNameOfTheShip($shipName)
   {
   	$this->ship->setName($shipName);
   }
   
   

}
