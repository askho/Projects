<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style/style.css">
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
		<h1><img src = "JS\jqueryMobile\images\icons-png\home-white.png" width =16em alt = "Home Icon">HOME</h1>
			<a href="#mypanel" data-role="button" class="ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars">Home</a>
    </div>
    
	<div data-role="main" class="ui-content ui-group-theme-a">
			<p>You have [2] new notifications.</p>
		<div class="card_container">
			<div class="thumbnail"> <img src = "images/thumbnails/nickcage.jpg" width = 72px alt = "oneTrueGod"> </div>
			<div class="card_content">  
				Sir Cage wants to give you a ride on Monday!
				<div class="btn_container">
				<!---Accept Button--->
				<a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline">Accept</a>
					<div data-role="popup" id="myPopup">
						<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
							<p>Accepted. <b>Nick Cage</b> has been notified.</p>
					</div>
				<!---Decline Button--->
				<a href="#myPopup2" data-rel="popup" class="ui-btn ui-btn-inline">Decline</a>
					<div data-role="popup" id="myPopup2">
						<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>	
							<p>Declined. <b>Nick Cage</b> has been notified.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class = "card_container">
			<div class="thumbnail"> <img src = "images/thumbnails/nickcage.jpg" width = 72px alt = "oneTrueGod"> </div>
			<div class="card_content">
				Sir Cage declined your request for a ride for Wednesday.
				<div class="btn_container">				
				<a href="#" class="button ui-btn ui-btn-inline">Dismiss</a>
				<!--Closes notifcations on click of button-->
				<script>
					$( ".ui-btn").click(function() {
					  $(this).closest( ".card_container" ).remove();
					});
				</script>
				</div>
			</div>
			</div>
		</div>
	</div> 
	
		<div data-role = "page" id = "findMatches">
			<div data-role = "header">
				<a href="#mypanel" data-role="button" class="ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars">Home</a>
				<h1>Find Matches</h1>
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
				<h1>Find Matches</h1>
			</div>
			<div data-role = "main" class = "ui-content">
				<div id="map-canvas"></div>
				<h1>Recommendations</h1>
				<div class = "match">
				<img src = "images/thumbnails/nickcage.jpg" alt = "oneTrueGod">
					Nick Cage:
					<br />
					Address: 1111 Burnaby Hill
				</div>
						<div class = "match">
				<img src = "images/thumbnails/nickcage.jpg" alt = "oneTrueGod">
					Nick Cage:
					<br />
					Address: 1111 Burnaby Hill
				</div>
						<div class = "match">
				<img src = "images/thumbnails/nickcage.jpg" alt = "oneTrueGod">
					Nick Cage:
					<br />
					Address: 1111 Burnaby Hill
				</div>
				<div class = "match">
				<img src = "images/thumbnails/nickcage.jpg" alt = "oneTrueGod">
					Nick Cage:
					<br />
					Address: 1111 Burnaby Hill
				</div>
			</div>
			<input type = "button" onclick = "grabMarkers()" value = "Add Marker">
		</div>
		


		<div data-role="page" id="myRideSchedule">
		  <div data-role="header">
		    <h1>My Ride Schedule</h1>
			<h1><img src = "JS\jqueryMobile\images\icons-png\home-white.png" width =16em alt = "Home Icon">HOME</h1>
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

		  <div data-role="footer">
		    <!--end of footer-->
		  </div>
		  <!--end of page-->
		</div> 

		<div data-role="page" id="schedule">
		  <div data-role="header">
		  <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
		    <fieldset data-role="controlgroup" data-type="horizontal"> <div id="head1"></div></fieldset>
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
		      <option value="00">:00</option>
		      <option value="05">:05</option>
		      <option value="10">:10</option>
		      <option value="15">:15</option>
		      <option value="20">:20</option>
		      <option value="25">:25</option>
		      <option value="30">:30</option>
		      <option value="35">:35</option>
		      <option value="40">:40</option>
		      <option value="45">:45</option>
		      <option value="50">:50</option>
		      <option value="55">:55</option>
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
		      <option value="0">:00</option>
		      <option value="5">:05</option>
		      <option value="10">:10</option>
		      <option value="15">:15</option>
		      <option value="20">:20</option>
		      <option value="25">:25</option>
		      <option value="30">:30</option>
		      <option value="35">:35</option>
		      <option value="40">:40</option>
		      <option value="45">:45</option>
		      <option value="50">:50</option>
		      <option value="55">:55</option>   
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
		      <div id="map1"></div>
		      <div id="submit1"> </div>

		        
		        <!--Change to next page-->
		        
		      </form>
		  </div>

		  <div data-role="footer">
		    <!--<h1>Insert Footer Text Here</h1>-->
		  </div>
		</div> 
		
		<!-- My Profile-->
		<div data-role="page" id = "myProfile">
		
			<div data-role="header">
				<h1>My Profile</h1>
				<a href="#mypanel" data-role="button" class="ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars">Home</a>
			</div>
			
			<div data-role="main" class="ui-content">
				<img src="images\thumbnails\nickcage.jpg" alt="Profile Picture" width="100">
				<h1>Profile Name</h1>
				<h2>Contact Information</h2>
				<p>Email: FakerbestmidNA@gmail.com</p>
				<p>Phone: 604-511-1245</p>
				
				<!-- This is the rating bar for profiles -->
				<div id="user_rating" class="star"></div>
				
				<!--Schedule Tables-->
				
				<!--Monday-->
				<div data-role="collapsible">
					<h2>Monday</h2>
					<table data-role="table" class="ui-responsive">
						<thead>
							<tr>
								<td>Role</td>
								<td>Starting</td>
								<td>&nbsp</td>
								<td>Arrival</td>
								<td>Departure</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Driver</td>
								<td>3396 Wilkie Avenue</td>
								<td>Coquitlam, BC</td>
								<td>8:00am</td>
								<td>5:30pm</td>
							</tr>
						</tbody>
					</table>
					<p>Additional information:</p>
					<p>Please no smokers</p>
					 <div data-role="main" class="ui-content">
						<a href="#" class="ui-btn">Send Request</a>
					</div>
				</div>
				
				<!--Tuesday-->
				<div data-role="collapsible">
					<table data-role="table" class="ui-responsive">
						<thead>
							<tr>
								<td>Role</td>
								<td>Starting</td>
								<td>&nbsp</td>
								<td>Arrival</td>
								<td>Departure</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Driver</td>
								<td>3396 Wilkie Avenue</td>
								<td>Coquitlam, BC</td>
								<td>8:00am</td>
								<td>5:30pm</td>
							</tr>
						</tbody>
					</table>
					<p>Additional information:</p>
					<p>Please no smokers</p>
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
								<td>Role</td>
								<td>Starting</td>
								<td>&nbsp</td>
								<td>Arrival</td>
								<td>Departure</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Driver</td>
								<td>3396 Wilkie Avenue</td>
								<td>Coquitlam, BC</td>
								<td>8:00am</td>
								<td>5:30pm</td>
							</tr>
						</tbody>
					</table>
					<p>Additional information:</p>
					<p>Please no smokers</p>
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
								<td>Role</td>
								<td>Starting</td>
								<td>&nbsp</td>
								<td>Arrival</td>
								<td>Departure</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Driver</td>
								<td>3396 Wilkie Avenue</td>
								<td>Coquitlam, BC</td>
								<td>8:00am</td>
								<td>5:30pm</td>
							</tr>
						</tbody>
					</table>
					<p>Additional information:</p>
					<p>Please no smokers</p>
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
								<td>Role</td>
								<td>Starting</td>
								<td>&nbsp</td>
								<td>Arrival</td>
								<td>Departure</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Driver</td>
								<td>3396 Wilkie Avenue</td>
								<td>Coquitlam, BC</td>
								<td>8:00am</td>
								<td>5:30pm</td>
							</tr>
						</tbody>
					</table>
					<p>Additional information:</p>
					<p>Please no smokers</p>
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
								<td>Role</td>
								<td>Starting</td>
								<td>&nbsp</td>
								<td>Arrival</td>
								<td>Departure</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Driver</td>
								<td>3396 Wilkie Avenue</td>
								<td>Coquitlam, BC</td>
								<td>8:00am</td>
								<td>5:30pm</td>
							</tr>
						</tbody>
					</table>
					<p>Additional information:</p>
					<p>Please no smokers</p>
					 <div data-role="main" class="ui-content">
						<a href="#" class="ui-btn">Send Request</a>
					</div>
				</div>
				
				
				<!--Comments-->
				<h1>Comments</h1>
				<!--Tap to load?-->
				<!--Load 5 at a time, tap to view more?-->
				<div data-role="main" class="ui-content">
					<h3><img src="images\thumbnails\nickcage.jpg" alt="Profile Picture" width="40">Jack Smith</h3>
					<p>May 16, 2019</p>
					<p>This guy is literally late every single time. I have been 10 minutes late at best and over half an hour at worst</p>
				</div>
				
				<div data-role="main" class="ui-content">
					<h3><img src="images\thumbnails\nickcage.jpg" alt="Profile Picture" width="40">Nick Cage</h3>
					<p>May 16, 2019</p>
					<p>This guy is literally late every single time. I have been 10 minutes late at best and over half an hour at worst</p>
				</div>				
			</div>	
		</div>

</body>
</html>
