<?php 
//static properties are class-level variables that are shared among all instances of a class. 
//Unlike regular (non-static) properties, static properties belong to the class itself rather than individual objects or instances of the class. 
//This means that changes made to a static property will be reflected across all instances of the class.
//blueprint //mold // pattern

class Products {

    //properties and method
	public static $username="Avinash Tiwari"; //this is properties
	static public $email = "avinash@gmail.com";
	public $total=5;

	function cal_total() // this is method function
	{
		$this->total = 10*20; //$this represent a current instantiation and $this is called a keyword
		return $this->total;
	}


	function generate_id() // this is method function
	{
		return rand(0, 99999999);
	}

	function read()
	{
		//return $this->total;  //$this->total represent current class and where define total variable

		$this->cal_total(); // this called same class access an other instantiation using keyword
		return $this->total;
	}
}

$product = new Products();

$unqnum= Products::generate_id();
echo $unqnum;
echo '<br>';
echo Products::$username;
echo '<br>';
echo Products::$email;
echo '<br>';
echo $product->cal_total();
// echo '<br>';
// echo Products::$total; // if useing keyword you remove static properties
echo '<br>';
$read= $product->read(); // this call defrent type beacouse this function not use defrent type of value and $this represent $product varible
echo $read;
?>