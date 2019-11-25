/* validates login.php
 * ONLY checks input fields aren't empty
 * pretty much prevents users from submitting empty login form
 */

function formValidation() {
	// var loginPassword = document.forms["login"]["password"].value;
	if(loginUsername.value === "") {
		alert("No username entered!");
		return false;
	}
}