<?php 
// function overriding is a feature that allows a child class to provide its own implementation of a method that is already defined in its parent class. 
//This allows the child class to override the behavior of the parent class method with its own implementation.

class Databse { // this is perent class
	
	public function db_connect(){
		echo 'Db conection function'.'<br>';
	}


}

class table extends Databse{ // table is child class

	public function db_connect() // define same class in parent and child so this is overriding becouse this function allready difine in parent class 
	{
		//Parent::db_connect();
		echo 'DB table connection '.'<br>';
	}

	public function insertdata()
	{
		$this->db_connect(); //if this function call in own class becouse this preferred in our class if is not define then called parent function 
	} 

}

$obj = new table();
echo $obj->insertdata();
?>