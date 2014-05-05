<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="JS/jqueryMobile/jquery.mobile-1.4.2.css">
<link rel="stylesheet" href="style/style.css">
<script src="JS/jquery.min.js"></script>
<script src="JS/jqueryMobile/jquery.mobile-1.4.2.min.js"></script>
<script src="JS/main.js"></script>
<script>
function addMarker() {
    marker.setMap(map);
    alert("Hello");
}
    </script>
</head>
<body onload = "initalize()">
  

    
<div data-role="page" id = "home">

    <div data-role="header">
    <h1>Home</h1>
    <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
    </div>
    
  <div data-role="main" class="ui-content">
    <p>You have [2] new notifications.</p>
	<div class = "match">
        <img src = "images/thumbnails/nickcage.jpg" alt = "oneTrueGod">
            Sir Cage wants to give you a ride on Monday, Tuesday, and Thursday!
            <br />
    
	<!---Accept Button--->
	<a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">Accept</a>
    
		<div data-role="popup" id="myPopup">
			<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
      <p>Accepted. <b>Nick Cage</b> has been notified.</p>
    </div>
	<!---Decline Button--->
	<a href="#myPopup2" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">Decline</a>
    
		<div data-role="popup" id="myPopup2">
		<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
      <p>Declined. <b>Nick Cage</b> has been notified.</p>
    </div>
	
    </div>
	
	<div class = "match">
        <img src = "images/thumbnails/nickcage.jpg" alt = "oneTrueGod">
            Sir Cage declined your request for a ride on Wednesday.
            <br /><br />
            Sorry, I don't have class on that day.
		<a href="#" class="ui-btn ui-btn-inline ui-shadow ui-btn-right">Dismiss</a>
    </div>
	

    </div>

  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div>

<div data-role = "page" id = "findMatches">
    <div data-role = "header">
        <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
        <h1>Find Matches</h1>
    </div>
    
    <div data-role = "main" class = "ui-content">
        <p>What day are you looking for specifically?</p>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide">Monday</a>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide">Tuesday</a>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide">Wednesday</a>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide">Thursday</a>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide">Friday</a>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide">Saturday</a>
            <a href="#findMatches2" class="ui-btn ui-shadow" data-transition="slide">Sunday</a>
    </div>
</div>
<div data-role = "page" id ="findMatches2">
    <div data-role = "header">
        <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
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
</div>
	
<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>BCIT Ride Share</h1>
  </div>

  <div data-role="main" class="ui-content">
    <p>Hello</p>
	<a href="#pagetwo" class="ui-btn" data-transition="slide">Sign In</a>
    <a href="#pagetwo" class="ui-btn" data-transition="slide">Register</a>
  </div>
  
  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div>

<div data-role="page" id="pagetwo">
  <div data-role="header">
    <h1>BCIT Ride Share Page Two</h1>
  </div>

  <div data-role="main" class="ui-content">
    <p>Welcome to the Home Page</p>
	
	<a href="#pageone" class="ui-btn">Back to Landing</a>
  </div>
  

  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div>
</body>
</html>
