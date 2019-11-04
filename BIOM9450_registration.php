<!--
DOCTYPE html
-->

<html> 

	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Registration | AHICon</title>
        <meta name="description" content="biom9450">
        <link rel="stylesheet" href="brackets_main.css">
	<script src="BIOM9450_registration_script.js"></script>
	</head>

	<body> <onload="document.registration.email.focus();">
	
		<?php
			// home variables - COMMENT OUT BEFORE SUBMITTING
			$serverName="Driver={Microsoft Access Driver (*.mdb)}; Dbq=$dbName";
			$userName=" ";
			$password=" ";
			$dbName="project.mdb";
			
			// uni variables - UNCOMMENT AND TEST BEFORE SUBMITTING
			// $serverName="z5232927";
			// $userName=" ";
			// $password=" ";
			// $dbName="project.mdb";
			
			// query variables
			$fhandle = fopen($dbName,‘w’) or die(“can’t open file”); 
				// exception handling: if there are issues with opening and writing in project.mdb, then the command dies and prints out text
			
			$sqlQuery = "SELECT * FROM Registered WHERE Banned=False;";
				// selects any entry from the "Registered" table, provided the field "Banned" is "False"
			
			$registered = odbc_exec($conn,$sqlQuery); 
				// prepares and executes the SQL statement "sqlQuery"
				// odbc_exec(connection id, 
			
			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
			// create connection
			// $conn = odbc_connect(DSN, $username, $password, SQL_CUR_USE_ODBC);
			$conn = odbc_connect($serverName,$userName,$password, SQL_CUR_USE_ODBC);
			
			// ifelse to check if odbc connection to .mdb was successful
			if(!$conn){ 
				exit("Connection failed: ". $conn); 
				} 
			else { 
				echo "Connection successful!"); 
				}
			
			// error if entry is registered
			if(!$registered){ 
				exit("Error in SQL"); 
			}
			
			//
			$sqlInsert = "INSERT INTO Registration (email,password,forename,surname,dateBirth,gender) 
				VALUES (email,passID,fName,sName,dob,gender)";
				// defines SQL query for adding values to table as variable "sqlInsert"
				// make sure the variables in the query match the variables entered in the form!
				// INSERT INTO -> fields in project.mdb / Registration
				// VALUES -> values in webform "biom9450_webpage_register.html"
				// how to add marketing?
				// how to check banned?
			
			// checks if input was added to .mdb, probably, but this code was made for MySQLi so idk XD
			if ($conn->query($sqlInsert) === TRUE) {
				echo "New record created successfully";
			} 
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				}

			// closes db connection, but this is for MySQLi so...
			$conn->close();
		?>
		
		<div class="header">
        <a href = "biom9450_webpage.html">
        <h1>AHICon<br>
            Australian Health Informatics Conference 2019</h1>
		<! add pic >
        </a>
        <p>16 Dec, Sydney</p>
        </div>
	
		<h1>Registration Form</h1>
		<form name="registration" action="BIOM9450_HTML_register_success.php" method="POST">
			<!--
			name is "registration" ; should it be "$registration"?
			action takes user to success page should all functions be "TRUE"
			uses "POST" method
			-->
		
		<label for="email">Email:</label><br>
		<input type="text" name="email" size="50" /><br>
		
		<label for="passID">Password:</label><br>
		<input type="password" name="passID" size="50" /><br>
		
		<label for="passID2">Re-enter Password:</label><br>
		<input type="password" name="passID2" size="50" /><br>
		
		<label for="fName">First name:</label><br>
		<input type="text" name="fName" size="50" /><br>
		
		<label for="sName">Surname:</label><br>
		<input type="text" name="sName" size="50" /><br>
		
		<label for="gender">Gender:</label><br>
		<select name="gender">
		<option selected="" value="Default">(Please select a gender)</option>
		<option value="XG">X</option>
		<option value="FM">Female</option>
		<option value="ML">Male</option>
		</select><br>
		
		<label for="dob">DOB:</label><br>
		<input type="text" name="dob" placeholder="dd/mm/yyyy" />
		<br>
		<br>
		<input type="checkbox" name="yes" value="yes" /><span>I would like to receive promotional material via email.</span>
		<br>
		<br>
		<input type="button" name="submit" value="Submit" onClick="formValidation(); return false;" /><br>
		</form>
	</body>
    
    <div class="footer">
		<TABLE border = "0"; cellspacing = "1"; cellpadding = "5"> <!-- start of table definition --> 
			<!--
                <CAPTION> no caption </CAPTION> caption definition 
            --> 
			<TR>   <!-- start of header row definition -->
				<TH> Sponsored by<br>
                    <a href="http://site.hl7.org.au/"><img src="hl7_aus.jpg" width="50%" height="50%"></a>
                    </TH>
				<TH> In cooperation with<br>
                    <a href="http://www.hl7.org/"><img src="hl7_intl.png" width="25%" height="25%"></a>
                    </TH>
			</TR>  <!-- end of header row definition -->
		</TABLE>
		<p>HL7, CDA, and FHIR are registered trademarks of Health Level Seven International</p>
		<p>HTML inspired by GSBmE</p>
		<p>style inspired by Brackets</p>
		<P>header style inspired by W3Schools</P>
        </div>
</html> 


















