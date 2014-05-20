<?php
    require('config.php');
    $con = mysqli_connect($host, $user, $password, $database);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
    $memberid = $_GET['id'];
    $request = "SELECT first, last, phone, email, info, reviews FROM profile WHERE memberid = $memberid";
    $result = mysqli_query($con,$request);
    while ($obj = mysqli_fetch_object($result)) {
    	$output = array("profile" => $obj);
	}
	if (isset($output)) {
		$request = "SELECT address, arrivaltime, departtime, info, role, location  FROM monday WHERE memberid = $memberid";
		$result = mysqli_query($con, $request);
		while ($obj = mysqli_fetch_object($result)) {
			$monday = array("monday" => $obj);
			$output = array_merge($output, $monday);
		}
		$request = "SELECT address, arrivaltime, departtime, info, role, location FROM tuesday WHERE memberid = $memberid";
		$result = mysqli_query($con, $request);
		while ($obj = mysqli_fetch_object($result)) {
			$tuesday = array("tuesday" => $obj);
			$output = array_merge($output, $tuesday);
		}
		$request = "SELECT address, arrivaltime, departtime, info, role, location FROM wednesday WHERE memberid = $memberid";
		$result = mysqli_query($con, $request);
		while ($obj = mysqli_fetch_object($result)) {
			$wednesday = array("wednesday" => $obj);
			$output = array_merge($output, $wednesday);
		}
		$request = "SELECT address, arrivaltime, departtime, info, role, location FROM thursday WHERE memberid = $memberid";
		$result = mysqli_query($con, $request);
		while ($obj = mysqli_fetch_object($result)) {
			$thursday = array("thursday" => $obj);
			$output = array_merge($output, $thursday);
		}
		$request = "SELECT address, arrivaltime, departtime, info, role, location FROM friday WHERE memberid = $memberid";
		$result = mysqli_query($con, $request);
		while ($obj = mysqli_fetch_object($result)) {
			$friday = array("friday" => $obj);
			$output = array_merge($output, $friday);
		}
		$request = "SELECT address, arrivaltime, departtime, info, role, location FROM saturday WHERE memberid = $memberid";
		$result = mysqli_query($con, $request);
		while ($obj = mysqli_fetch_object($result)) {
			$saturday = array("saturday" => $obj);
			$output = array_merge($output, $saturday);
		}
		$request = "SELECT address, arrivaltime, departtime, info, role, location FROM sunday WHERE memberid = $memberid";
		$result = mysqli_query($con, $request);
		while ($obj = mysqli_fetch_object($result)) {
			$sunday = array("sunday" => $obj);
			$output = array_merge($output, $sunday);
		}
		
		echo json_encode($output);
	}

?>