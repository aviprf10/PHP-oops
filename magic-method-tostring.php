<?php 
//__toString() magic method allows you to define a custom string representation of an object. 
//It is automatically called when an object is treated as a string, such as when using echo or print to output the object.
//__toString maethod not accept any argument it's just return a string
class Database {

	private $dbhost='Localhost'; //properties if deleted this not any issue
	

	function __toString()
	{
		return  'this is string '.$this->dbhost;
	}

}
$prod = new Database(); // difine to object class 

echo '<pre>';
echo $prod; 
?>