<html>
	<meta name="viewport" content="width=device-width, initial-scale=1"></meta>
	<link rel="stylesheet" href="JS/jqueryMobile/jquery.mobile-1.4.2.css"></link>
	<link rel="stylesheet" href="style/SignCSS.css"></link>
	<script src="JS/jquery.min.js"></script>
	<script src="JS/jqueryMobile/jquery.mobile-1.4.2.min.js"></script>
	<script src="JS/main.js"></script>
<body>
<?php

$con = mysqli_connect("localhost", "root", "", "students");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$encryptPass = md5($password);

$request = "SELECT * FROM profile WHERE username = '$username'";
$result = mysqli_query($con, $request);

if(mysqli_num_rows($result)!=0){    
    while($row = mysqli_fetch_array($result))
        {
        if(strcasecmp($row['username'], $username) == 0) {
			header( 'Location: start.php');
        } else {
            echo "failed";
        }
    }
} else {

	$request = "INSERT INTO profile (first, last, username, password, email)
		VALUES ('$firstname', '$lastname', '$username', '$encryptPass', '$email')";
	mysqli_query($con, $request);
}
mysqli_close($con);
	
?>
<div data-role="header" id="head">
	<h1>Sign Up Valid</h1>
</div>
<form>
	<h1>Return to Sign In</h1> 
	<input onclick="SignUpDone()" type="button" value="Return" id="button"></input>
</form>
</body>
</html>