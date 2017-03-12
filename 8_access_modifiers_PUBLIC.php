<?php 

class Person {

	/*This is a point where we are going to learn importance of right way to prevent 
	access to our properties and methods outside of class scope.
	Those are called access modifiers and there are 3 of them:

	public (default)
	private
	protected

	*/

	public $name='Muris';
	/*public is the most used. If you don't declare propertie or method with PUBLIC it will be
	assumed as default as PUBLIC. This modifiers can be accessed both way, inside and outside of class scope.
	Take a look at code below:
	*/ 

	public function GetInfo(){ //Public method that can be used outside of class
		echo "Hi! my name is ".$this->name;
	}
}




$new_person= new Person();

echo "Your name is ".$new_person->name."<br>"; //Nothing new in here, we did it all the time.

$new_person->GetInfo();








 ?>