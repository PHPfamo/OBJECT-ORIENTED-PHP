<?php 


class Car {


	public $type='sport car',
	$name='Muris';

	public function ChangeCarType($type){
		$this->type=$type;
		 echo "You have changed car type to ".$this->type;
	}




}


$bmw= new Car();
echo $bmw->type."<br>";
$bmw->ChangeCarType("family car");




/* In this situation we first create access to propertie $type, after that we calledd the method
for changing the car type. Basic method that we have to pass a single parameter in order to execute it.
We are passing new type of car and after that insted of returning value we are echoing it out on the screen as soon as object has access to it.
  

*/




 ?>