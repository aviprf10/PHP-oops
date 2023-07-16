<?php 

namespace pro;

class testing{
	public function __construct(){
		#echo 'Hello Testing File namespce 1'.'<br>';
		$obj2 = new \lite\testing();
	}

}


function good()
{
	echo 'Hi i am good namespace 1'.'<br>';
}


namespace lite;
	class testing{
		public function __construct(){
			echo 'Hello Testing File namespce 2'.'<br>';
		}
	}

		
	function good()
	{
		echo 'Hi i am good namespace 2'.'<br>';
	}

	class testing3{
		public function __construct()
		{
			echo 'I am class testing3'.'<br>';
		}
	}

?>