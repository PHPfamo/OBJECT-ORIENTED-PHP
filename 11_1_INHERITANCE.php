<?php 


class Car {

	private $model;

	public function setModel($model){
		$this->model=$model;

	}

	public function getModel(){
		return $this->model;
	}
}


class SuperCar extends Car {

	private $style='so fast and so furious!';

	public function driveItWithStyle(){

		return 'Drive '.$this->getModel(). $this->style;
	}
}



$car= new SuperCar();
$car->setModel('BMW');
echo $car->driveItWithStyle();




 ?>