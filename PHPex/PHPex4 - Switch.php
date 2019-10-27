<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPex4 - Switch</title>
</head>

<body>

	<?php
		$destination = "Tokyo"; 
		echo "Traveling to $destination<br />"; 
		switch ($destination){ 
			case "Las Vegas": 
				echo "Bring an extra $500"; 
				break; 
			// can put all on one line (white space is ignored, which is why the ';' is important)
			case "Amsterdam": echo "Bring an open mind"; break; 
			case "Egypt": echo "Bring SPF 50 Sunscreen"; break; 
			case "Tokyo": echo "Bring lots of money"; break; 
			case "Caribbean Islands": echo "Bring a swimsuit"; break; 
			default: echo "Don’t forget your toothbrush!";
		}
	?>

</body>
</html>
