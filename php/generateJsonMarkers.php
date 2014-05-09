<?php
    require('config.php');
    $con = mysqli_connect($host, $user, $password, $database);
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
    

    $request = "SELECT * FROM " . $_GET['day'] . " WHERE memberid = ".$_COOKIE["memberid"];
    //echo $request;
    $result = mysqli_query($con, $request);
    while($row = mysqli_fetch_array($result)) {
      echo $row['arrivaltime'];
      echo "<br>";
    }   
    $result = mysqli_query($con, $request);
    while ($obj = mysqli_fetch_object($result)) {
        $currentUser[] = $obj;
    }

    $timeVariance=strtotime("17:30:00.000000");
    //echo date("H:i", $timeVariance);
    $markers = array();
    $request = "SELECT profile.memberid, profile.first, profile.last, profile.email, " .  $_GET['day']. ".location FROM " . $_GET['day'] 
        . " INNER JOIN profile ON profile.memberid = " . $_GET['day'] . ".memberid WHERE profile.memberid != ".$_COOKIE["memberid"] . " AND arrivaltime BETWEEN \"8:15\" AND \"8:35\"";

    $result = mysqli_query($con, $request);
    while ($obj = mysqli_fetch_object($result)) {
        $markers[] = $obj;
    }

    $output = array("markers" => $markers, "currentUser" => $currentUser);    
    //echo json_encode($output);
    mysqli_close($con);
    //echo $_COOKIE["memberid"];
?>