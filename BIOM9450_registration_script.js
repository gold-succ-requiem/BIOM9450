			function formValidation()
			{
				var uemail = document.forms.registration.email;
				var upass = document.registration.passID.value;
				var upass2 = document.registration.passID2.value;
				var ufname = document.registration.fName;
				var usname = document.registration.sName;
				var udob = document.registration.dob;
				var ugender = document.registration.gender; 
				
				if(validEmail(uemail))
				{
					if(validPass(upass)) // create checkPass(upass, upass2) as well, return true if upass == upass2
					{
						if(checkPass(upass,upass2))
						{
							if(allLetterFname(ufname))
							{
								if(allLetterSname(usname))
								{ 
									if(genderSelect(ugender))
									{
										if(validDob(udob))
										{
										}
									}
								}
							}
						}
					}
					return false; // testing "true" out, return to "false" if not working
				}
			}
			
			// tests email
			function validEmail(uemail) // removed mx and my - not needed!
			{
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; // \w is word metachar, so a-z,A-Z,0-9,
				if(uemail.value.match(mailformat))
				{
					return true;
				}
				else
				{
					alert("Please enter a valid email address");
					uemail.focus();
					return false;
				}
			}
			
			// tests password
			function validPass(upass)
			{
				var upass_char = /^[A-Za-z]\w{8,}$/; // restricts input to at least 8 chars, A-Z, a-z, 0-9
				if (upass.value.match(upass_char))
				{
					return true;
				}
				else // added else clause cos it seems logical, doing same with other functions
				{
					alert("Password must be at least 8 characters: A-Z, a-z, 0-9");
					upass.focus();
					return false;
				}
			}
			
			// matches passwords
			function checkPass(upass,upass2)
			{
				if(upass2 == upass)
				{
					return true;
				}
				else
				{
					alert("Password must match");
					upass2.focus();
					return false;
				}
			}
			
			// checks first name is all alpha
			function allLetterFname(ufname)
			{ 
				var letters = /^[A-Za-z]+$/;
				if(ufname.value.match(letters))
				{
					return true;
				}
				else
				{
					alert('First name must have alphabetical characters only');
					ufname.focus();
					return false;
				}
			}
			
			// same as allLetter(ufname) but with surname
			function allLetterSname(usname)
			{ 
				var letters = /^[A-Za-z]+$/;
				if(usname.value.match(letters))
				{
					return true;
				}
				else
				{
					alert('Surname must have alphabetical characters only');
					usname.focus();
					return false;
				}
			}
			
			// ensures a gender is chosen from list, element other than default
			function genderSelect(ugender)
			{
				if(ugender.value == "Default")
				{
					alert('Select your gender from the list');
					ugender.focus();
					return false;
				}
				else
				{
					return true;
				}
			}
			
			// checks date is correct - cannot be date picker unfortunately
			function validDob(udob)
			{ 
				var numbers = /^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[0-2])[\/](19[1-9][0-9]|200[0-9]|201[1-8])$/
				
				if(udob.value.match(numbers))
				{
					alert("Registration successful! Return to homepage."); // instead of page, a window pops up ; clicking ok returns to homepage
					setTimeout("location.href = 'biom9450_webpage.html';"); // no more delay (arg2 = t in ms)
					window.location.reload()
					return true;
				}
				else
				{
					alert('Date of birth must be between 1/1/1900 and 31/12/2018');
					udob.focus();
					return false;
				}
			}
















