S<?php
	setcookie("user", "", time()-3600);
	setcookie("memberID", "", time()-3600);
	header("Location: ../start.php");
?>