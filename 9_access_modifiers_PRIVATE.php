<?php 

class Person {


	private $name='Muris';

	public function setName($name){

			$this->name=$name;

		}

	public function getName(){

		return "You have entered a new name: ".$this->name;
	}

	



}


$new_person= new Person();

$new_person->setName('Murga'); //Method for setting up new name

echo $new_person->getName(); //Method for getting new name



/*	echo $new_person->name;

This kind of propertie access will cause fatal error:
Fatal error: Cannot access private property Person::$name

So direct access to PRIVATE propertie or method will be same error.
Direct access can be done by using setters and getters

	setters- will set the value of PRIVATE propertie
	getters- will get the value of PRIVATE propertie

	
*/







 ?>