<!--
DOCTYPE html
-->
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add Subject</title>
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

<h1>Add New Subject</h1>
<form name="addSubject" onsubmit="formValidation(); return false;" action="subject.php" method="post">
	<label for="forename">First Name:</label><br>
	<input type="text" name="forename" size="50" />
	<br>
	<br>	
	<label for="surname">Last Name:</label><br>
	<input type="text" name="surname" size="50" />
	<br>
	<br>
	<label for="dateBirth">DOB:</label><br>
	<input type="text" name="dateBirth" size="50" />
	<br>
	<br>
	<label for="gender">Gender:</label><br>
	<input type="text" name="gender" size="50" />
	<br>
	<br>
	<label for="phone">Phone Number:</label><br>
	<input type="text" name="phone" size="50" />
	<br>
	<br>
	<label for="email">Email:</label><br>
	<input type="text" name="email" size="50" />
	<br>
	<br>
	<input type="submit" name="submit" value="Add"  /><br>
</body>
</html>