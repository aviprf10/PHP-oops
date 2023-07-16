<?php 
//Abstract class is a class that cannot be instantiated directly but service as a blueprint for other classes. 
//It is designed to be extended by subclasses, which can provide their own implementations for the abstract class's abstract methods.

abstract class Databse { // this is perent class
	protected $var='abcd';
	function __construct()
	{
		echo 'I am constructor function'.'<br>';
	}
	abstract function db_connect($var, $var2); //this is abstract class and this class not used body. if means method class is incompleted method


}

abstract class city { // this is perent class
	protected $var='abcd';
	function __construct()
	{
		echo 'I am constructor function'.'<br>';
	}
	abstract function db_connect($var, $var2); //this is abstract class and this class not used body. if means method class is incompleted method

	

}

class table extends Databse{ // table is child class

	public function db_connect($var, $var2) // abstract method define in parent class so define same name in child class becouse that method accessible
	{
		echo 'DB table connection '.$var.'<br>';
	}
	

}

$obj = new table();
echo $obj->db_connect('Hello World', 'Hello India');
?>