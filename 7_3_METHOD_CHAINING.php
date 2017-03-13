<?php 

class Pc{

	public function typeOfPc(){

		echo "This is a server machine!";

		return $this; 
		//To chain methods return $this. It acts like as recursive function, calling somehow it self!
	}

	public function manYear(){

		echo " Manufacturing year is 2016.";
	}
}




$obj= new Pc();

$obj->typeOfPc()->manYear();


 ?>