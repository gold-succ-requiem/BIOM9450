<?php
// starts session
session_start();

?>
<!--
DOCTYPE html
-->
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>View Assigned Subjects</title>
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
    if (!isset( $_SESSION['use'] ) ) {
        header("Location: login.php");
    } 
    // prints session ID
    echo $_SESSION['use'];
    // prints success of login
    echo "Login Success";
    // link to logout page
    echo "<a href='logout.php'> Logout</a> ";
    
    // connection variables
	$serverName = 'z5232927';		// z5232927 maps to the vitals database, vitals.mdb
	$myName = '';
	$myPass = '';
	$conn = odbc_connect($serverName,$myName,$myPass,SQL_CUR_USE_ODBC);			// checks connection to database
	
	// form variables
	$username = $_POST['username'];
	$password = $_POST['password'];

	// prints output of query
	$sqlUser = "SELECT * FROM StaffInfo WHERE UserName = '$username'";		// query selects table with staff info
	$rsUser = odbc_exec($conn,$sqlUser);									// prepares connection with database
	while(odbc_fetch_row($rsUser)){											// 
		$staffForename = odbc_result($rsUser,'StaffFirstName');
		$staffSurname = odbc_result($rsUser,'StaffLastName');
		echo $rsUser;
		echo '<br>';
		echo 'Hello, ' . $staffForename . ' ' . $staffSurname . '!';
	}
	
	echo '<br>';
	
	
	echo '<br>';
	
	// prints researcher's assigned subjects
	$sqlSubject = "SELECT * FROM StaffInfo INNER JOIN (SubjectInfo INNER JOIN Subject_Staff ON SubjectInfo.Subject_ID = Subject_Staff.Subject_ID) ON StaffInfo.Staff_ID = Subject_Staff.Staff_ID WHERE (((StaffInfo.UserName)='$username'))";		// query selects table with subject info based on username
	$rsSubject = odbc_exec($conn,$sqlSubject);									// prepares connection with database
	while(odbc_fetch_row($rsSubject)){											// 
		$subjectID = odbc_result($rsSubject,'Subject_ID');
		$subjectForename = odbc_result($rsSubject,'FirstName');
		$subjectSurname = odbc_result($rsSubject,'LastName');
		echo '<br>';
		echo $subjectID . ' ' . $subjectForename . ' ' . $subjectSurname . ' <a href="update_subject.html">Update</a> <br>';
	}	
?>

<h1>Assigned subjects</h1>
</body>
</html>

































