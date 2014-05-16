<?php
include 'config.php';
//connection to the database
$dbhandle = mysql_connect($host, $user, $password)
  or die("Couldn't connect to SQL Server on $myServer"); 

//select a database to work with
$selected = mysql_select_db($database, $dbhandle)
  or die("Couldn't open database $myDB"); 
 
$mymemberid = 2;
//$_COOKIE['varname'];


//Monday
$query = "SELECT * FROM monday WHERE memberid=$mymemberid";
$result = mysql_query($query);

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
$address_1 = $row['address'];
if ($row['first'] == 0){
	$role_1 = "Driver";
} else {
	$role_1 = "Passenger";
}
$arrival_1 = substr($row['arrivaltime'], 0, -3);
$departure_1 = substr($row['departtime'], 0, -3);
$additional_1 = $row['info'];
}

//Tuesday
$query = "SELECT * FROM tuesday WHERE memberid=$mymemberid" ;
$result = mysql_query($query);

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
$address_2 = $row['address'];
if ($row['first'] == 0){
	$role_2= "Driver";
} else {
	$role_2 = "Passenger";
}
$arrival_2 = substr($row['arrivaltime'], 0, -3);
$departure_2 = substr($row['departtime'], 0, -3);
$additional_2 = $row['info'];
}

//Wednesday
$query = "SELECT * FROM wednesday WHERE memberid=$mymemberid" ;
$result = mysql_query($query);

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
$address_3 = $row['address'];
if ($row['first'] == 0){
	$role_3 = "Driver";
} else {
	$role_3 = "Passenger";
}
$arrival_3 = substr($row['arrivaltime'], 0, -3);
$departure_3 = substr($row['departtime'], 0, -3);
$additional_3 = $row['info'];
}

//Thursday
$query = "SELECT * FROM thursday WHERE memberid=$mymemberid" ;
$result = mysql_query($query);

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
$address_4 = $row['address'];
if ($row['first'] == 0){
	$role_4 = "Driver";
} else {
	$role_4 = "Passenger";
}
$arrival_4 = substr($row['arrivaltime'], 0, -3);
$departure_4 = substr($row['departtime'], 0, -3);
$additional_4 = $row['info'];
}

//Friday
$query = "SELECT * FROM friday WHERE memberid=$mymemberid" ;
$result = mysql_query($query);

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
$address_5 = $row['address'];
if ($row['first'] == 0){
	$role_5 = "Driver";
} else {
	$role_5 = "Passenger";
}
$arrival_5 = substr($row['arrivaltime'], 0, -3);
$departure_5 = substr($row['departtime'], 0, -3);
$additional_5 = $row['info'];
}

//Saturday
$query = "SELECT * FROM saturday WHERE memberid=$mymemberid" ;
$result = mysql_query($query);

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
$address_6 = $row['address'];
if ($row['first'] == 0){
	$role_6 = "Driver";
} else {
	$role_6 = "Passenger";
}

$arrival_6 = substr($row['arrivaltime'], 0, -3);
$departure_6 = substr($row['departtime'], 0, -3);
$additional_6 = $row['info'];
}


//Sunday
$query = "SELECT * FROM sunday WHERE memberid=$mymemberid" ;
$result = mysql_query($query);

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
$address_7 = $row['address'];
if ($row['first'] == 0){
	$role_7 = "Driver";
} else {
	$role_7 = "Passenger";
}
$arrival_7 = substr($row['arrivaltime'], 0, -3);
$departure_7 = substr($row['departtime'], 0, -3);
$additional_7 = $row['info'];
}

//close the connection
mysql_close($dbhandle);
?>