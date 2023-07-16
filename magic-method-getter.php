<?php 
//__get is a magic method that is automatically called when accessing inaccessible or undefined properties of an object. 
//It allows you to define custom behavior when a property is being accessed or retrieved. one more think __get used for limited data
class Database {

	public $dbhost=''; //properties if deleted this not any issue
	public $dbname = '';
	public $find="";

    function __get($name) // this used basicly for set properties & value $name used for get your properties(passed field name) and $value for set value 
	{
		$rows= $this->get_data(); //get a array in get_data private function

		
			if(is_array($rows)) // check array
			{
				foreach($rows as $row)
				{
					if(isset($row[$name]) && $row[$name] == $this->find) // check isset value are get or not and check array name value matched sent value
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
$prod->find="Amit"; //$prod->find use for search any value if you want to get any the search age and id your difine 
echo '<pre>';
print_r($prod->name); //$prod->name is useing for same perameter name is __get function(magic method) if want to get name properties value so use get and if you want to search any other field value so chnage field name

?>