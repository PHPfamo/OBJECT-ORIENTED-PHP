<?php 


class Car {

	//Private propertie
	private $name;

	//Public settermethod
	public function setName($name){

		$this->name=$name;
	}

	//Public getter method
	public function getName(){

		echo "Hello! My name is: ".$this->name;
	}


}

class Limo extends Car{
	//Everything from Parent class will be inherited in this class
}


$obj= new Limo();
$obj->setName('BMW car');
$obj->getName();





 ?>