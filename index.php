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
    <h1>Welcome To My Homepage</h1>
    <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
    </div>
    
  <div data-role="main" class="ui-content">
    <p>I Am Now A Mobile Developer!!</p>
   

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
