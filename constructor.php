<?php 
//constructor called is magic mathod and magic method called automatically
//constructor used for properties for method and get properties value on a method function

class Userdetails {

	public $email=''; //properties if deleted this not any issue
	public $name = '';

    function __construct($name='null', $email='null') // this is construct function and auto called and construct run immedaitely  if not pass any perms in class obj so will difine static value in cons
	{
		echo 'I am construct function and my name is '.$name. '<br>';
		echo 'I am construct function and my email is '.$email. '<br>';
	}

}

$prod = new Userdetails('Avinash Tiwari', 'thinkaboutphp@gmail.com'); // difine to object class | instantiation inside the define the value becouse class construct. function define some var so  you don't pass the value or same parms so getting some error send perms postion is more importtent becouse contructor not know which var value print this 
$prod = new Userdetails(); //called this then const print null value becouse not sent any valu in class
$prod = new Userdetails();
// if obj define multiple time. contruct auto called and print value
?>