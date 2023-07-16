<?php
//Autoloading in PHP refers to the automatic inclusion of class files when they are first accessed or instantiated. 
//Instead of manually requiring or including the necessary class files throughout your code, 
//autoloading allows you to define a set of rules and conventions for automatically loading the required files.

spl_autoload_register(function($class_name){ // This function use for autoload class and include your class file 
	$clasname = explode('\\', $class_name);
	$class_name = array_pop($clasname);
	$filepath = $class_name.'.php';
	if(file_exists($filepath))
	{
		include strtolower($filepath);
	}

});

use App\Cars\car; // this is namespace and class name after load defined class file
use App\Products\product;

 $obj = new Car();
 $obj2 = new Product();

?>