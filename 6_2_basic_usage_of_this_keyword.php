<?php 


class Car {


	// The properties section 
	public $name;
	public $type="van";
	public $color='';

	//The methods using properties declared abowe

	public function GetBasicInfo(){
		//Place basic condition to make it more interesting in here
		if ($this->type=='sport car') {
			echo "You rock!";
		}
		else {
			echo "You like smooth ride with your ".$this->type;
		}
	}

	public function ChangeTheColor($color){
		$this->color=$color;
		//Place basic condition to make it more interesting in here
		if ($this->color=='black') {
			echo "Well, you are the boss in here! Black gold rocks!";
		}
		elseif ($this->color=='red') {
			echo "Please change the color of your car. It is ".$this->color;
		}
		else {
			echo "You really like that color?";
		}
	}


}


$car= new Car();
$car->ChangeTheColor();




/* A bit complicated but you fill figure it out! It has some conditions you can play with! Have a fun!

*/




 ?>