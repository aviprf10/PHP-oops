<?php 
//Type hinting in PHP is a feature that allows you to specify the expected data type of a parameter in a function or method declaration. 
//It helps enforce type safety and provides clarity on the expected input for a particular parameter.

function test(int $a) //int is a type hinting becouse $a variable pre define data type. Get value is type of integer.
{
	return $a;
}

echo test(1); //pass value in function it's define data type value

//type hinting list

// 1. Scalar Types:
	// 1. int or integer: whole numbers.
	// 2. float or double: floating and decimal numbers.
	// 3. bool or boolean: Represents true or false value.
	// 4. string: string/text.

// 2. Compound Types:
	// 1. array: Represents arrays, hold multiple values.
	// 2. callable: functions or methods.
	// 3. iterable: objects or arrays (added in PHP 7.1).
	// 4. object: Objects of any class.

// 3. Special Types:
	// 1. mixed: any type allowing flexibility in parameter types.
	// 2. void: function does not return a value.
	// 3. null: null value.

// 4. Class Types:
	// 1. You can specify the name of a class as a type hint, indicating that the parameter should be an instance of that class or its subclasses.
	// 2. Example: function myFunction(MyClass $param) { ... }

// 5. Interface Types:
	// 1. Similar to class types, you can also specify the name of an interface as a type hint, indicating that the parameter should implement that interface.
	// 2. Example: function myFunction(MyInterface $param) { ... }
// 6. Union Types (PHP 8.0 and later):
	// 1. Union types allow specifying multiple possible types for a parameter.
	// 2. Example: function myFunction(string|int $param) { ... }
?>

