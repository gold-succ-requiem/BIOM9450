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

	<body>
	
	<h1>Duplicate registration!</h1>
	<br>
	
	<?php
		$regofName = $_POST["fName"];
		$regosName = $_POST["sName"];
		$regoDob = $_POST["dob"];
		$regoEmail = $_POST["email"];
		
		echo $regoEmail . " has already registered! Please register with another email address."
	?>
	<br>
	<br>
	<br>
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























