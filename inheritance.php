<?php 
// Used for perent class method or properties in child class call to inharitance
// I explain with access modifier public, private, protected 
// Public access modifier access any where class this access that becouse this public you access child perent both
// private access modifier access only same class not access in child class
// protected access only child class and same class

class Databse { // this is perent class
	
	public function db_connect(){
		echo 'Db conection function'.'<br>';
	}

	private function db_user()
	{
		echo 'Db connection user function'.'<br>';
	}

	public function db_password()
	{
		echo 'Db connection pass function'.'<br>';
		return $this->db_user(); //this is private function but access becouse this function in same class 
	}

	protected function db_host()
	{
		echo 'Db connection pass function'.'<br>';
		//return $this->db_user(); //this is protected function but access becouse this function in same class 
	}

}

class table extends Databse{ // table is child class
	public function table_connection()
	{
		echo 'DB table connection '.'<br>';
		return $this->db_connect(); //access perent class funtions called inharit. protected only access child class and perent class
	}

	public function insertdata()
	{
		echo 'Insert data connection'.'<br>';
		//return $this->db_user(); // this access private function. they can not access becouse this is private. so private function not access an other class 
	} 

	public function conn(){
		return $this->db_host();
	}
}

$obj = new table();

echo $obj->table_connection();
?>