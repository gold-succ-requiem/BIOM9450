			function formValidation()
			{
				var uemail = document.registration.email;
				var upass = document.registration.passID;
				var upass2 = document.registration.passID2;
				var ufname = document.registration.fName;
				var usname = document.registration.sName;
				var udob = document.registration.dob;
				var ugender = document.registration.gender; 
				if(validEmail(uemail))
				{
					if(validPass(upass)) // create checkPass(upass, upass2) as well, return true if upass == upass2
					{
						if(checkPass(upass2,upass))
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
				}
				return false; // testing "true" out, return to "false" if not working
			}
			
			// tests email
			function validEmail(uemail) // removed mx and my - not needed!
			{
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})*(\.\w{2,})+$/; 
					// \w is word metachar, so a-z,A-Z,0-9
					// some valid emails:
					// "email@address.com"
					// "name.surname@address.com"
					// "weeaboo.namae.desu@adoresu.co.jp"
				if(uemail.value.match(mailformat))
				{
					return true;
				}
				else // default, email assumed to be invalid
				{
					alert("Please enter a valid email address.");
					uemail.focus();
					return false;
				}
			}
			
			// tests password validity
			function validPass(upass)
			{
				var upass_char = /^[A-Za-z0-9]{8,}$/; // restricts input to at least 8 chars, A-Z, a-z, 0-9
				if (upass.value.match(upass_char)) // if value entered in upass matches regex defined in upass_char
				{
					return true;
				}
				else // default, password assumed to be invalid
				{
					alert("Password must be at least 8 characters: A-Z, a-z, 0-9.");
					upass.focus();
					return false;
				}
			}
			
			// matches passwords to confirm
			// order of variables called by function is IMPORTANT
			function checkPass(upass2,upass)
			{
				if(upass2.value == upass.value) // checks value of passID (as upass) is the same as value as passID2 (as upass2)
				{
					return true;
				}
				else // default, password assumed to be not confirmed
				{
					alert("Passwords do not match! Please confirm password.");
					upass2.focus();
					return false;
				}
			}
			
			// checks first name is all alpha
			function allLetterFname(ufname)
			{ 
				var letters = /^[A-Za-z-']+$/; // regex permitting upper and lower case, plus hyphens and apostrophes
				if(ufname.value.match(letters))
				{
					return true;
				}
				else // default, forename not assumed to match regex
				{
					alert('First name must have alphabetical characters only.');
					ufname.focus();
					return false;
				}
			}
			
			// same as allLetter(ufname) but with surname
			function allLetterSname(usname)
			{ 
				var letters = /^[A-Za-z-']+$/; // regex permitting upper and lower case, plus hyphens and apostrophes
				if(usname.value.match(letters))
				{
					return true;
				}
				else
				{
					alert('Surname must have alphabetical characters only.');
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
					// only dates between 1/1/1900 and 31/12/2018 are permitted
					// must be in dd/mm/yyyy format (not even dd-mm-yyyy, dd-mm-yy, etc.) - html has placeholder indicating this
				if(udob.value.match(numbers))
				{
					alert("Registration successful! Return to homepage."); // instead of page, a window pops up ; clicking ok returns to homepage
					setTimeout("location.href = 'biom9450_webpage.html';"); // no more delay (arg2 = t in ms)
					window.location.reload()
					return true;
				}
				else
				{
					alert("Date of birth must be between 1/1/1900 and 31/12/2018, in dd/mm/yyyy format.");
					udob.focus();
					return false;
				}
			}
















