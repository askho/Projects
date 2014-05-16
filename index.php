<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BCIT Ride Share</title>
		
		<!--Open Sans Font Import-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,300,400,700' rel='stylesheet' type='text/css'>
		
		<!--CSS-->
		<link rel="stylesheet" href="JS/jqueryMobile/jquery.mobile-1.4.2.css">
		<link rel="stylesheet" href="style/style.css">

		
		<!--SCRIPTS-->
		<!--JQuerry 2.1.1-->
		<script src="JS/jquery.min.js"></script>
		
		<!--JQuerry Mobile 1.4.2-->
		<script src="JS/jqueryMobile/jquery.mobile-1.4.2.min.js"></script>
		
		<!--Main.js file-->
		<script src="JS/main.js"></script>
		
		<!--For Raty-->
		<script type="text/javascript" src="JS/jquery.raty.min.js"></script>
		
		<!--Raty config-->
		<script type="text/javascript" src="JS/profile_rating.js"></script>
		
		<!--Schedule.js for generating days-->
		<script type="text/javascript" src="JS/schedule.js"></script>
	</head>
	
	<body onload = "initalize()">

	<div data-role="page" id = "home">
    <div data-role="header" class="ui-title">
		<h1><img src = "JS\jqueryMobile\images\icons-png\home-white.png" height =14em alt = "Home Icon"> Home</h1>
			<a href="#mypanel" data-role="button" class="ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars">Home</a>
    </div>
    
	<!-- TEST PAGE FOR CARDS -->
	
	<h1>You have new notifications!</h1>
        
		<div id = "card_gen">
			<script> genCard();
			</script>
        </div>
	
	<!-- END OF TEST PAGE FOR CARDS -->
	
	<div data-role="main" class="ui-content ui-group-theme-a">
			<a href = "#showRoutes">Show routes</a>
		<div class="card_container">
			<div class="thumbnail"> <img src = "images/thumbnails/nickcage.jpg" width = 72px alt = "oneTrueGod"> </div>
			
			<div class="card_content">
				<p>Sir Cage wants to give you a ride on Monday!Sir Cage wants to give you a ride on Monday!</p>
			</div>
				<!--Decline Button-->
				<a href="#myPopup2" data-rel="button" class="ui-btn-b ui-btn ui-btn-right ui-nodisc-icon ui-btn-icon-notext ui-mini ui-icon-delete"></a>
		</div>
		
		<div class="card_container">
			<div class="thumbnail"> <img src = "images/thumbnails/nickcage.jpg" width = 72px alt = "oneTrueGod"> </div>
			
			<div class="card_content">
				<p>Sir Cage wants to give you a ride on Monday!Sir Cage wants to give you a ride on Monday!</p>
			</div>
				<!--Decline Button-->
				<a href="#myPopup2" data-rel="button" class="ui-btn-b ui-btn ui-btn-right ui-nodisc-icon ui-btn-icon-notext ui-mini ui-icon-delete"></a>
		</div>
		
		<div class="card_container">
			<div class="thumbnail"> <img src = "images/thumbnails/nickcage.jpg" width = 72px alt = "oneTrueGod"> </div>
			
			<div class="card_content">
				<p>Sir Cage wants to give you a ride on Monday!Sir Cage wants to give you a ride on Monday!</p>
			</div>
				<!--Decline Button-->
				<a href="#myPopup2" data-rel="button" class="ui-btn-b ui-btn ui-btn-right ui-nodisc-icon ui-btn-icon-notext ui-mini ui-icon-delete"></a>
		</div>
				
	</div> 
	</div>
	
<div data-role = "page" id = "findMatches">
	<div data-role = "header">
		<a href="#mypanel" data-role="button" class="ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars">Home</a>
		<h1><img src="JS\jqueryMobile\images\icons-png\search-white.png" height =14em alt = "Search Icon"> Find Matches</h1>
	</div>
    
    <div data-role = "main" class = "ui-content">
        <p>What day are you looking for specifically?</p>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide" onclick = "setDate('monday')">Monday</a>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide" onclick = "setDate('tuesday')">Tuesday</a>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide" onclick = "setDate('wednesday')">Wednesday</a>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide" onclick = "setDate('thursday')">Thursday</a>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide" onclick = "setDate('friday')">Friday</a>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide" onclick = "setDate('saturday')">Saturday</a>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide" onclick = "setDate('sunday')">Sunday</a>
    </div>
</div>	
<div data-role = "page" id ="findMatches2">
	<div data-role = "header">
		<a href="#mypanel" data-role="button" class="ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars">Home</a>
		<a data-rel="back" class = "headerAlignRight">Back</a>
		<h1><img src="JS\jqueryMobile\images\icons-png\search-white.png" height =14em alt = "Search Icon"> Find Matches</h1>
	</div>
    <div data-role = "main" class = "ui-content">
        <fieldset data-role="controlgroup" data-type="horizontal">
            <legend>Arrival or Departure from BCIT?</legend>
            <input type="radio" name="direction" id="arrival" checked="checked" value = "arrival" onclick = "grabMarkers()">
            <label for="arrival">Arrival</label>
            <input type="radio" name="direction" id="departure" value = "departure" onclick = "grabMarkers()"> 
            <label for="departure">Departure</label>
        </fieldset>
        <div id="map-canvas"></div>
        <h1>Recommendations</h1>
        <div id = "recommendations">

        </div>
    </div>
</div>
		


		<div data-role="page" id="myRideSchedule">
		  <div data-role="header">
		    <h1><img src = "JS\jqueryMobile\images\icons-png\calendar-white.png" height =14em alt = "Home Icon"> My Schedule</h1>
			<a href="#mypanel" data-role="button" class="ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars">Home</a>
		  </div>

		  <div data-role="main" class="ui-content">
		    <form method="post"> 
		<fieldset data-role="controlgroup" data-type="horizontal">
		<!--add data-type="horizontal" for different view-->
		    <legend>Role:</legend>
		      <label for="driver">Driver</label>
		      <input type="radio" name="role" id="driver" value="0">
		      <label for="passenger">Passenger</label>
		      <input type="radio" name="role" id="passenger" value="1">
		  </fieldset>
		  <fieldset data-role="controlgroup">
		    <legend>Days:</legend>
		      <label for="mondayC">Monday</label>
		      <input type="checkbox" name="rideday" id="mondayC" value="monday">
		      <label for="tuesdayC">Tuesday</label>
		      <input type="checkbox" name="rideday" id="tuesdayC" value="tuesday">
		      <label for="wednesdayC">Wednesday</label>
		      <input type="checkbox" name="rideday" id="wednesdayC" value="wednesday">
		      <label for="thursdayC">Thursday</label>
		      <input type="checkbox" name="rideday" id="thursdayC" value="thursday">
		      <label for="fridayC">Friday</label>
		      <input type="checkbox" name="rideday" id="fridayC" value="friday">
		      <label for="saturdayC">Saturday</label>
		      <input type="checkbox" name="rideday" id="saturdayC" value="saturday">
		      <label for="sundayC">Sunday</label>
		      <input type="checkbox" name="rideday" id="sundayC" value="sunday">
		  </fieldset>
		  <!--css to right-->
		  <div id="errorM"></div><div id="errorA"></div>
		      <a href="#schedule" id="changeMe" data-inline="true" data-icon="arrow-r" onclick="return radioCheck()" data-iconpos="right"data-role="button">Next</a> 
		    </form>
		    <!--end of content-->
		  </div>
		</div> 

		<div data-role="page" id="schedule">
			<div data-role="header">
			<a href="#mypanel" data-role="button" class="ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars">Home</a>
		    <fieldset data-role="controlgroup" data-type="horizontal"> <div id="header_schedule"></div></fieldset>
		  </div>

		  <div data-role="main" class="ui-content">
		  <div id="day"></div>
		    <form method="post"> 
		<fieldset data-role="controlgroup" data-type="horizontal">
		<!--add data-type="horizontal" for different view-->
		    <legend>Arrival:</legend>
		      <select name="hour" id="hour1" data-inline="true">
		      <option value=""></option>
		      <option value="1">1</option>
		      <option value="2">2</option>
		      <option value="3">3</option>
		      <option value="4">4</option>
		      <option value="5">5</option>
		      <option value="6">6</option>
		      <option value="7">7</option>
		      <option value="8">8</option>
		      <option value="9">9</option>
		      <option value="10">10</option>
		      <option value="11">11</option>
		      <option value="0">12</option>
		   </select>
		      <select name="minute" id="minute" data-inline="true">
		      <option value=""></option>
		      <option value=":00">:00</option>
		      <option value=":05">:05</option>
		      <option value=":10">:10</option>
		      <option value=":15">:15</option>
		      <option value=":20">:20</option>
		      <option value=":25">:25</option>
		      <option value=":30">:30</option>
		      <option value=":35">:35</option>
		      <option value=":40">:40</option>
		      <option value=":45">:45</option>
		      <option value=":50">:50</option>
		      <option value=":55">:55</option>
		   </select>
		   <select name="am" id="am" data-inline="true">
		      <option value="am">AM</option>
		      <option value="pm">PM</option>
		     </select>

		  </fieldset>
		  <fieldset data-role="controlgroup" data-type="horizontal">
		<!--add data-type="horizontal" for different view-->
		    <legend>Departure:</legend>
		      <select name="hour" id="dephour" data-inline="true">
		      <option value=""></option>
		      <option value="1">1</option>
		      <option value="2">2</option>
		      <option value="3">3</option>
		      <option value="4">4</option>
		      <option value="5">5</option>
		      <option value="6">6</option>
		      <option value="7">7</option>
		      <option value="8">8</option>
		      <option value="9">9</option>
		      <option value="10">10</option>
		      <option value="11">11</option>
		      <option value="12">12</option>
		   </select>
		      <select name="minute" id="depminute" data-inline="true">
		      <option value=""></option>
		      <option value=":00">:00</option>
		      <option value=":05">:05</option>
		      <option value=":10">:10</option>
		      <option value=":15">:15</option>
		      <option value=":20">:20</option>
		      <option value=":25">:25</option>
		      <option value=":30">:30</option>
		      <option value=":35">:35</option>
		      <option value=":40">:40</option>
		      <option value=":45">:45</option>
		      <option value=":50">:50</option>
		      <option value=":55">:55</option>   
		   </select>
		   <select name="am" id="depam" data-inline="true">
		      <option value="am">AM</option>
		      <option value="pm">PM</option>
		      </select>
		  </fieldset>
		  <fieldset data-role="controlgroup" data-type="horizontal">
		<!--add data-type="horizontal" for different view-->
		    <legend>Role:</legend>
		      <label for="driver1">Driver</label>
		      <input type="radio" name="role" id="driver1" checked value="0">
		      <label for="passenger1">Passenger</label>
		      <input type="radio" name="role" id="passenger1" value="1">

		  </fieldset>
		        <label for="area">Location:</label>
		  <fieldset data-inline="true">
    		<input type="text" name="location" columns="10"  id="address" value="" ><input data-role="button" type="button" value="Set Location" onclick="codeAddress()">
    		</fieldset>
		  <div id="goodMap"></div>
		      <input type="button" id="next" data-role="button" onclick="submitFiles();dayChange(1)" value="Next">
		      

		        
		        <!--Change to next page-->
		        
		      </form>
		  </div>
		</div> 
		
		<!-- My Profile-->
		<?php include './php/myprofile.php';?>
		<?php include './php/myschedule.php';?> 
		<div data-role="page" id = "myProfile">
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
		</div>
		
		<!-- Their Profile-->
		<div data-role="page" id = "profile"></div>
		
   <div data-role="page" id="showRoutes">
        <div data-role="header">
            <a class="ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars"
            data-role="button" href="#mypanel">Home</a>

            <h1>Route</h1>
        </div>

        <div class="ui-content" data-role="main">
            <fieldset data-role="controlgroup" data-type="horizontal">
                <input checked="checked" id="showmap" name="showType" onclick=
                "showMap()" type="radio" value="showmap"> <label for=
                "showmap">Map</label> <input id="showDirections" name=
                "showType" onclick="showDirections()" type="radio" value=
                "showDirections"> <label for="showDirections">Directions</label>
            </fieldset>
            <div id="mapcanvas3"></div>
            <div id="directions-panel"></div>
        </div>
    </div>
</body>
</html>
