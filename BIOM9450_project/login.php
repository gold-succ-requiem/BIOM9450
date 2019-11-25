<?php
    // start session
    session_start(); 
    //echo session_id();

    // Checking whether the session is already there or not if 
    // true then header redirect it to the home page directly 
    if(isset($_SESSION['use'])) {
        header("Location:home.php"); 
    }
?>

<!--
DOCTYPE html
-->
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<meta name="description" content="biom9450">
    <script src="login_validation.js"></script>
    <link rel="stylesheet" href="brackets_main.css">
</head>

<body>
<! Page header, including title and link home>
<div class="header">
    <h1>VitalSite</h1>
    <p>Online medical information management</p>
</div>
    
<h1>Login</h1>
<form name="login" onsubmit="formValidation(); return false;" action="home.php" method="post">
	<label for="user">Username:</label><br>
	<input type="text" name="user" size="50" /><br><br>
		
	<label for="pass">Password:</label><br>
	<input type="password" name="pass" size="50" />
	<br>
	<br>	
	<input type="submit" name="submit" value="Login" />
    <br>
</body>
</html>