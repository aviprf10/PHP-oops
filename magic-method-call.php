<?php 
//__call magic method is used to handle calls to inaccessible or undefined methods within an object. 
//It is automatically invoked when an object tries to call a method that is not accessible or does not exist.
//__call mathod use for without define a function you called and use that
class Database {

	public $dbhost=''; //properties if deleted this not any issue
	public $dbname = '';
	public $find="";

	function __call($method, $arguments) //this is used for without define a function and access an other function and get value sent a not define a function
	{
		if(strstr($method, 'get_by_')){
			$column = str_replace('get_by_', '', $method);
			return $this->get_by($column, $arguments[0]);
		}
	}

    function get_by($column, $find) // $column is sent which cloumn filter and $find is the value for get which record 
	{
		$rows= $this->get_data(); //get a array in get_data private function

		
		if(is_array($rows)) // check array
		{
			foreach($rows as $row)
			{
				if(isset($row[$column]) && $row[$column] == $find) // check isset value are get or not and check array name value matched sent value
				{
					return $row; // find value matched then return my array
				}
				
			}	
		}
		
	}

	private function get_data()
	{
		$arr = array(); // difine array 
		$arr['id']=1; //asign the value in array
		$arr['name']='Test';
		$arr['age']='12';

		$rows[]=$arr;
		$arr = array();
		$arr['id']=2; 
		$arr['name']='Raju';
		$arr['age']='15';

		$rows[]=$arr;
		$arr = array();
		$arr['id']=3; 
		$arr['name']='Amit';
		$arr['age']='20';

		$rows[]=$arr;
		$arr = array();
		$arr['id']=4; 
		$arr['name']='Kapa';
		$arr['age']='22';

		$rows[]=$arr; // assign all array in one object
		return $rows;

	}

}

$prod = new Database(); // difine to object class 

echo '<pre>';
print_r($prod->get_by_name('Amit')); //get_by_name is not define a function but i have used that beacouse i have use __call method this is magic method 

?>