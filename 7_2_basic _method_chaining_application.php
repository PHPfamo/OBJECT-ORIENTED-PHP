<?php 

class FuelRemainig{

	public $remaining;

	//Method for placing amount of liters into tank
	public function LittersToPlace($amount){

		$this->remaining+=$amount;
		return $this;


	}
	//Method for placing distance of riding and basic calculation
	public function DistanceToRide($distance){
		/*If car uses 5.5 liters for 100 kilometers, we can calculate
		how much will fuel remain in the tank if we place 5o liters and rido for 
		50 kilometers. Place your own values and test this script. 
		*/

		$kilometers=$distance;
		$left_in_tank=($this->remaining/5.5)*100;
		$substracted=($left_in_tank-$kilometers)/100 * 5.5;

		$this->remaining=$substracted;

		return $this;



	}

	


}


$car= new FuelRemainig();

//After object is created we can chain methods

echo $car->LittersToPlace(50)->DistanceToRide(50)->remaining." liters remaining";








/*


*/


 ?>