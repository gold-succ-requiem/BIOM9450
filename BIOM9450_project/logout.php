<?php
    // start session
    session_start(); 
    echo session_id();

    // Checking whether the session is already there or not if 
    // true then header redirect it to the home page directly 
    if(isset($_SESSION['use'])) {
        header("Location:home.php"); 
     }

    // sets up connection to db 'vitals.mdb'
    // pls make it a mySQL db next time :praying:
    $serverName = 'z5232927';		// z5232927 maps to the vitals database, vitals.mdb
    $myName = '';
    $myPass = '';
    // checks connection to database
    $conn = odbc_connect($serverName,$myName,$myPass,SQL_CUR_USE_ODBC);

//    exit();
?>

<!--
DOCTYPE html
-->
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Logout</title>
	<meta name="description" content="biom9450">
    <link rel="stylesheet" href="brackets_main.css">
</head>

<body>
<! Page header, including title and link home>
<div class="header">
    <h1>VitalSite</h1>
    <p>Online medical information management</p>
</div>

<h1>Logout</h1>    
<?php
    echo "Logging out...";
    session_destroy();   // function that Destroys Session 
    header("Location: login.php");
?>
</body>
</html>