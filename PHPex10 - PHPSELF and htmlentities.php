<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<!--My path name has spaces so I wrap $_SERVER['PHPSELF'] in "", which become \" for PHP-->
<form name="EntitiesTest" method="post" action= <?php echo "\"".$_SERVER['PHP_SELF']."\""; ?> >

	<input type="text" name="mystring" value="<script type='text/javascript'>window.location='http://www.google.com'</script>" size = "80"/>
	<input type="submit" name="Submit!">
</form>

	<?php 
		if(!empty($_POST['mystring'])){
        	echo "This is the string before using htmlentities function: " . $_POST['mystring'] . "<br/>" ;
        	//echo "This is the string after using htmlentities " . htmlentities($_POST['mystring']) . "<br/>" ;
		}
    ?>

</table>

</body>
</html>
