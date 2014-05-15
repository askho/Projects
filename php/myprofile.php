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
$query = "SELECT * FROM profile WHERE memberid=$mymemberid";
$result = mysql_query($query);

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
$name = $row['first'] . " " . $row['last'];
$first = $row['first'];
$last = $row['last'];
$phone = $row['phone'];
$email = $row['email'];
$info = $row['info'];
}

//close the connection
mysql_close($dbhandle);
?>