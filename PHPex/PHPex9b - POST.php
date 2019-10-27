<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPex9b - POST</title>
</head>

<body>

	Here is the information displayed:
	<br />
    <br />

	<?php
        // Copy from form associative array
        $name = $_POST["theirName"];
        $age = $_POST["theirAge"];
        
		// Print to HTML to be displayed
        echo $name."'s age is ".$age;
    ?>

</body>
</html>
