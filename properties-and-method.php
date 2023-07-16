<?php 
//blueprint //mold // pattern

class Userdetails {

    //properties and method
	public $username="Avinash Tiwari"; //this is properties
	public $email = "avinash@gmail.com";
	function get_details() // this is method
	{
		echo 'Helloo Friend';
	}
}

$objOne = new Userdetails(); //instantiation
$objTwo = new Userdetails(); //instantiation

echo $objOne->get_details();
echo '<br>';
echo $objOne->username;
echo '<br>';
echo $objTwo->email;
?>