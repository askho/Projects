<?php
mysql_connect("localhost", "root", "root", "group1_BCIT") or
    die("Could not connect: " . mysql_error());
mysql_select_db("rideshare") or
	die("Could not connect: " . mysql_error());

$request = "SELECT first,day FROM requests INNER JOIN profile ON requests.requesterid = profile.memberid";
//echo $request;
$result = mysql_query("SELECT first,day FROM requests
INNER JOIN profile ON requests.requesterid = profile.memberid");
while ($row = mysql_fetch_object($result)) {
	$obj[] = $row;
	}
	
echo json_encode($obj);
?>