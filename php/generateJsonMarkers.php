<?php
    require('config.php');
    $con = mysqli_connect($host, $user, $password, $database);
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
    $markers = array();
    $request = "SELECT memberid, location FROM " . $_GET['day'];
    $result = mysqli_query($con, $request);
    while ($obj = mysqli_fetch_object($result)) {
        $markers[] = $obj;
    }
    /*if($markers == null) {
        echo "<script>alert('no results found')</script>";
        
    } else {*/
        echo json_encode($markers);
    //}
    mysqli_close($con);
    //echo $_COOKIE["memberid"];
?>