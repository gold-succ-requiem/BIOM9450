<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPex6 - Arrays</title>
</head>

<body>
	
    <?php
		$employee_array[0] = "Bob"; 
		$employee_array[1] = "Sally"; 
		$employee_array[2] = "Charlie"; 
		$employee_array[3] = "Clare";
	
		//	Associative arrays, indexed with a name
		$salaries["Bob"] = 2000; 
		$salaries["Sally"] = 4000; 
		$salaries["Charlie"] = 600; 
		$salaries["Clare"] = 0; 
		
		// Loop through the array using foreach loop
		// $number will become index of array
		// $name will become contents of array
		foreach($employee_array as $number => $name){
		
			// Index associative array $salaries using name string
			echo "Person " . $number . " in the list is " . $name . ", and is being paid $" . $salaries[$name] . "<br />";
		
		}
		
		// Another way to do it.
		// $name will become index of array
		// $salary will become contents of array
		echo "<br />"		;
		foreach($salaries as $name => $salary){
		
			// Index associative array $salaries using name string
			echo $name . " is being paid $" . $salary . "<br />";
		
		}
		
	?>

</body>
</html>
