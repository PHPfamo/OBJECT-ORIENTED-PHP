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



 ?>