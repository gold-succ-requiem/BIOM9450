<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPex7 - while</title>
</head>

<body>

	<?php
		// Initialise
		$x[0] = 1;
		$x[1] = 1;
		$counter = 2;
		
		// Start building table header
		echo "<table border=\"1\" align=\"center\">";
		echo "<tr><th>Fibonnaci number</th>";
		echo "<th>Value</th></tr>";
		
		//Insert first two table rows
		echo "<tr><td> 0 </td><td> 1 </td></tr>";
		echo "<tr><td> 1 </td><td> 1 </td></tr>";
		
		// Insert remaining table rows dynamically
		while ( $counter <= 100 ) {
		
			$x[$counter] = $x[$counter-1] + $x[$counter-2];
			
			echo "<tr><td>";
			echo $counter;
			echo "</td><td>";
			echo $x[$counter];
			echo "</td></tr>";

			$counter++;
		}
		
		// End table
		echo "</table>";
	?>
</body>
</html>
