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
	<title>View Staff</title>
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
<h1>Staff</h1>
<?php
    
	// assigns query
    // query selects table with staff info
	$sqlUser = "SELECT * FROM StaffInfo WHERE UserName = '$username'";
	// prepares connection with database
    $rsUser = odbc_exec($conn,$sqlUser);
	while(odbc_fetch_row($rsUser)){											// 
		$staffForename = odbc_result($rsUser,'StaffFirstName');
		$staffSurname = odbc_result($rsUser,'StaffLastName');
		echo $rsUser;
		echo '<br>';
		echo 'Hello, ' . $staffForename . ' ' . $staffSurname . '!';
	}
	
	echo '<br>';
	
	
	echo '<br>';
	
            // testing case
            while(odbc_fetch_row($rsUser)){											// 
                $staffForename = odbc_result($rsUser,'StaffFirstName');
                $staffSurname = odbc_result($rsUser,'StaffLastName');
                echo $rsUser;
                echo '<br>';
                echo 'Hello, ' . $staffForename . ' ' . $staffSurname . '!';
            }
    // prints output of query
    $sqlAdmin = "SELECT * FROM StaffInfo WHERE UserName = '$username'";			// query selects StaffInfo table
	$rsAdmin = odbc_exec($conn,$sqlAdmin);										// prepares connection with database
	while(odbc_fetch_row($rsAdmin)){
		$checkAdmin = odbc_result($rsAdmin,'CheckAdmin');						// checks for admin status (should only be TRUE or FALSE)
		echo $rsAdmin;
		echo '<br>';
		echo 'Admin: ' . $checkAdmin . '<br>';
		switch ($checkAdmin) {
			
			// not an admin
			case 0:
				echo 'Researcher';
				$rsStaff = odbc_exec($conn,$sqlAdmin);									// prepares connection with database
				while(odbc_fetch_row($rsStaff)){											// 
					$staffID = odbc_result($rsStaff,'Staff_ID');
					$staffForename = odbc_result($rsStaff,'StaffFirstName');
					$staffSurname = odbc_result($rsStaff,'StaffLastName');
					// following block displays details, with update button to update page
                    echo '<br>';
                    echo 'ID: ' . $staffID . '<br><br>';
					echo 'Name: ' . $staffForename . ' ' . $staffSurname . '<br><br>';
                    echo 'Username: ' . $username . '<br><br>';
				    echo '<form action="update_staff.php" method="post"> 
							<button type="submit" name="staff_edit" class="btn-link">Update</button> 
						</form> <br>';
				}
				break;
			
			// an admin
			case 1:
				echo 'Administrator';
				// query selects ALL users
                $sqlSubject = "SELECT * FROM SubjectInfo";
				// prepares connection with database
                $rsSubject = odbc_exec($conn,$sqlSubject);
				while(odbc_fetch_row($rsSubject)){							
					$subjectID = odbc_result($rsSubject,'Subject_ID');
					$subjectForename = odbc_result($rsSubject,'FirstName');
					$subjectSurname = odbc_result($rsSubject,'LastName');
					// echo $rsSubject;
					echo '<br>';
					echo $subjectID . ' ' . $subjectForename . ' ' . $subjectSurname . ' <form action="subject.php" method="post"> 
							<button type="submit" name="subject_details" class="btn-link">Details</button> 
						</form> <br>';
				}
				break;
			
			// just in case
            // there should be no case where this page is visible
			default:
				echo 'You shouldn\'t be able to see this page!';
				echo '<br>';
				echo 'If you are reading this, congratulate yourself on your 1337 haxing ski11z.';
		}
		
	}
?>
</body>
</html>

































