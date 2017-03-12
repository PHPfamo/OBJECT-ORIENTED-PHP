<?php 

class Person {


public $name;

		public function getName(){

			switch ($this->name) { //Old good switch scenario, test some values to get info
				case 'Muris':
					return "You have entered name: ".$this->name;
					break;
				case 'Murga':
					return "You have entered name: ".$this->name;
					break;
				default:
					return "There is no name in here!";
					
			}
		}



	}

$new_person= new Person();

$new_person->name='Murga';

echo $new_person->getName();

/*Another yet simple example of playing with PUBLIC modifier.
Nothing complicated, testing entered string value for different values output.

*/




 ?>