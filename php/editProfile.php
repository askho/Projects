<?php
	$input = $_GET['fname'] . $_GET['lname'] . $_GET['pass']  . $_GET['phone'] . $_GET['email'] . $_GET['about'];
	if($input !=  "") {
		    require('config.php');
		    $con = mysqli_connect($host, $user, $password, $database);
		    if(mysqli_connect_errno()) {
		        echo "Failed to connect to MySQL:" . mysqli_connect_error();
		    }
		$request = "UPDATE profile SET ";
		if($_GET['fname'] != '') {
			$request = $request . " first = " . "\"".$_GET['fname'] ."\"". ",";
		}
		if($_GET['lname'] != '') {
			$request = $request. " last = " . "\"".$_GET['lname']."\"". ",";
		}
		if($_GET['pass'] != '') {
			$request = $request . " password = " . "\"".md5($_GET['pass']) ."\"". ",";
		}
		if($_GET['phone'] != '') {
			$request = $request . " phone = " . "\"".$_GET['phone']."\"" . ",";
		}
		if($_GET['email'] != '') {
			$request = $request . " email = " . "\"".$_GET['email']."\"" . ",";
		}
		if($_GET['about'] != '') {
			$request = $request . " info = " ."\"". $_GET['about']."\"". ",";
		}
		$request = rtrim($request, ", ");
		$request = $request . " " ."WHERE memberid = \"" . $_GET['user'] ."\"";
		mysqli_query($con, $request);
		echo "Success";
	}
?>