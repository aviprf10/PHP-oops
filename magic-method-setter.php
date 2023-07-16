<?php 
//__set is a magic method that is automatically called when writing to inaccessible or undefined properties of an object. 
//It allows you to define custom behavior when a property is being set.

class Database {

	public $dbhost=''; //properties if deleted this is not any issue
	public $dbname = '';

    function __set($name, $value) // this used basicly for set properties & value $name used for get your properties(passed field name) and $value for set value 
	{
		echo 'I am set function and set properties name: '.$name.'<br>';
		echo 'I am set function and  set value: '.$value;
	}

}

$prod = new Database(); // difine to object class 
$prod->name='mydb'; //$prod->name is useing for same perameter name is __set function(magic method) if want to chnages name properties so have not getted any output 

?>