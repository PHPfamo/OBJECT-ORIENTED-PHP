<?php 

class MakeString{

	public $string;

	public function StringA($first_name){
		$this->string.=$first_name;
		return $this;
	}

	public function StringB($last_name){
		$this->string.=$last_name;

		return $this;
	}

	public function GetStream(){

		return $this->string;
	}

}



$string= new MakeString();

echo "PHP programming by: ".$string->StringA('John')->StringB(' Doe')->GetStream();

/*

We can avoid default values of properties to be echoed. Pass your own name and last name, 
the rest will be same as the pre code example.
*/


 ?>