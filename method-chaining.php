<?php 
//Method chaining, also known as fluent interfaces, is a programming technique that allows consecutive method calls on an object without the need to store intermediate results in variables. 
//It enhances code readability and provides a more concise and expressive way of invoking multiple methods on an object.

class Signup{

	private $filename="";
	private $data=array();

	public function sanitize($data){
		foreach($data as $key=>$value)
		{
			$data[$key]=addslashes($value);
		}
		$this->data = $data;
		return $this;
	}

	public function create_file($filename)
	{
		if(!file_exists('json/myjson.json'))
		{
			file_put_contents($filename, '');
		}
		$this->filename=$filename;
		return $this;	
	}


	public function save_file()
	{
		
		$old_data=file_get_contents($this->filename);
		$data_array = json_decode($old_data);
		$data_array[] = $this->data;
		$string = json_encode(($data_array));
		file_put_contents($this->filename, $string);
		
	}


	public function read_file()
	{
		$old_data=file_get_contents($this->filename);
		$data_array = json_decode($old_data);
		return $data_array;
	}

}

if(count($_POST) > 0)
{
	$mychaining = new Signup();
	$mychaining->sanitize($_POST)->create_file('json/myjson.json')->save_file(); //This is method chaining becouse added and called multiple function a single object variable and getting a success output
	$results = $mychaining->create_file('json/myjson.json')->read_file();
}
?>
<html>
<head>
  <title>Signup</title>
</head>

<body>
  <form method="POST">
	<input type="email" name="email" placeholder="Enter Username">
	<input type="password" name="password" placeholder="Enter Password">
	<input type="submit" value="Signup">
  </form>
</body>

</html>
