<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="JS/jqueryMobile/jquery.mobile-1.4.2.css">
<link rel="stylesheet" href="style/style.css">
<script src="JS/jquery.min.js"></script>
<script src="JS/jqueryMobile/jquery.mobile-1.4.2.min.js"></script>
<script src="JS/main.js"></script>
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
    <input type = "button" onclick = "grabMarkers()" value = "Add Marker">
    </div>
    <div data-role="page" id="myRideSchedule">
  <div data-role="header">
    <h1>My Ride Schedule</h1>
    <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
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
      <a href="#monday" id="changeMe" data-inline="true" data-icon="arrow-r" onclick="return radioCheck()"data-iconpos="right"data-role="button">Next</a> 
    </form>
    <!--end of content-->
  </div>

  <div data-role="footer">
    <!--end of footer-->
  </div>
  <!--end of page-->
</div> 

<div data-role="page" id="monday">
  <div data-role="header">
  <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
    <fieldset data-role="controlgroup" data-type="horizontal"> <div id="head1"></div></fieldset>
  </div>

  <div data-role="main" class="ui-content">
  <div id="dayjs"><h4> Day - Monday</div>
    <form method="post"> 
<fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Arrival:</legend>
      <select name="hour" id="hour1" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
     </select>

  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Departure:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
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


        
        <!--Change to next page-->
        
      </form>
  </div>

  <div data-role="footer">
    <!--<h1>Insert Footer Text Here</h1>-->
  </div>
</div> 
</div>

<div data-role="page" id="tuesday">
  <div data-role="header">
  <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
  <fieldset data-role="controlgroup" data-type="horizontal"><div id="head2"></div></fieldset>
  </div>

  <div data-role="main" class="ui-content">
  <div id="dayjs"><h4> Day - Tuesday</div>
    <form method="post"> 
<fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Arrival:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
     </select>

  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Departure:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
      </select>
  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Role:</legend>
      <label for="driver2">Driver</label>
      <input type="radio" name="role" id="driver2" checked value="driver">
      <label for="passenger2">Passenger</label>
      <input type="radio" name="role" id="passenger2" value="passenger">
  </fieldset>

    </form>
  </div>

  <div data-role="footer">
    <!--<h1>Insert Footer Text Here</h1>-->
  </div>
</div> 
</div>
<div data-role="page" id="wednesday">
  <div data-role="header">
  <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
    <fieldset data-role="controlgroup" data-type="horizontal"><div id="head3"></div></fieldset>
  </div>

  <div data-role="main" class="ui-content">
  <div id="days"><h4> Day - Wednesday</div>
    <form method="post"> 
<fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Arrival:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
     </select>

  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Departure:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
      </select>
  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Role:</legend>
      <label for="driver3">Driver</label>
      <input type="radio" name="role" id="driver3" checked value="driver">
      <label for="passenger3">Passenger</label>
      <input type="radio" name="role" id="passenger3" value="passenger">
  </fieldset>
    </div>
    </form>
  </div>

  <div data-role="footer">
    <!--<h1>Insert Footer Text Here</h1>-->
  </div>
</div> 
<div data-role="page" id="thursday">
  <div data-role="header">
  <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
    <fieldset data-role="controlgroup" data-type="horizontal"><div id="head4"></div></fieldset>
  </div>

  <div data-role="main" class="ui-content">
  <div id="dayjs"><h4> Day - Thursday</div>
    <form method="post"> 
<fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Arrival:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
     </select>

  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Departure:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
      </select>
  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Role:</legend>
      <label for="driver4">Driver</label>
      <input type="radio" name="role" id="driver4" checked value="driver">
      <label for="passenger4">Passenger</label>
      <input type="radio" name="role" id="passenger4" value="passenger">
  </fieldset>
    </div>
    </form>
  </div>

  <div data-role="footer">
    <!--<h1>Insert Footer Text Here</h1>-->
  </div>
</div> 
<div data-role="page" id="friday">
  <div data-role="header">
  <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
  
    <fieldset data-role="controlgroup" data-type="horizontal"><div id="head5"></div></fieldset>
  </div>

  <div data-role="main" class="ui-content">
  <div id="dayjs"><h4> Day - Friday</div>
    <form method="post"> 
<fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Arrival:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
     </select>

  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Departure:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
      </select>
  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Role:</legend>
      <label for="driver5">Driver</label>
      <input type="radio" name="role" id="driver5" checked value="driver">
      <label for="passenger5">Passenger</label>
      <input type="radio" name="role" id="passenger5" value="passenger">
  </fieldset>
    </form>
  </div>

  <div data-role="footer">
    <!--<h1>Insert Footer Text Here</h1>-->
  </div>
</div> 
</div>
<div data-role="page" id="saturday">
  <div data-role="header">
  <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
    <fieldset data-role="controlgroup" data-type="horizontal"><div id="head6"></div></fieldset>
  </div>

  <div data-role="main" class="ui-content">
  <div id="dayjs"><h4> Day - Saturday</div>
    <form method="post"> 
<fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Arrival:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
     </select>

  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Departure:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
      </select>
  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Role:</legend>
      <label for="driver6">Driver</label>
      <input type="radio" name="role" id="driver6" checked value="driver">
      <label for="passenger6">Passenger</label>
      <input type="radio" name="role" id="passenger6" value="passenger">
  </fieldset>
    </div>
    </form>
  </div>

  <div data-role="footer">
    <!--<h1>Insert Footer Text Here</h1>-->
  </div>
</div> 
<div data-role="page" id="sunday">
  <div data-role="header">
  <a href="#mypanel" data-role="button" class = "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all">Home</a>
    <fieldset data-role="controlgroup" data-type="horizontal"><div id="head7"></div></fieldset>
  </div>

  <div data-role="main" class="ui-content">
  <div id="dayjs"><h4> Day - Sunday</div>
    <form method="post"> 
<fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Arrival:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
     </select>

  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Departure:</legend>
      <select name="hour" id="hour" data-inline="true">
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
      <select name="minute" id="minute" data-inline="true">
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
   <select name="am" id="am" data-inline="true">
      <option value="am">AM</option>
      <option value="pm">PM</option>
      </select>
  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
<!--add data-type="horizontal" for different view-->
    <legend>Role:</legend>
      <label for="driver7">Driver</label>
      <input type="radio" name="role" id="driver7" checked value="driver">
      <label for="passenger7">Passenger</label>
      <input type="radio" name="role" id="passenger7" value="passenger">
  </fieldset>
      <input type="submit" data-inline="true" value="Submit"/>
      <!--insert submit--> 

    </form>
  </div>

  <div data-role="footer">
    <!--<h1>Insert Footer Text Here</h1>-->
  </div>
</div> 
</div>
</body>
</html>
