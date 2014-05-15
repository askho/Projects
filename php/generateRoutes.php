<?php
    require('config.php');
    $con = mysqli_connect($host, $user, $password, $database);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
    $memberid = $_GET['memberid'];
    $request = "SELECT mondayConfirmationid FROM profile WHERE memberid = $memberid";
    $result = mysqli_query($con,$request);
    while($row = mysqli_fetch_array($result)) {
	  $confirmationNumber = $row['mondayConfirmationid'];
	  $splitNumber = explode(", ", $confirmationNumber);
	  if($_GET['direction'] == "arrival") {
	  	$confirmationNumber = $splitNumber[0];
	  } else {
	  	$confirmationNumber = $splitNumber[1];
	  }
	}
	$request = "SELECT * FROM confirmed WHERE confirmid = $confirmationNumber AND day = \""
		. $_GET["day"] . "\"";
	//echo $request;
	$result = mysqli_query($con,$request);
	while ($obj = mysqli_fetch_object($result)) {
    	$output[] = $obj;
	}
	echo json_encode($output);
	mysqli_close($con);
?>