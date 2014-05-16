<?php
	/*session_start();
	require_once('config.php');
	

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	$tbl_name="profile"; // Table name*/
	
	//Variables for number of ratings and total rating
	
	function calcRating(){
		$noOfRatings = 10;
		$totalRatings = 50;
		$avgRating=$totalRatings/$noOfRatings;
		return $avgRating;
	}
	
	echo calcRating();
?>