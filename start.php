<!DOCTYPE HTML>
<head>
	<!--<link rel="stylesheet" type="text/css" href="./SignCSS.css">-->
	<meta name="viewport" content="width=device-width, initial-scale=1"></meta>
	<link rel="stylesheet" href="JS/jqueryMobile/jquery.mobile-1.4.2.css"></link>
	<link rel="stylesheet" href="style/SignCSS.css"></link>
	<script src="JS/jquery.min.js"></script>
	<script src="JS/jqueryMobile/jquery.mobile-1.4.2.min.js"></script>
	<script src="JS/main.js"></script>
</head>
<body>
	<div data-role="page" id="landing">
		<div data-role="header">
			<h1>BCIT Ride Share</h1>
		</div>

		<div id="greeting_msg">
			Welcome!
		</div>
	  
		<div data-role="main" class="ui-content-landing">
			<a href="#signin" id="signinbutton" class="ui-btn" data-transition="slide">Sign In</a>
			<a href="#signup" id="signupbutton" class="ui-btn" data-transition="slide">Register</a>
		</div>
	</div>
	<!--Sign in Page-->
	<div data-role="page" id="signin">
		<div id="background">
		<div data-role="header" id="head">
			<h1>Sign In</h1>
		</div>
	<form data-ajax="false" action="php/login.php" method="post">
		<div id="loginuser">
			Username <br><input type="text" name="username" id="usersignIn"><br>
		</div>
		<div id="loginpass">
			Password <br><input type="password" name="password" id="passsignIn"><br>
		</div>
		<span id = "warning">
            <?php
				if(isset($_GET['fail'])) {
					echo "*Username or Password was incorrect";   
                }
            ?>    
        </span>
		<div id="loginbutton">
			<input type="submit" class="ui-btn" value="Login" id="button"></input><br>
		</div>
	</form>
		<div id="back">
			Don't have an account<br>
			<div id="register">
				<a href="#signup">Register</a>
			</div>
		</div>
	</div>
	</div>
	<!--Sign Up Page-->
	<div data-role="page" id="signup">
		<div data-role="header" id="head">
			<h1>Sign Up</h1>
		</div>
		<div data-role="main" class"ui-content">
		<div id="background">
			<form data-ajax="false" onsubmit="return formValidate()" action="signUp.php" method="post">
				<div id="fullname">
					Name <span id="errName"></span><input type="text" name="firstname" id="firstname" placeholder="First" size=20>
					<input type="text" name="lastname" id="lastname" placeholder="Last" size=20><br>
				</div>
				<div id="loginuser">
					Username <span id="errUser"></span><input type="text" name="username" id="usersignUp"><br>
				</div>
				<div id="loginpass">
					Password <span id="errPass"></span><input type="password" name="password" id="passsignUp"><br>
				</div>
				<div id="confirmPass">
					Confirm Password <span id="errConPass"></span><input type="password" name="password" id="conPass"><br>
				</div>
				<div id="loginuser">
					Email (@my.bcit.ca) <span id="errEmail"></span><input type="text" name="email" id="email"><br>
				</div>
			<div id="missingEle"></div>
			<span id = "warning">
				<?php
					if(isset($_GET['error'])){                        
						echo $_GET['error'];
					}
				?>
			</span>
			<div id="signbutton">
				<input type="submit" value="Sign Up" id="button"><br>
			</div>
			</form>
		<div id="signinback">
			Already have an account?<br>
			<div id="signin">
				<a href="#signin"> Sign In</a>
			</div>
		</div>
		</div>
		</div>
	</div>
</body>