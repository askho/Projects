		//Checks to see if all data within the form are correct and adequate.
		//Also fills the divisions with characters to notify the user if 
		//any information is incorrect.
		function formValidate() {
		
			var test = true;
			
			if (!testNameEmpty() ){
				document.getElementById('errName').innerHTML='*';
				test = false;
			} else {
				document.getElementById('errName').innerHTML='';
			}
			
			if (!testUsername() ){
				document.getElementById('errUser').innerHTML='*';
				test = false;
			} else {
				document.getElementById('errUser').innerHTML='';
			}
			
			if (testPassword() == 0 ){
				document.getElementById('errPass').innerHTML='*';
				test = false;
			} else if (testPassword() == 1){
					document.getElementById('errPass').innerHTML='* Must contain at least 7 charcters';
					test = false;
				} else if (testPassword() == 2){
					document.getElementById('errPass').innerHTML='* Must contain an uppercase character';
					test = false;
					} else if (testPassword() == 3){
						document.getElementById('errPass').innerHTML='* Must contain a number';
						test = false;
						} else {
						document.getElementById('errPass').innerHTML='';
						}
			
			if (!testConPass() ){
				document.getElementById('errConPass').innerHTML='* Passwords are not the same';
				test = false;
			} else { 
				document.getElementById('errConPass').innerHTML='';
			}
			
			if (!testEmail() ){
				document.getElementById('errEmail').innerHTML='*';
				test = false;
			} else { if (!testValidEmail() ){
					document.getElementById('errEmail').innerHTML='* Invalid Email';
					test = false;
				} else {
					document.getElementById('errEmail').innerHTML='';
				}
			}
			
			if (test == false) {
				document.getElementById('missingEle').innerHTML='Missing or Invalid Elements';
			}
			return test;
		}
		
		function connectMain() {
			window.location.href = "index.php"
		}
		
		//Test name to see if it only contains characters and is filled out
		function testNameEmpty() {
			var first = document.getElementById('firstname').value;
			var last = document.getElementById('lastname').value;
			
			if ((first == "") || (last == "")) {
				return false;
			}
			if (!first.search(/^([a-zA-Z]*)$/)) {
				return true;
			}
			if (!last.search(/^([a-zA-Z]*)$/)) {
				return true;
			}
		}
		
		//Test the Username to see if empty
		function testUsername() {
			var username = document.getElementById('usersignUp').value;
			
			if (username == "") {
				return false;
			} else {
			return true;
			}
		}
		
		//Test password to check for appropriate length and number of characters
		function testPassword() {
			var password = document.getElementById('passsignUp').value;
			
			if (password == "") {
				return 0;
				} else { if ((password).length <= 6) {
					return 1;
					} else { if (password.search(/^.*(?=.*[a-z])(?=.*[A-Z]).*$/)) {
						return 2;
						} else { if (password.search(/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/)) {
							return 3;
						} else { return 4;
						}
					}
				}
			}
		}
		
		//Test to see if passwords are the same
		function testConPass() {
			var password = document.getElementById('passsignUp').value;
			var Confirmpassword = document.getElementById('conPass').value;
			
			
			if (password == Confirmpassword) {
				return true;
			} else {
			return false;
			}
		}
		
		//Test for correctness of BCIT email
		function testValidEmail() {
			var mail = document.getElementById('email').value;
		
			if (mail == ''){
			}		
			if(!mail.search(/^([a-zA-Z0-9]*)@my.bcit.ca$/)) {
				return true;
			}
			return false;
		}
		
		//Test to see if anything is filled in the email box
		function testEmail() {
			var mail = document.getElementById('email').value;
			
			if (mail =='') {
				return false;
			} else {
			return true
			}
		}