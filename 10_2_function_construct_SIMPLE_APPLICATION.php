<?php 


class PkzUser{

	public $name, $gender, $location;
	
	/*

	This is another yet example of how you can use contructor function. I placed small validation just 
	for better and clear understanding of the process.

	*/
	function __construct($name, $gender, $location){

		$this->name=$name;
		$this->gender=$gender;
		$this->location=$location;

		//Validation part goes here (basic if-else if-else condition)

		if (!is_string($this->name) || !is_string($this->location)) {
			echo "Please fill it with alpha characters!!";
		}
				elseif (strlen($this->name)<=3) {
					echo "Name must have more then 3 characters!!!";
				}
				elseif ($this->gender!=='muško' && $this->gender!=='žensko') {
					echo "Please provide correct gender!!!";
				}
		else {
			echo $this->name." ".$this->gender." ".$this->location;
				}		


	}
}




$user= new PkzUser('MURIS', 'muško', 'zenica');









 ?>