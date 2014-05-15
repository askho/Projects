<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="style/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>BCIT Ride Share</title><!--Open Sans Font Import-->
    <link href=
    'http://fonts.googleapis.com/css?family=Open+Sans:300italic,300,400,700'
    rel='stylesheet' type='text/css'><!--CSS-->
    <link href="JS/jqueryMobile/jquery.mobile-1.4.2.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet"><!--SCRIPTS-->
    <!--JQuerry 2.1.1-->

    <script src="JS/jquery.min.js"></script><!--JQuerry Mobile 1.4.2-->

    <script src="JS/jqueryMobile/jquery.mobile-1.4.2.min.js"></script><!--Main.js file-->

    <script src="JS/main.js"></script><!--For Raty-->

    <script src="JS/jquery.raty.min.js" type="text/javascript"></script><!--Raty config-->

    <script src="JS/profile_rating.js" type="text/javascript"></script><!--Schedule.js for generating days-->

    <script src="JS/schedule.js" type="text/javascript"></script>
</head>

<body onload="initalize()">
    <div data-role="page" id="home">
        <div class="ui-title" data-role="header">
            <h1><img alt="Home Icon" src=
            "JS/jqueryMobile/images/icons-png/home-white.png" width=
            "16em">HOME</h1><a class=
            "ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars" data-role=
            "button" href="#mypanel">Home</a>
        </div>

        <div class="ui-content ui-group-theme-a" data-role="main">
            <p>You have [2] new notifications.</p>
            <a href="#showRoutes">Show route</a>
            <div class="card_container">
                <div class="thumbnail"><img alt="oneTrueGod" src=
                "images/thumbnails/nickcage.jpg" width="72px"></div>

                <div class="card_content">
                    Sir Cage wants to give you a ride on Monday!

                    <div class="btn_container">
                        <!--Accept Button-->
                        <a class="ui-btn ui-btn-inline" data-rel="popup" href=
                        "#myPopup">Accept</a>

                        <div data-role="popup" id="myPopup">
                            <a class=
                            "ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right"
                            data-rel="back" href="#">Close</a>

                            <p>Accepted. <b>Nick Cage</b> has been
                            notified.</p>
                        </div><!--Decline Button-->
                        <a class="ui-btn ui-btn-inline" data-rel="popup" href=
                        "#myPopup2">Decline</a>

                        <div data-role="popup" id="myPopup2">
                            <a class=
                            "ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right"
                            data-rel="back" href="#">Close</a>

                            <p>Declined. <b>Nick Cage</b> has been
                            notified.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card_container">
                <div class="thumbnail"><img alt="oneTrueGod" src=
                "images/thumbnails/nickcage.jpg" width="72px"></div>

                <div class="card_content">
                    Sir Cage declined your request for a ride for Wednesday.

                    <div class="btn_container">
                        <a class="button ui-btn ui-btn-inline" href=
                        "#">Dismiss</a> 
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

    <div data-role="page" id="findMatches">
        <div data-role="header">
            <a class="ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars"
            data-role="button" href="#mypanel">Home</a>

            <h1>Find Matches</h1>
        </div>

        <div class="ui-content" data-role="main">
            <p>What day are you looking for specifically?</p><a class=
            "ui-btn ui-shadow" data-transition="slide" href="#findMatches2"
            onclick="setDate('monday')">Monday</a> <a class="ui-btn ui-shadow"
            data-transition="slide" href="#findMatches2" onclick=
            "setDate('tuesday')">Tuesday</a> <a class="ui-btn ui-shadow"
            data-transition="slide" href="#findMatches2" onclick=
            "setDate('wednesday')">Wednesday</a> <a class="ui-btn ui-shadow"
            data-transition="slide" href="#findMatches2" onclick=
            "setDate('thursday')">Thursday</a> <a class="ui-btn ui-shadow"
            data-transition="slide" href="#findMatches2" onclick=
            "setDate('friday')">Friday</a> <a class="ui-btn ui-shadow"
            data-transition="slide" href="#findMatches2" onclick=
            "setDate('saturday')">Saturday</a> <a class="ui-btn ui-shadow"
            data-transition="slide" href="#findMatches2" onclick=
            "setDate('sunday')">Sunday</a>
        </div>
    </div>

    <div data-role="page" id="findMatches2">
        <div data-role="header">
            <a class="ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars"
            data-role="button" href="#mypanel">Home</a> <a class=
            "headerAlignRight" data-rel="back">Back</a>

            <h1>Find Matches</h1>
        </div>

        <div class="ui-content" data-role="main">
            <fieldset data-role="controlgroup" data-type="horizontal">
                <legend>Arrival or Departure from BCIT?</legend>
                <input checked="checked" id="arrival" name="direction" onclick=
                "grabMarkers()" type="radio" value="arrival"> <label for=
                "arrival">Arrival</label> <input id="departure" name=
                "direction" onclick="grabMarkers()" type="radio" value=
                "departure"> <label for="departure">Departure</label>
            </fieldset>

            <div id="map-canvas"></div>

            <h1>Recommendations</h1>

            <div id="recommendations"></div>
        </div>
    </div>

    <div data-role="page" id="myRideSchedule">
        <div data-role="header">
            <h1>My Ride Schedule</h1><a class=
            "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all"
            data-role="button" href="#mypanel">Home</a>
        </div>

        <div class="ui-content" data-role="main">
            <form method="post">
                <fieldset data-role="controlgroup" data-type="horizontal">
                    <!--add data-type="horizontal" for different view-->
                    <legend>Role:</legend> <label for="driver">Driver</label>
                    <input id="driver" name="role" type="radio" value="0">
                    <label for="passenger">Passenger</label> <input id=
                    "passenger" name="role" type="radio" value="1">
                </fieldset>

                <fieldset data-role="controlgroup">
                    <legend>Days:</legend> <label for="mondayC">Monday</label>
                    <input id="mondayC" name="rideday" type="checkbox" value=
                    "monday"> <label for="tuesdayC">Tuesday</label> <input id=
                    "tuesdayC" name="rideday" type="checkbox" value="tuesday">
                    <label for="wednesdayC">Wednesday</label> <input id=
                    "wednesdayC" name="rideday" type="checkbox" value=
                    "wednesday"> <label for="thursdayC">Thursday</label>
                    <input id="thursdayC" name="rideday" type="checkbox" value=
                    "thursday"> <label for="fridayC">Friday</label> <input id=
                    "fridayC" name="rideday" type="checkbox" value="friday">
                    <label for="saturdayC">Saturday</label> <input id=
                    "saturdayC" name="rideday" type="checkbox" value=
                    "saturday"> <label for="sundayC">Sunday</label> <input id=
                    "sundayC" name="rideday" type="checkbox" value="sunday">
                </fieldset><!--css to right-->

                <div id="errorM"></div>

                <div id="errorA"></div><a data-icon="arrow-r" data-iconpos=
                "right" data-inline="true" data-role="button" href="#schedule"
                id="changeMe" onclick="return radioCheck()">Next</a>
            </form><!--end of content-->
        </div>

        <div data-role="footer">
            <!--end of footer-->
        </div><!--end of page-->
    </div>

    <div data-role="page" id="schedule">
        <div data-role="header">
            <a class=
            "ui-nodisc-icon ui-alt-icon ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all"
            data-role="button" href="#mypanel">Home</a>

            <fieldset data-role="controlgroup" data-type="horizontal">
                <div id="head1"></div>
            </fieldset>
        </div>

        <div class="ui-content" data-role="main">
            <div id="day"></div>
            
            <form method="post">
                <fieldset data-role="controlgroup" data-type="horizontal">
                    <!--add data-type="horizontal" for different view-->
                    <legend>Arrival:</legend> <select data-inline="true" id=
                    "hour1" name="hour">
                        <option value="1">
                            1
                        </option>

                        <option value="2">
                            2
                        </option>

                        <option value="3">
                            3
                        </option>

                        <option value="4">
                            4
                        </option>

                        <option value="5">
                            5
                        </option>

                        <option value="6">
                            6
                        </option>

                        <option value="7">
                            7
                        </option>

                        <option value="8">
                            8
                        </option>

                        <option value="9">
                            9
                        </option>

                        <option value="10">
                            10
                        </option>

                        <option value="11">
                            11
                        </option>

                        <option value="0">
                            12
                        </option>
                    </select> <select data-inline="true" id="minute" name=
                    "minute">
                        <option value=":00">
                            :00
                        </option>

                        <option value=":05">
                            :05
                        </option>

                        <option value=":10">
                            :10
                        </option>

                        <option value=":15">
                            :15
                        </option>

                        <option value=":20">
                            :20
                        </option>

                        <option value=":25">
                            :25
                        </option>

                        <option value=":30">
                            :30
                        </option>

                        <option value=":35">
                            :35
                        </option>

                        <option value=":40">
                            :40
                        </option>

                        <option value=":45">
                            :45
                        </option>

                        <option value=":50">
                            :50
                        </option>

                        <option value=":55">
                            :55
                        </option>
                    </select> <select data-inline="true" id="am" name="am">
                        <option value="am">
                            AM
                        </option>

                        <option value="pm">
                            PM
                        </option>
                    </select>
                </fieldset>

                <fieldset data-role="controlgroup" data-type="horizontal">
                    <!--add data-type="horizontal" for different view-->
                    <legend>Departure:</legend> <select data-inline="true" id=
                    "dephour" name="hour">
                        <option value="1">
                            1
                        </option>

                        <option value="2">
                            2
                        </option>

                        <option value="3">
                            3
                        </option>

                        <option value="4">
                            4
                        </option>

                        <option value="5">
                            5
                        </option>

                        <option value="6">
                            6
                        </option>

                        <option value="7">
                            7
                        </option>

                        <option value="8">
                            8
                        </option>

                        <option value="9">
                            9
                        </option>

                        <option value="10">
                            10
                        </option>

                        <option value="11">
                            11
                        </option>

                        <option value="12">
                            12
                        </option>
                    </select> <select data-inline="true" id="depminute" name=
                    "minute">
                        <option value=":00">
                            :00
                        </option>

                        <option value=":05">
                            :05
                        </option>

                        <option value=":10">
                            :10
                        </option>

                        <option value=":15">
                            :15
                        </option>

                        <option value=":20">
                            :20
                        </option>

                        <option value=":25">
                            :25
                        </option>

                        <option value=":30">
                            :30
                        </option>

                        <option value=":35">
                            :35
                        </option>

                        <option value=":40">
                            :40
                        </option>

                        <option value=":45">
                            :45
                        </option>

                        <option value=":50">
                            :50
                        </option>

                        <option value=":55">
                            :55
                        </option>
                    </select> <select data-inline="true" id="depam" name="am">
                        <option value="am">
                            AM
                        </option>

                        <option value="pm">
                            PM
                        </option>
                    </select>
                </fieldset>

                <fieldset data-role="controlgroup" data-type="horizontal">
                    <!--add data-type="horizontal" for different view-->
                    <legend>Role:</legend> <label for="driver1">Driver</label>
                    <input checked id="driver1" name="role" type="radio" value=
                    "0"> <label for="passenger1">Passenger</label> <input id=
                    "passenger1" name="role" type="radio" value="1">
                </fieldset><input data-role="button" id="next" onclick=
                "submitFiles();dayChange(1)" type="button" value="Next">

                <div id="map1"></div><!--Change to next page-->
            </form>
        </div>

        <div data-role="footer">
            <!--<h1>Insert Footer Text Here</h1>-->
        </div>
    </div><!-- My Profile-->

    <div data-role="page" id="myProfile">
        <div data-role="header">
            <h1>My Profile</h1><a class=
            "ui-btn ui-btn-icon-notext ui-nodisc-icon ui-icon-bars" data-role=
            "button" href="#mypanel">Home</a>
        </div>

        <div class="ui-content" data-role="main">
            <img alt="Profile Picture" src="images/thumbnails/nickcage.jpg"
            width="100">

            <h1>Profile Name</h1>

            <h2>Contact Information</h2>

            <p>Email: FakerbestmidNA@gmail.com</p>

            <p>Phone: 604-511-1245</p>
            <!-- This is the rating bar for profiles -->

            <div class="star" id="user_rating"></div><!--Schedule Tables-->
            <!--Monday-->

            <div data-role="collapsible">
                <h2>Monday</h2>

                <table class="ui-responsive" data-role="table">
                    <thead>
                        <tr>
                            <td>Role</td>

                            <td>Starting</td>

                            <td>&nbsp;</td>

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

                <div class="ui-content" data-role="main">
                    <a class="ui-btn" href="#">Send Request</a>
                </div>
            </div><!--Tuesday-->

            <div data-role="collapsible">
                <table class="ui-responsive" data-role="table">
                    <thead>
                        <tr>
                            <td>Role</td>

                            <td>Starting</td>

                            <td>&nbsp;</td>

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

                <div class="ui-content" data-role="main">
                    <a class="ui-btn" href="#">Send Request</a>
                </div>
            </div><!--Wednesday-->

            <div data-role="collapsible">
                <h2>Wednesday</h2>

                <table class="ui-responsive" data-role="table">
                    <thead>
                        <tr>
                            <td>Role</td>

                            <td>Starting</td>

                            <td>&nbsp;</td>

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

                <div class="ui-content" data-role="main">
                    <a class="ui-btn" href="#">Send Request</a>
                </div>
            </div><!--Thursday-->

            <div data-role="collapsible">
                <h2>Thursday</h2>

                <table class="ui-responsive" data-role="table">
                    <thead>
                        <tr>
                            <td>Role</td>

                            <td>Starting</td>

                            <td>&nbsp;</td>

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

                <div class="ui-content" data-role="main">
                    <a class="ui-btn" href="#">Send Request</a>
                </div>
            </div><!--Friday-->

            <div data-role="collapsible">
                <h2>Friday</h2>

                <table class="ui-responsive" data-role="table">
                    <thead>
                        <tr>
                            <td>Role</td>

                            <td>Starting</td>

                            <td>&nbsp;</td>

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

                <div class="ui-content" data-role="main">
                    <a class="ui-btn" href="#">Send Request</a>
                </div>
            </div><!--Sunday-->

            <div data-role="collapsible">
                <h2>Sunday</h2>

                <table class="ui-responsive" data-role="table">
                    <thead>
                        <tr>
                            <td>Role</td>

                            <td>Starting</td>

                            <td>&nbsp;</td>

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

                <div class="ui-content" data-role="main">
                    <a class="ui-btn" href="#">Send Request</a>
                </div>
            </div><!--Comments-->

            <h1>Comments</h1><!--Tap to load?-->
            <!--Load 5 at a time, tap to view more?-->

            <div class="ui-content" data-role="main">
                <h3><img alt="Profile Picture" src=
                "images/thumbnails/nickcage.jpg" width="40">Jack Smith</h3>

                <p>May 16, 2019</p>

                <p>This guy is literally late every single time. I have been 10
                minutes late at best and over half an hour at worst</p>
            </div>

            <div class="ui-content" data-role="main">
                <h3><img alt="Profile Picture" src=
                "images/thumbnails/nickcage.jpg" width="40">Nick Cage</h3>

                <p>May 16, 2019</p>

                <p>This guy is literally late every single time. I have been 10
                minutes late at best and over half an hour at worst</p>
            </div>
        </div>
    </div>

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