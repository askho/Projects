<?php
require('config.php');
$con = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
$request = "SELECT * FROM requests WHERE 1";
$result  = mysqli_query($con, $request);
while ($row = mysqli_fetch_array($result)) {
    echo $row['riderid'];
}
mysqli_close($con);
//echo $_COOKIE["memberid"];
$to = "leon.lai.ho@gmail.com";
$subject = "i love cows";
$message = "<!DOCTYPE html><html><body><p>An image from another folder:</p><img src=\"/images/chrome.gif\" alt=\"Google Chrome\" width=\"33\" height=\"32\"><p>An image from W3Schools:</p><img src=\"http://www.w3schools.com/images/w3schools_green.jpg\" alt=\"W3Schools.com\" width=\"104\" height=\"142\"></body></html>";
mail ( $to , $subject , $message);
?>