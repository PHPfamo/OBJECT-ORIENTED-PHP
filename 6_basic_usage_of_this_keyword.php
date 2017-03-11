<?php 


class Car {


	public $type='sport car',
	$name='Muris';

	public function CarType(){
		return $this->type;
	}




}


$bmw= new Car();

echo $bmw->CarType(); 


/*Using $this keyword is preaty easy and important. It indicates that we are using class properties and methods, 
adn allows us to have access to them within the class's scope.
  

*/




 ?>