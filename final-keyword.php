<?php 
//The final keyword is used to restrict the further inheritance of a class or the overriding of a method. 
//When a class or method is declared as final, it means that it cannot be extended or overridden by any child class.

class Databse { // this is perent class
	
	final public function db_connect(){ // final keyword not override a child method and this function not overridebale
		echo 'Db conection function'.'<br>';
	}


}

class table extends Databse{ // table is child class

	// public function db_connect() // define same class in parent and child so this is overriding becouse this function allready difine in parent class 
	// {
	// 	//Parent::db_connect();
	// 	echo 'DB table connection '.'<br>';
	// }

	public function insertdata()
	{
		$this->db_connect(); //if this function call in own class becouse this preferred in our class if is not define then called parent function 
	} 
	

}

$obj = new table();
echo $obj->insertdata();
?>