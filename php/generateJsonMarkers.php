<?php
    require('config.php');
    $con = mysqli_connect($host, $user, $password, $database);
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }  
    $request = "SELECT * FROM " . $_GET['day'] . " WHERE memberid = ".$_COOKIE["memberid"];
    $result = mysqli_query($con, $request);
    while($row = mysqli_fetch_array($result)) {
        $departure = $row['departtime'];
        $arrival = $row['arrivaltime'];
        $role = $row['role'];
    }
    if($_GET['direction'] == "arrival") {
        $time  = $arrival;
        $direction = "arrivaltime";
    } else {
        $time = $departure;
        $direction = "departtime";
    }  
    $result = mysqli_query($con, $request);
    while ($obj = mysqli_fetch_object($result)) {
        $currentUser[] = $obj;
    }
    $time=strtotime("$time");
    $timeVariance = $time-1800;
    $markers = array();
    $request = "SELECT profile.memberid, profile.first, profile.last, profile.email, " .  $_GET['day']. ".location, " . $_GET['day'].".address FROM " . $_GET['day'] 
        . " INNER JOIN profile ON profile.memberid = " . $_GET['day'] . ".memberid WHERE profile.memberid != ".$_COOKIE["memberid"] 
        . " AND " . $direction . " BETWEEN \"" . date("H:i", $timeVariance) . "\" AND \"" . date("H:i",$time)."\" AND role != " . $role;

    //echo $request;
    $result = mysqli_query($con, $request);
    while ($obj = mysqli_fetch_object($result)) {
        $markers[] = $obj;
    }

    $output = array("markers" => $markers, "currentUser" => $currentUser);    
    echo json_encode($output);
    mysqli_close($con);
    //echo $_COOKIE["memberid"];
?>