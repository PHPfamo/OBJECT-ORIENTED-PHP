<?php 

class MakeString{

	public $string;

	public function StringA(){
		$this->string.='Muris';
		return $this;
	}

	public function StringB(){
		$this->string.=' Mulahalilović';

		return $this;
	}

	public function GetStream(){

		return $this->string;
	}

}



$string= new MakeString();

echo "PHP programming by: ".$string->StringA()->StringB()->GetStream();

/*

This is basic method chaining example. It represents basic way of chaining methods into a stream to get beter
code organisation and better way of method access when it needed.
*/


 ?>