<?php
include 'config.php';
//connection to the database
$dbhandle = mysql_connect($host, $user, $password)
  or die("Couldn't connect to SQL Server on $myServer"); 

//select a database to work with
$selected = mysql_select_db($database, $dbhandle)
  or die("Couldn't open database $myDB"); 
 
$memberid= $_POST['memberid'];
$query = "SELECT * FROM profile WHERE memberid=$memberid";
$result = mysql_query($query);

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
$name = $row['first'] . " " . $row['last'];
$first = $row['first'];
$last = $row['last'];
$phone = $row['phone'];
$email = $row['email'];
$info = $row['info'];
}
?>

<?php
//Monday
$query = "SELECT * FROM monday WHERE memberid=$memberid";
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
$query = "SELECT * FROM tuesday WHERE memberid=$memberid" ;
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
$query = "SELECT * FROM wednesday WHERE memberid=memberid" ;
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
$query = "SELECT * FROM thursday WHERE memberid=memberid" ;
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
$query = "SELECT * FROM friday WHERE memberid=memberid" ;
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
$query = "SELECT * FROM saturday WHERE memberid=$memberid" ;
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
$query = "SELECT * FROM sunday WHERE memberid=$memberid" ;
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
<div data-role="header">
	<h1><img src = "JS\jqueryMobile\images\icons-png\user-white.png" height =14em alt = "Profile Icon"> My Profile</h1>
	<a href="#mypanel" data-role="button" class="ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars">Home</a>
</div>
<div data-role="main" class="ui-content">
	<div class="profile_main">
		<h1><?php echo $name?></h1>
		<div class="profile_img">
			<img id="photo" src="images\thumbnails\nickcage.jpg" alt="Profile Picture">
			<!-- This is the rating bar for profiles -->
			<div id="user_rating" class="star"></div>						
		</div>
		<div class="profile_contact">
			<h2>Contact Info<hr></h2>
			<h3>Email:</h3>
			<p><?php echo $email?></p>
			<h3>Phone:</h3>
			<p><?php echo $phone?></p>
		</div>
		<div class="profile_info">
			<br/>
			<h3>About me</h3>
			<hr>
			<p><?php echo $info?></p>
		</div>
		<br style="clear:both;">
	</div>

	<!--Schedule Tables-->

	<!--Monday-->
	<div data-role="collapsible">
		<h2>Monday</h2>
		<table data-role="table" class="ui-responsive">
			<thead>
				<tr>
					<td>Role:</td>
					<td>Address:</td>
					<td>Arrival:</td>
					<td>Departure:</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $role_1?></td>
					<td><?php echo $address_1?></td>
					<td><?php echo $arrival_1?></td>
					<td><?php echo $departure_1?></td>
			`	</tr>
			</tbody>
		</table>
		<h3>Additional information</h3>					
		<p><?php echo $additional_1?></p>
		 <div data-role="main" class="ui-content">
			<a href="#" class="ui-btn">Send Request</a>
		</div>
	</div>

	<!--Tuesday-->
	<div data-role="collapsible">
		<h2>Tuesday</h2>	
		<table data-role="table" class="ui-responsive">
			<thead>
				<tr>
					<td>Role:</td>
					<td>Address:</td>
					<td>Arrival:</td>
					<td>Departure:</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $role_2?></td>
					<td><?php echo $address_2?></td>
					<td><?php echo $arrival_2?></td>
					<td><?php echo $departure_2?></td>
			`	</tr>
			</tbody>
		</table>
		<h3>Additional information</h3>					
		<p><?php echo $additional_2?></p>
		 <div data-role="main" class="ui-content">
			<a href="#" class="ui-btn">Send Request</a>
		</div>
	</div>
		
	<!--Wednesday-->	
	<div data-role="collapsible">			
		<h2>Wednesday</h2>
		<table data-role="table" class="ui-responsive">
			<thead>
				<tr>
					<td>Role:</td>
					<td>Address:</td>
					<td>Arrival:</td>
					<td>Departure:</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $role_3?></td>
					<td><?php echo $address_3?></td>
					<td><?php echo $arrival_3?></td>
					<td><?php echo $departure_3?></td>
			`	</tr>
			</tbody>
		</table>
		<h3>Additional information</h3>					
		<p><?php echo $additional_3?></p>
		 <div data-role="main" class="ui-content">
			<a href="#" class="ui-btn">Send Request</a>
		</div>
	</div>

	<!--Thursday-->				
	<div data-role="collapsible">
		<h2>Thursday</h2>
		<table data-role="table" class="ui-responsive">
			<thead>
				<tr>
					<td>Role:</td>
					<td>Address:</td>
					<td>Arrival:</td>
					<td>Departure:</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $role_4?></td>
					<td><?php echo $address_4?></td>
					<td><?php echo $arrival_4?></td>
					<td><?php echo $departure_4?></td>
			`	</tr>
			</tbody>
		</table>
		<h3>Additional information</h3>					
		<p><?php echo $additional_4?></p>
		 <div data-role="main" class="ui-content">
			<a href="#" class="ui-btn">Send Request</a>
		</div>
	</div>

	<!--Friday-->				
	<div data-role="collapsible">
		<h2>Friday</h2>
		<table data-role="table" class="ui-responsive">
			<thead>
				<tr>
					<td>Role:</td>
					<td>Address:</td>
					<td>Arrival:</td>
					<td>Departure:</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $role_5?></td>
					<td><?php echo $address_5?></td>
					<td><?php echo $arrival_5?></td>
					<td><?php echo $departure_5?></td>
			`	</tr>
			</tbody>
		</table>
		<h3>Additional information</h3>					
		<p><?php echo $additional_5?></p>
		 <div data-role="main" class="ui-content">
			<a href="#" class="ui-btn">Send Request</a>
		</div>
	</div>

	<!--Saturday-->				
	<div data-role="collapsible">
		<h2>Saturday</h2>
		<table data-role="table" class="ui-responsive">
			<thead>
				<tr>
					<td>Role:</td>
					<td>Address:</td>
					<td>Arrival:</td>
					<td>Departure:</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $role_6?></td>
					<td><?php echo $address_6?></td>
					<td><?php echo $arrival_6?></td>
					<td><?php echo $departure_6?></td>
			`	</tr>
			</tbody>
		</table>
		<h3>Additional information</h3>					
		<p><?php echo $additional_6?></p>
		 <div data-role="main" class="ui-content">
			<a href="#" class="ui-btn">Send Request</a>
		</div>
	</div>

	<!--Sunday-->
	<div data-role="collapsible">
		<h2>Sunday</h2>
		<table data-role="table" class="ui-responsive">
			<thead>
				<tr>
					<td>Role:</td>
					<td>Address:</td>
					<td>Arrival:</td>
					<td>Departure:</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $role_7?></td>
					<td><?php echo $address_7?></td>
					<td><?php echo $arrival_7?></td>
					<td><?php echo $departure_7?></td>
			`	</tr>
			</tbody>
		</table>
		<h3>Additional information</h3>					
		<p><?php echo $additional_7?></p>
		 <div data-role="main" class="ui-content">
			<a href="#" class="ui-btn">Send Request</a>
		</div>
	</div>
</div>
