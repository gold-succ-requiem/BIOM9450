<!--
DOCTYPE html
-->
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Update Staff Details</title>
	<meta name="description" content="biom9450">
    <link rel="stylesheet" href="brackets_main.css">
</head>

<body>
<! Page header, including title and link home>
<div class="header">
    <a href = "home.php">
    <h1>VitalSite</h1>
    </a>
    <p>Online medical information management</p>
</div>
<?php
    // if session is not set then redirect to login
    if (!isset($_SESSION['use'])) {
        header("Location: login.php");
    }
    else {
        // prints session ID
        echo $_SESSION['use'];
        // prints success of login
//        echo "Login Success";
        // link to logout page
        echo "<a href='logout.php'>Logout</a> ";
    }
    $username = $_SESSION['use'];

?>


<h1>Update Staff Details</h1>
<form name="updateStaff" onsubmit="formValidation(); return false;" action="staff.php" method="post">
	<label for="username">Username:</label><br>
	<input type="text" name="username" size="50" />
	<br>
	<br>	
	<label for="password">Password:</label><br>
	<input type="password" name="password" size="50" />
	<br>
	<br>
	<label for="confirmpass">Confirm Password:</label><br>
	<input type="password" name="confirmpass" size="50" />
	<br>
	<br>
	<input type="submit" name="submit" value="Update" /><br>
</body>
</html>