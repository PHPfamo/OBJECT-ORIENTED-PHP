<?php 

class Person {

	//Each person has their own unique description, we are placing those here as properties

	public $name, $last_name, $gender, $hair;


	/* We are creating contructor here guys, most common programming practice so pay attention on this section and try to practice this as much as you can. So constructor is just regular method followed by two underscores __ and the word contruct ( __construct). Most of the time using parameters as properties values.
	So less code and more job to be done.
		
	*/
	public function __construct($name, $last_name, $gender, $hair){

		$this->name=$name;
		$this->last_name=$last_name;
		$this->gender=$gender;
		$this->hair=$hair;


	}
}



$obj= new Person();
/*As soon as you create object out of class the error will be generated. 
As you can see we have to place some parameters to our CONSTRUCTOR in order proper function of just created object.

*/



 ?>