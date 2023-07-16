<?php 
//An interface is a blueprint that defines a set of methods that a class must implement.
//It specifies a contract for classes, outlining the methods they must have without specifying the actual implementation.

interface City { // this is perent interface
	function test($var);

}

interface Product { // this is perent class
	
}

class phone implements City, Product{ // phone is child class & implements get a parent interface & define multiple interface but that not used abstract method

	function test($var)
	{
		return 'Lorem Ipsum '.$var;
	}

}


class phone_call implements City, Product{ // phone_call is child class & implements get a parent interface but that not used abstract method

	function test($var)
	{
		return 'Lorem Ipsum '.$var;
	}
}

$obj =new phone();
echo $obj->test('Helloo');

//NOTE: abstract method and interface method getting deffrent define a public function with body and access in child class in abstract method and print your properties but interface not supported
?>