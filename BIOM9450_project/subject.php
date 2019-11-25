<?php
	// start session
	session_start(); 
    //echo session_id();

    // sets up connection to db 'vitals.mdb'
    // pls make it a mySQL db next time :praying:
    $serverName = 'z5232927';		// z5232927 maps to the vitals database, vitals.mdb
    $myName = '';
    $myPass = '';
    // checks connection to database
    $conn = odbc_connect($serverName,$myName,$myPass,SQL_CUR_USE_ODBC);
?>

<!--
DOCTYPE html
-->
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>View Subject</title>
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
    // sets session variable, which is coincidentally the entered username, to $username
    $username = $_SESSION['use'];

?>
<h1>Subject</h1>
<?php	
    // $subjectPost = some posted ID from home.php
    // prints output of query
	$sqlSubject = "SELECT * FROM SubjectInfo WHERE SubjectID = '$subjectPost'";		// query selects table with staff info
	$rsSubject = odbc_exec($conn,$sqlSubject);									// prepares connection with database
	while(odbc_fetch_row($rsSubject)){											// 
		$subjectID = odbc_result($rsSubject,'Subject_ID');
        $subjectForename = odbc_result($rsSubject,'FirstName');
		$subjectSurname = odbc_result($rsSubject,'LastName');
        $subjectDOB = odbc_result($rsSubject,'DOB');
        $subjectGender = odbc_result($rsSubject,'Gender');
        $subjectPhone = odbc_result($rsSubject,'Phone');
        $subjectEmail = odbc_result($rsSubject,'Email');
		// following block displays details, with update button to update page
        echo '<br>';
        echo 'ID: ' . $subjectID . '<br><br>';
		echo 'Name: ' . $subjectForename . ' ' . $subjectSurname . '<br><br>';
        echo 'DOB: ' . $subjectDOB . '<br><br>';
        echo 'Gender: ' . $subjectGender . '<br><br>';
        echo 'Phone: ' . $subjectPhone . '<br><br>';
        echo 'Email: ' . $subjectEmail . '<br><br>';
		echo '<form action="update_subject.php" method="post"> 
							<button type="submit" name="update_subject" class="btn-link">Update</button> 
						</form> <br>'
	}	
?>

</body>
</html>

































