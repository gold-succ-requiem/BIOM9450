<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPex3 - Variables</title>
</head>

<body>

	<?php 
	
		// Assign variables
		$myString = "The sum of "; 
		$x = 4; 
		$y = 8; 

		//Print "The sum of" and return carriage
		echo $myString . "</br>";
		
		//Print "4" return carriage, "8".
		echo $x . "</br>";
		echo $y . "</br>";
		
		//Print "The sum of 4 and 8 is 12"
		echo $myString . $x . " and " . $y . " is " . ($x + $y) . "</br>"; 
		
		//Print "$y"
		echo '$y'."</br>";
	
		// Print "8"
		echo "$y"."</br>";
		
		// Print "$y". 
		echo "\$y"."</br>";
	
	?>

</body>
</html>
