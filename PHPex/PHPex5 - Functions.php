<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPex5 - Functions</title>

	<?php 

		function mySum($numX, $numY){ 
			$total = $numX + $numY; 
			return $total; 
		} 
	?>

</head>

<body>

	<?php 

		// Function can go here too. Just delete from HTML HEAD and and uncomment below.
		/*function mySum($numX, $numY){ 
			$total = $numX + $numY; 
			return $total; 
		} */
			
	
		$myNumber = 0; 
		echo "Before the function, myNumber = ". $myNumber ."<br />"; $myNumber = mySum(3, 4); // Store the result of mySum in $myNumber 
		echo "After the function, myNumber = " . $myNumber ."<br />"; 

	?>


</body>
</html>
