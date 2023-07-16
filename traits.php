<?php 
//Traits are a mechanism for code reuse that allows the composition of methods into classes. Traits are similar to classes, 
//but they cannot be instantiated on their own. Instead, they are intended to be included within classes to provide additional functionality and code sharing.

trait City { // this is perent trait

	function __construct(){
		echo 'hii'.'<br>';
	}

	function test(){
		return 'Helloo World'.'<br>';
	}

	function myfunction(){
		return 'Helloo World this my function';
	}

}

interface State { // this is perent class
	
}

interface Mobile{

}

class phone implements State, Mobile{ // table is child class & implements get a parent interface

	use City; // if use a trait so define
}


$obj =new phone(); // called child class
echo $obj->test(); // called perent trait and inside the function
echo $obj->myfunction();
?>