<?php
//namespaces provide a way to encapsulate and organize classes, interfaces, functions, and constants into a logical group. 
//Namespaces help avoid naming conflicts and improve code modularity and reusability. 
//They allow you to define code elements with the same name in different namespaces without conflicts.
require 'namespcefile1.php'; // this is my namespace file used multiple class and function are same name useing namespace so define namespace and define class and function in side a namespce 
//require 'namespcefile2.php';

function good()
{
 	echo 'Hi i am good';
}

 $obj = new pro\testing();
 $obj2 = new lite\testing();
 $obj3 = new lite\testing3();

 pro\good();
 lite\good();
?>