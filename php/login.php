<?php

    require('config.php');
    $con = mysqli_connect($host, $user, $password, $database);
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }

	$user = $_POST["username"];
	$pass = $_POST["password"];
	$Encryptpass = md5($pass);
	$request = "SELECT * FROM profile WHERE username = '$user' AND password = '$Encryptpass'";
	$result = mysqli_query($con, $request);
	if(mysqli_num_rows($result)!=0){    
        while($row = mysqli_fetch_array($result))
              {
                if(strcasecmp($row['username'], $user) == 0 && $row['password'] == $Encryptpass) {
                    setcookie("user", $user, time()+3600*24,"/");
                    setcookie("memberID", $row['memberid'], time()+3600*24,"/");
					header( 'Location: ../index.php' ) ;
					exit();
				} else {
                    echo "failed";
                }
              }
    } else {
		header('Location: ../start.php');
        
	}
	
	mysqli_close($con);
?>