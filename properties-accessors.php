<?php 
//public //private //protected //static
//public access the inside the class and outside the class any where access the public function

class Products {

    //properties and method
	public $username="Avinash Tiwari"; //public id Access modifiers
	public static $email = "avinash@gmail.com";//private id Access modifiers
	public static $total=5;

	public function cal_total() // this is method function
	{
		self::$total = 10*20; //Self meaning class itself ya self is this same class name & $total is static varible if you change access modifier so get some error
		
	}


	public function generate_id() // this is method function
	{
		return rand(0, 99999999);
	}

	public function read()
	{
		$this->cal_total(); // this called same class access an other instantiation using keyword
		return self::$total;
	}

}

$product = new Products();

$unqnum= Products::generate_id();
echo $unqnum;
echo '<br>';
echo $product->cal_total();
// echo '<br>';
// echo Products::$username;
echo '<br>';
echo Products::$email;

// echo '<br>';
// echo Products::$total; // if useing keyword you remove static properties
echo '<br>';

$read= $product->read(); // this call defrent type beacouse this function not use defrent type of value and $this represent $product varible
echo $read;

?>