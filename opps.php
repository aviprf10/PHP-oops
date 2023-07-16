<?php 
// Traits Class
// trait test{
// 	public function hello()
// 	{
// 		echo "Hello World\n";
// 	}

// 	public function by()
// 	{
// 		echo "Bye World\n";
// 	}
// }

// trait heloo{
// 	public function byy()
// 	{
// 		echo "TATA BYE bYE\n";
// 	}

// 	public function helllo()
// 	{
// 		echo "Welcome Avinash\n";
// 	}
// }

// class a{
// 	use test, heloo;
// }

// class b{
// 	use heloo;
// }

// $obj = new a();
// $objj = new b();
// echo $obj->hello();
// echo $obj->byy();
// echo $objj->helllo();


// Traits Overriding
// trait test{
// 	private function hello()
// 	{
// 		echo "Hello World\n";
// 	}
// }

// class a{
// 	use test{
// 		test::hello as public newhelloo; // public newhelloo overriding a hello function. hello function difine in trait test function
// 	}



// }

// $obj = new a();
// echo $obj->newhelloo();	


// Type Hinting
// function test(int $a) //int is a type hinting/type declearation 
// {
// 	echo $a;
// }

// echo test("hii");


//Namespace
// require 'namespcefile1.php';
// require 'namespcefile2.php';

// function good()
// {
// 	echo 'Hi i am good';
// }

// $obj = new pro\testing();
// $obj2 = new lite\testing();

// pro\good();
// lite\good();

//CHINING METHOD
// class test{
// 	public function Helloo()
// 	{
// 		echo "Welcome Helloo World".'<br>';
// 		return $this;
// 	}

// 	public function Bye()
// 	{
// 		echo "Bye Bye World".'<br>';
// 		return $this;
// 	}

// 	public function  tata()
// 	{
// 		echo "Tata bye bye".'<br>';
// 	}
// }

// $obj = new test();
// $obj->Helloo()->Bye()->tata();
// $obj->Bye();
// $obj->tata();

//MAGIC METHODS
// PHP provide a some magic method and this megic method auto called in class. so some megic method list 
// 1. __construct()
// 2. __destruct()
// 3. __get()
// 4. __set()
// 5. __isset()
// 6. __unset()
// 7. __call()
// 8. __clone()
// 9. __ invoke()
// 10. __toString()
// more..
?>