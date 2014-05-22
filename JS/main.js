/**
All of the public variables go here
**/
var rsaddress = [];
var rslatlong = [];
var rsmarker;
var holdmarker = [];
var geocoder;
var map2count = 0;
var bad = 1;
var days = [];
var info = [];
var currentday = 1;
var ran = 0;
var depinfo = [];
var nInfo = [];
var dInfo = [];
var role = [];
var day;
var markers = [];
var distances = [];
var userid = getCookie("memberID"); //This is the current user's id.
var userPosition;
var ajaxData; //This holds the call back data retrieved from ajax call
var map3loaded = 0; //This tells if map 3 has been loaded yet.
var directionsDisplay;
var directionsService;
var profileID;
/**
All of your functions go here. If something needs to be run on initialization, add it into the initalization function
**/
function initalize() {
    generateMenuPanel();
<<<<<<< HEAD
=======
    //setCookie("memberid",5,1);
>>>>>>> master
}

		/** Sign up page JavaScript**/
		//Checks to see if all data within the form are correct and adequate.
		//Also fills the divisions with characters to notify the user if 
		//any information is incorrect.
function formValidate() {

	var test = true;
	
	if (!testNameEmpty() ){
	document.getElementById('errName').innerHTML='*';
		test = false;
	} else {
		document.getElementById('errName').innerHTML='';
	}
		
	if (!testUsername() ){
		document.getElementById('errUser').innerHTML='*';
		test = false;
	} else {
		document.getElementById('errUser').innerHTML='';
	}
	
	if (testPassword() == 0 ){
		document.getElementById('errPass').innerHTML='*';
		test = false;
	} else if (testPassword() == 1){
			document.getElementById('errPass').innerHTML='* Must contain at least 7 charcters';
			test = false;
		} else if (testPassword() == 2){
			document.getElementById('errPass').innerHTML='* Must contain an uppercase character';
			test = false;
			} else if (testPassword() == 3){
				document.getElementById('errPass').innerHTML='* Must contain a number';
				test = false;
				} else {
				document.getElementById('errPass').innerHTML='';
				}
	
	if (!testConPass() ){
		document.getElementById('errConPass').innerHTML='* Passwords are not the same';
		test = false;
	} else { 
		document.getElementById('errConPass').innerHTML='';
	}
		
	if (!testEmail() ){
		document.getElementById('errEmail').innerHTML='*';
		test = false;
	} else { if (!testValidEmail() ){
			document.getElementById('errEmail').innerHTML='* Invalid Email';
			test = false;
		} else {
			document.getElementById('errEmail').innerHTML='';
		}
	}
	
	if (test == false) {
		document.getElementById('missingEle').innerHTML='Missing or Invalid Elements';
	}
	return test;
}

function RunSignOUT() {
<<<<<<< HEAD
	document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
    document.cookie = "memberID=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
    delete window.userid; 
    window.location.href = "start.php";
=======
	location.href = 'php/Signout.php';
>>>>>>> master
}

function SignUpDone() {
	window.location.href = "start.php";
}
	
//Test name to see if it only contains characters and is filled out
function testNameEmpty() {
	var first = document.getElementById('firstname').value;
	var last = document.getElementById('lastname').value;
	
	if ((first == "") || (last == "")) {
		return false;
	}
	if (!first.search(/^([a-zA-Z]*)$/)) {
		return true;
	}
	if (!last.search(/^([a-zA-Z]*)$/)) {
		return true;
	}
}
		
//Test the Username to see if empty
function testUsername() {
	var username = document.getElementById('usersignUp').value;
	
	if (username == "") {
		return false;
	} else {
	return true;
	}
}

//Test password to check for appropriate length and number of characters
function testPassword() {
	var password = document.getElementById('passsignUp').value;
	
	if (password == "") {
		return 0;
		} else { if ((password).length <= 6) {
			return 1;
			} else { if (password.search(/^.*(?=.*[a-z])(?=.*[A-Z]).*$/)) {
				return 2;
				} else { if (password.search(/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/)) {
					return 3;
				} else { return 4;
				}
			}
		}
	}
}

//Test to see if passwords are the same
function testConPass() {
	var password = document.getElementById('passsignUp').value;
	var Confirmpassword = document.getElementById('conPass').value;
	
	
	if (password == Confirmpassword) {
		return true;
	} else {
	return false;
	}
}
	
//Test for correctness of BCIT email
function testValidEmail() {
	var mail = document.getElementById('email').value;
	
		if (mail == ''){
	}		
	if(!mail.search(/^([a-zA-Z0-9]*)@my.bcit.ca$/)) {
		return true;
	}
	return false;
}
		
//Test to see if anything is filled in the email box
function testEmail() {
	var mail = document.getElementById('email').value;
	
	if (mail =='') {
		return false;
		} else {
	return true
	}
}
/**
This function generates all of the required menus for each page since jquery requires panels for 
every single page.
**/
function generateMenuPanel() {
    var panel = '<div data-role="panel" class = "menuPanel" id="mypanel" data-position="left" data-display="overlay">\
        <div class ="menutitle"><h1>Menu</h1>\</div>\
        <a href = \"#home\" data-transition=\"slide\" data-rel=\"close\" class = \"menuLink\"><img src = "JS\\jqueryMobile\\images\\icons-png\\home-white.png" width =12em alt = "Home Icon"> Home</a>\
        <a href = \"#myProfile\" data-transition=\"slide\" data-rel=\"close\" class = \"menuLink\" onclick = \"profileID=userid\"><img src = "JS\\jqueryMobile\\images\\icons-png\\user-white.png" width =12em alt = "Profile Icon">My Profile</a>\
        <a href = \"#myRideSchedule\" data-transition=\"slide\" data-rel=\"close\" class = \"menuLink\"><img src = "JS\\jqueryMobile\\images\\icons-png\\calendar-white.png" width =12em alt = "Schedule Icon"> My Schedule</a>\
        <a href = \"#findMatches\" data-transition=\"slide\" data-rel=\"close\" class = \"menuLink\"><img src = "JS\\jqueryMobile\\images\\icons-png\\search-white.png" width =12em alt = "Find Icon"> Find Matches</a>\
		<a href = \"#editProfile\" data-transition=\"slide\" data-rel=\"close\" class = \"menuLink\"><img src = "JS\\jqueryMobile\\images\\icons-png\\edit-white.png" width =12em alt = "Edit Icon"> Edit Profile</a>\
		<a href = \"#settings\" data-transition=\"slide\" data-rel=\"close\" class = \"menuLink\"><img src = "JS\\jqueryMobile\\images\\icons-png\\gear-white.png" width =12em alt = "Settings Icon"> Settings</a>\
		<a href onclick = \"RunSignOUT()\" data-transition=\"slide\" class = \"menuLink\"><img src = "JS\\jqueryMobile\\images\\icons-png\\arrow-l-white.png" width =12em alt = "Logout Icon"> Log Out</a>\
		</div>';
  $.mobile.pageContainer.prepend(panel);
  $("#mypanel").panel();
}

//This initalizes the map to be loaded when load map is called
function initializeMap() {
  var mapOptions = {
    zoom: 12,
    center: new google.maps.LatLng(49.251825, -123.003978 )
  };

  this.map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
}

//The map has to be loaded asynchronously because of jquery limitation.
//This is called when findMatches2 is initalized.
function loadMap() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBwRtXAgSKxxKwyhnMoMNIS-8FsVpfQ1EU&sensor=false&'
    + 'callback=initializeMap';
  document.body.appendChild(script);
}
//This initalizes the map to be loaded when load map is called
function initializeMap3() {
    var mapOptions = {
        zoom: 12,
        center: new google.maps.LatLng(49.251825, -123.003978)
    };

    this.map3 = new google.maps.Map(document.getElementById('mapcanvas3'), mapOptions);
    //directionsDisplay.setPanel(document.getElementById('directions-panel'));
    var trafficLayer = new google.maps.TrafficLayer();
    trafficLayer.setMap(map3);
    google.maps.event.trigger(map3, "resize");
    loadDirectionService();
    grabRouteData();
    //calcRoute();
}
//The map has to be loaded asynchronously because of jquery limitation.
function loadMap3() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBwRtXAgSKxxKwyhnMoMNIS-8FsVpfQ1EU&sensor=false&' + 'callback=initializeMap3';
    document.body.appendChild(script);
}
//This piece of code will load up the map when find matches is loaded.
$(document).on("pageinit", "#findMatches2", function () {
    loadMap();
});
$(document).on("pageshow", "#showRoutes", function () {
    if(map3loaded != 1) {
        loadMap3();
        map3loaded = 1;
    }
    var mapheight = $(window).height() * .75
    $(mapcanvas3).height(mapheight);
    $( "#directions-panel" ).hide();
});
$(document).on("pageshow", "#findMatches2", function () {
    deleteMarkers();
    grabMarkers();
});
function createMarker(pos, t) {
    var marker = new google.maps.Marker({
        position: pos,
        title: t
    });
    google.maps.event.addListener(marker, 'click', function () {
        //alert("I am marker " + marker.title);
	 profileID=marker.title;
        window.location = "#Profile";
    });
    markers.push(marker);
    return marker;
}

function showMarkers() {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}

function hideMarkers() {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(null);
    }
}

function deleteMarkers() {
    hideMarkers();
    markers = [];
}

function grabMarkers() {
    $.mobile.loading('show', {
        text: 'Loading',
        textVisible: true,
        theme: 'z',
        html: ""
    });
    distances = [];
    deleteMarkers();
    clearRecommendations();
    $.ajax({
        type: 'GET',
        url: 'php/generateJsonMarkers.php',
        data: {
            get_param: 'value',
            day: day,
            id: userid,
            direction: $('input[name="direction"]:checked').val()
        },
        dataType: 'json',
        success: function (data) {
            ajaxData = data;
            var i = 0;
            var lengthOfArray = data.markers.length;
            if (lengthOfArray == 0) {
                $('#recommendations').html("No results found.");
            } else {
                while (i < lengthOfArray) {
                    var location = data.markers[i].location;
                    //alert(location);
                    var memberid = data.markers[i].memberid;
                    var coord = location.split(", ");
                    var position = new google.maps.LatLng(coord[0], coord[1]);
                    if (memberid != userid) {
                        createMarker(position, memberid);
                        distances.push([data.markers[i].memberid, calculateDistance(data.currentUser[0].location, data.markers[i].location)]);
                    } else {
                        userPosition = location;
                    }
                    i++;
                }
                sortMarkers();
                showRecommendations();
                showMarkers();
            }
            $.mobile.loading('hide', {
                text: 'Loading',
                textVisible: true,
                theme: 'z',
                html: ""
            });
        },
        error: function() {
            alert("no results found");
        }
    });

}

function setDate(day2) {
    day = day2;
    //alert("day is now " + day);
}

function sortMarkers() {
    distances = distances.sort(compareSecondColumn);

    function compareSecondColumn(a, b) {
        return a[1] > b[1];
    }
}

function calculateDistance(starting, ending) {
    var coord1 = starting.split(", "); //coord1[0] == lat coord1[1] == lon
    var coord2 = ending.split(", ");
    var x1 = parseFloat(coord1[0]);
    var x2 = parseFloat(coord2[0]);
    var y1 = parseFloat(coord1[1]);
    var y2 = parseFloat(coord2[1]);
    //alert(x1 +" "+ y1 +" "+ x2 +" "+ y2);
    var d = Math.sqrt((Math.pow((x2 - x1), 2)) + (Math.pow((y2 - y1), 2)));
    return d
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}
function clearRecommendations() {
    $('#recommendations').html("");
}
function showRecommendations() {
    var i = 0;
    $('#recommendations').html("");
    while (i < distances.length && i < 3) {
        var memberid = grabMarkerIndex(distances[i][0]);
        var name = ajaxData.markers[memberid].first + " " + ajaxData.markers[memberid].last;
        var address = ajaxData.markers[memberid].address;
	$('#recommendations').append("<a href = \"#Profile\" onclick=\"profileID=" + distances[i][0] + "\">" +
			"<div class=\"card_container\">" +
			"<div class=\"thumbnail\"> <img src = \"images/thumbnails/nickcage.jpg\" width = 72px alt = \"oneTrueGod\"> </div>" +
			"<div class=\"card_content\">"+
				"<p>" + name + "<br />" + address + "</p>"+
			"</div>"+
			"</div>"+
			"</a>" );
	i++
    }
}

function grabMarkerIndex(position1) {
    var i = 0;
    position = parseInt(position1);
    while (parseInt(ajaxData.markers[i].memberid) != position) {
        i++
    }
    return i;
}
function loadDirectionService() {
    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map3);
    directionsDisplay.setPanel(document.getElementById('directions-panel'));
}
function grabRouteData() {
        $.ajax({
        type: 'GET',
        url: 'php/generateRoutes.php',
        data: {
            get_param: 'value',
            day: 'monday',
            direction: 'arrival',
            memberid: 5
        },
        dataType: 'json',
        success: function (data) {
            ajaxData = data;
            calcRoute();
        }
    });
}
function calcRoute() {
    var waypts = [];
    var start1 = 0;
    var start2 = 0;
        for (var i = 0; i < ajaxData.length; i++) {
        var coord = ajaxData[i].location.split(", ");
            if(ajaxData[i].role == 0) {
                start1 = coord[0];
                start2 = coord[1];
            }
            waypts.push({
            location:new google.maps.LatLng(coord[0], coord[1]),
            stopover:true});
    }
    var start = new google.maps.LatLng(start1, start2);
    var end = new google.maps.LatLng(049.251825, -123.0039780);
    var request = {
      origin: start,
      destination: end,
      waypoints: waypts,
      optimizeWaypoints: true,
      travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}
function showMap() {
    $( "#directions-panel" ).hide(300);
    $( "#mapcanvas3" ).show(300);
}
function showDirections() {
    $( "#directions-panel" ).show(300);
    $( "#mapcanvas3" ).hide(300);
}

//Updates profile page of other users on load
$(document).on("pagebeforeshow","#Profile",function(){ // When entering profile
        $.ajax({
        type: 'GET',
        url: 'php/generateProfile.php',
        data: {
            get_param: 'value',
            id: profileID,
        },
        dataType: 'json',
        success: function (data) {
            ajaxData = data;
            $("#profileContentMonday, #profileContentTuesday, #profileContentWednesday, #profileContentThursday, #profileContentFriday, #profileContentSaturday, #profileContentSunday").html("");
            $("#profileContent").html(
                "<div class=\"profile_main\">" +
                    "<h1>"+ data.profile.first + " " + data.profile.last +"</h1>"+
                    "<div class=\"profile_img\">" +
                        "<img id=\"photo\" src=\"images\\thumbnails\\nickcage.jpg\" alt=\"Profile Picture\">" +
                        "<div id=\"user_rating\" class=\"star\"></div>" +                       
                    "</div>" +
                    "<div class=\"profile_contact\">" +
                        "<h2>Contact Info<hr></h2>" +
                        "<h3>Email:</h3>" +
                        "<p>" + data.profile.email + "</p>" +
                        "<h3>Phone:</h3>" +
                        "<p>" + data.profile.phone + "</p>" +
                    "</div>" +
                    "<div class=\"profile_info\">"+
                        "<br/>"+
                        "<h3>About me</h3>"+
                        "<hr>"+
                        "<p>"+data.profile.info+"</p>"+
                    "</div>"+
                    "<br style=\"clear:both;\">"+
                "</div>");
                if(typeof data.monday != 'undefined') {
                    data.monday.role = convertRole(data.monday.role);
                    $("#profileContentMonday").append(
                        "<div data-role=\"collapsible\">"+
                            "<h2>Monday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.monday.role+"</td>"+
                                        "<td>"+data.monday.address+"</td>"+
                                        "<td>"+data.monday.arrivaltime+"</td>"+
                                        "<td>"+data.monday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>"+            
                            "<p><?php echo $additional_1?></p>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                            "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('monday', 'arrival')\">Send Request for arrival</a>"+
                            "</div>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                            "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('monday', 'departure')\">Send Request for departure</a>"+
                            "</div>"+
                            "</div>");


                }
                if(typeof data.tuesday != 'undefined') {
                    data.tuesday.role = convertRole(data.tuesday.role);
                    $("#profileContentTuesday").append(
                        "<div data-role=\"collapsible\">"+
                            "<h2>Tuesday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.tuesday.role+"</td>"+
                                        "<td>"+data.tuesday.address+"</td>"+
                                        "<td>"+data.tuesday.arrivaltime+"</td>"+
                                        "<td>"+data.tuesday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>"+             
                            "<p><?php echo $additional_2?></p>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                                "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('tuesday', 'arrival')\">Send Request for arrival</a>"+
                            "</div>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                                "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('tuesday', 'departure')\">Send Request for departure</a>"+
                            "</div>"+
                            "</div>");
                }
                if(typeof data.wednesday != 'undefined') {
                    data.wednesday.role = convertRole(data.wednesday.role);
                    $("#profileContentWednesday").append(
                        "<div data-role=\"collapsible\">"+         
                            "<h2>Wednesday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.wednesday.role+"</td>"+
                                        "<td>"+data.wednesday.address+"</td>"+
                                        "<td>"+data.wednesday.arrivaltime+"</td>"+
                                        "<td>"+data.wednesday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>" +          
                            "<p><?php echo $additional_3?></p>" +
                            "<div data-role=\"main\" class=\"ui-content\">"+
                                "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('wednesday', 'arrival')\">Send Request for arrival</a>"+
                            "</div>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                                "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('wednesday', 'departure')\">Send Request for departure</a>"+
                            "</div>" +
                            "</div>");
                }
                if(typeof data.thursday != 'undefined') {
                    data.thursday.role = convertRole(data.thursday.role);
                    $("#profileContentThursday").append(
                        "<div data-role=\"collapsible\">"+
                            "<h2>Thursday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.thursday.role+"</td>"+
                                        "<td>"+data.thursday.address+"</td>"+
                                        "<td>"+data.thursday.arrivaltime+"</td>"+
                                        "<td>"+data.thursday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>" +             
                            "<p><?php echo $additional_4?></p>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                                "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('thursday', 'arrival')\">Send Request for arrival</a>"+
                            "</div>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                                "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('thursday', 'departure')\">Send Request for departure</a>"+
                            "</div>"+
                            "</div>");
                }
                if(typeof data.friday != "undefined") {
                    data.friday.role = convertRole(data.friday.role);
                    $("#profileContentFriday").append(                
                        "<div data-role=\"collapsible\">"+
                            "<h2>Friday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.friday.role+"</td>"+
                                        "<td>"+data.friday.address+"</td>"+
                                        "<td>"+data.friday.arrivaltime+"</td>"+
                                        "<td>"+data.friday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>" +           
                            "<p><?php echo $additional_5?>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                                "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('friday', 'arrival')\">Send Request for arrival</a>"+
                            "</div>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                                "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('friday', 'departure')\">Send Request for departure</a>"+
                            "</div>"+
                            "</div>");
                }
                if(typeof data.saturday != "undefined") {
                    data.saturday.role = convertRole(data.saturday.role);
                    $("#profileContentSaturday").append(                
                        "<div data-role=\"collapsible\">"+
                            "<h2>Saturday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.saturday.role+"</td>"+
                                        "<td>"+data.saturday.address+"</td>"+
                                        "<td>"+data.saturday.arrivaltime+"</td>"+
                                        "<td>"+data.saturday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>"+                 
                            "<p><?php echo $additional_6?></p>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                                "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('saturday', 'arrival')\">Send Request for arrival</a>"+
                            "</div>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                                "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('saturday', 'departure')\">Send Request for departure</a>"+
                            "</div>"+
                            "</div>");
                }
                if(typeof data.sunday != "undefined") {
                    data.sunday.role = convertRole(data.sunday.role);
                    $("#profileContentSunday").append(
                        "<div data-role=\"collapsible\">"+
                            "<h2>Sunday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.sunday.role+"</td>"+
                                        "<td>"+data.sunday.address+"</td>"+
                                        "<td>"+data.sunday.arrivaltime+"</td>"+
                                        "<td>"+data.sunday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>" +      
                            "<p><?php echo $additional_7?>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                                "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('sunday', 'arrival')\">Send Request for arrival</a>"+
                            "</div>"+
                            "<div data-role=\"main\" class=\"ui-content\">"+
                                "<a href=\"#\" class=\"ui-btn\" onclick = \"sendRequest('sunday', 'departure')\">Send Request for departure</a>"+
                            "</div>"+
                            "</div>");
                }

            $('#Profile').trigger('create');
        }
    });
});
$(document).on("pageinit","#myProfile",function(){ // When entering profile
        $.ajax({
        type: 'GET',
        url: 'php/generateProfile.php',
        data: {
            get_param: 'value',
            id: userid,
        },
        dataType: 'json',
        success: function (data) {
            ajaxData = data;
            $("#myprofileContent").html(
                "<div class=\"profile_main\">" +
                    "<h1>"+ data.profile.first + " " + data.profile.last +"</h1>"+
                    "<div class=\"profile_img\">" +
                        "<img id=\"photo\" src=\"images\\thumbnails\\nickcage.jpg\" alt=\"Profile Picture\">" +
                        "<div id=\"user_rating\" class=\"star\"></div>" +                       
                    "</div>" +
                    "<div class=\"profile_contact\">" +
                        "<h2>Contact Info<hr></h2>" +
                        "<h3>Email:</h3>" +
                        "<p>" + data.profile.email + "</p>" +
                        "<h3>Phone:</h3>" +
                        "<p>" + data.profile.phone + "</p>" +
                    "</div>" +
                    "<div class=\"profile_info\">"+
                        "<br/>"+
                        "<h3>About me</h3>"+
                        "<hr>"+
                        "<p>"+data.profile.info+"</p>"+
                    "</div>"+
                    "<br style=\"clear:both;\">"+
                "</div>");
                if(typeof data.monday != 'undefined') {
                    data.monday.role = convertRole(data.monday.role);
                    $("#myprofileContentMonday").append(
                        "<div data-role=\"collapsible\">"+
                            "<h2>Monday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.monday.role+"</td>"+
                                        "<td>"+data.monday.address+"</td>"+
                                        "<td>"+data.monday.arrivaltime+"</td>"+
                                        "<td>"+data.monday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>"+            
                            "<p><?php echo $additional_1?></p><div id = \"mondayRequest\"></div></div>");


                }
                if(typeof data.tuesday != 'undefined') {
                    data.tuesday.role = convertRole(data.tuesday.role);
                    $("#myprofileContentTuesday").append(
                        "<div data-role=\"collapsible\">"+
                            "<h2>Tuesday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.tuesday.role+"</td>"+
                                        "<td>"+data.tuesday.address+"</td>"+
                                        "<td>"+data.tuesday.arrivaltime+"</td>"+
                                        "<td>"+data.tuesday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>"+             
                            "<p><?php echo $additional_2?></p><div id = \"tuesdayRequest\"></div></div>");
                }
                if(typeof data.wednesday != 'undefined') {
                    data.wednesday.role = convertRole(data.wednesday.role);
                    $("#myprofileContentWednesday").append(
                        "<div data-role=\"collapsible\">"+         
                            "<h2>Wednesday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.wednesday.role+"</td>"+
                                        "<td>"+data.wednesday.address+"</td>"+
                                        "<td>"+data.wednesday.arrivaltime+"</td>"+
                                        "<td>"+data.wednesday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>" +          
                            "<p><?php echo $additional_3?></p><div id = \"wednesdayRequest\"></div></div>");
                }
                if(typeof data.thursday != 'undefined') {
                    data.thursday.role = convertRole(data.thursday.role);
                    $("#myprofileContentThursday").append(
                        "<div data-role=\"collapsible\">"+
                            "<h2>Thursday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.thursday.role+"</td>"+
                                        "<td>"+data.thursday.address+"</td>"+
                                        "<td>"+data.thursday.arrivaltime+"</td>"+
                                        "<td>"+data.thursday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>" +             
                            "<p><?php echo $additional_4?></p><div id = \"thursdayRequest\"></div></div>");
                }
                if(typeof data.friday != "undefined") {
                    data.friday.role = convertRole(data.friday.role);
                    $("#myprofileContentFriday").append(                
                        "<div data-role=\"collapsible\">"+
                            "<h2>Friday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.friday.role+"</td>"+
                                        "<td>"+data.friday.address+"</td>"+
                                        "<td>"+data.friday.arrivaltime+"</td>"+
                                        "<td>"+data.friday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>" +           
                            "<p><?php echo $additional_5?><div id = \"fridayRequest\"></div></div>");
                }
                if(typeof data.saturday != "undefined") {
                    data.saturday.role = convertRole(data.saturday.role);
                    $("#myprofileContentSaturday").append(                
                        "<div data-role=\"collapsible\">"+
                            "<h2>Saturday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.saturday.role+"</td>"+
                                        "<td>"+data.saturday.address+"</td>"+
                                        "<td>"+data.saturday.arrivaltime+"</td>"+
                                        "<td>"+data.saturday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>"+                 
                            "<p><?php echo $additional_6?></p><div id = \"saturdayRequest\"></div></div>");
                }
                if(typeof data.sunday != "undefined") {
                    data.sunday.role = convertRole(data.sunday.role);
                    $("#myprofileContentSunday").append(
                        "<div data-role=\"collapsible\">"+
                            "<h2>Sunday</h2>"+
                            "<table data-role=\"table\" class=\"ui-responsive\">"+
                                "<thead>"+
                                    "<tr>"+
                                        "<td>Role:</td>"+
                                        "<td>Address:</td>"+
                                        "<td>Arrival:</td>"+
                                        "<td>Departure:</td>"+
                                    "</tr>"+
                                "</thead>"+
                                "<tbody>"+
                                    "<tr>"+
                                        "<td>"+data.sunday.role+"</td>"+
                                        "<td>"+data.sunday.address+"</td>"+
                                        "<td>"+data.sunday.arrivaltime+"</td>"+
                                        "<td>"+data.sunday.departtime+"</td>"+
                                   "</tr>"+
                                "</tbody>"+
                            "</table>"+
                            "<h3>Additional information</h3>" +      
                            "<p><?php echo $additional_7?><div id = \"sundayRequest\"></div></div>");
                }

            $('#myProfile').trigger('create');
        }
    });
});

function sendRequest(day, direction) {
    if(day == "monday") {
        ajaxData2 = ajaxData.monday;
    } else if(day == "tuesday") {
        ajaxData2 = ajaxData.tuesday;
    } else if(day == "wednesday") {
        ajaxData2 = ajaxData.wednesday;
    } else if(day == "thursday") {
        ajaxData2 = ajaxData.thursday;
    } else if(day == "friday") {
        ajaxData2 = ajaxData.friday;
    } else if(day == "saturday") {
        ajaxData2 = ajaxData.saturday;
    } else {
        ajaxData2 = ajaxData.sunday;
    }
    $.ajax({ 
        type: 'GET', 
        url: 'php/createRequest.php', 
        data: {
            requesteerole: revertRole(ajaxData2.role),
            requesterid:userid,
            requesteeid:profileID,
            day:day,
            direction:direction,
            location:ajaxData2.location,
            address:ajaxData2.address    
        }, 
        success: function (data) {
<<<<<<< HEAD
            if(data == "success") {
=======
                            if(data == "success") {
>>>>>>> master
                $("#success" ).popup( "open");
                setTimeout(function (){
                    $("#success").popup("close");   
                }, 2000);
            } else {
                $("#failed").popup("open"); 
                setTimeout(function (){
                    $("#failed").popup("close");   
                }, 2000);           }
        }
    });
}
//Changes 1 and 0 to passenger or driver
function convertRole(role) {
    if(role == 0){
        return "driver";
    } else {
        return "passenger";
    }
}
//Changes passenger or driver to 1 or 0
function revertRole(role) {
    if(role == "driver") {
        return 0;
    } else {
        return 1;
    }
}
<<<<<<< HEAD
function validateEditProfile() {
    var password = document.getElementById('pass').value;
    var Confirmpassword = document.getElementById('confirmPass').value;
    
    
    if (password == Confirmpassword) {
        alert("were good here");
        $.get( "php/editProfile.php", 
            {   user: userid,
                fname: $("#fname").val(), 
                lname: $("#lname").val(),
                pass: $("#pass").val(),
                phone: $("#phone").val(),
                email: $("#email").val(),
                about: $("#about").val() 
            } )
          .done(function( data ) {
            alert( "Data Loaded: " + data );
          });
        return true;
    } else {
    return false;
    }
}
function genCard() {
    $.ajax({ 
		type: 'GET', 
		url: 'php/generateCards.php', 
		data: { }, 
		dataType: 'json',
		success: function (data) {
			//alert(data[0].first);
			//alert(data[1].first);
			var i = 0;
			$('#card_gen').html("");
			while(i < data.length) {
				var name = data[i].first;
				var day = data[i].day;
				$('#card_gen').append("<div data-role=\"main\" class=\"ui-content ui-group-theme-a\">" +
					"<div class = \"card_container\">" +
					"<div class=\"thumbnail\"><img src = \"images/thumbnails/nickcage.jpg\" alt = \"oneTrueGod\" width = \"72px\"> </div>" +
					"<div class=\"card_content\">" + "<p>" +
					name +
					" wants to give you a ride on " +
					day +
					"!" + "</p>" +
					"</div>" +
					"<a href=\"#myPopup2\" data-rel=\"button\" class=\"ui-btn-b ui-btn ui-btn-right ui-nodisc-icon ui-btn-icon-notext ui-mini ui-icon-delete\"></a>" +
					"</div>" + 
					"</div>");
				i++
			}
		}
	});
=======
function genCard() {
    $.ajax({ 
        type: 'GET', 
        url: 'php/generateCards.php', 
        data: { userId:userid },
        dataType: 'json',
        success: function (data) {
            var i = 0;
            $('#card_gen').html("");
            while(i < data.length) {
                var name = data[i].first;
                var day = data[i].day;
                $('#card_gen').append("<div data-role=\"main\" class=\"ui-content ui-group-theme-a\">" +
                    "<div class = \"card_container\">" +
                    "<div class=\"thumbnail\"><img src = \"images/thumbnails/nickcage.jpg\" alt = \"oneTrueGod\" width = \"72px\"> </div>" +
                    "<div class=\"card_content\">" + "<p>" +
                    name +
                    " wants to give you a ride on " +
                    day +
                    "!" + "</p>" +
                    "</div>" +
                    "<a href=\"#myPopup2\" data-rel=\"button\" class=\"ui-btn-b ui-btn ui-btn-right ui-nodisc-icon ui-btn-icon-notext ui-mini ui-icon-delete\"></a>" +
                    "<script>" + " $('.ui-btn-b').click(function() { " +
                    "$(this).closest('.card_container').remove();" + "});" +
                    "</script>" +
                    "</div>" + 
                    "</div>");
                i++
            }
        }
    });
>>>>>>> master
 }

/*START OF LOGANS STUFF*/

/**
All of the public variables go here
**/

/**
All of your functions go here. If something needs to be run on initialization, add it into the initalization function
 **/

function buttonGen() {
for (var i = 0; i < days.length; i++) {
    $("#header_schedule").append('<input type="button" onclick="submitFiles();dayChange(' + i + ');loadInfo();" data-role="button" value="'
     + days[i].charAt(0).toUpperCase() + days[i].substring(1,3) + '"></div>');
}
}

function submitFiles() {
var hour = 0;
var hourdep = 0;
if (!($('#hour1').val()) || !($('#minute').val())) {}
else {
  if ($("#am").val() == 'pm') {
    hour = parseInt($("#hour1").val()) + 12;
  }
  else {
    hour = $("#hour1").val();
  }
  info[currentday-1] = (hour + $("#minute").val() + document.getElementById("day").innerHTML.substring(0,2));
}
  if (!($('#dephour').val()) || !($('#depminute').val())) {}
    else {
  if ($("#depam").val() == 'pm') {
    hourdep = parseInt($("#dephour").val()) + 12;
  
  } else {
    hourdep = $("#dephour").val();
  }
  
  depinfo.push(hourdep + $("#depminute").val() + document.getElementById("day").innerHTML.substring(0,2));
}
if ($("#passenger1").is(':checked')){
  role[currentday-1] = 1;
} else {
role[currentday-1] = 0;
}
sortInfo();
}



function orderInfo() {
  var cInfo = [];
  for (var i = 0; i < info.length; i++) {
    cInfo = info[i].substring(info[i].length-2, info[i].length);
    if (cInfo == 'Mo') {
      nInfo[0] = info[i].substring(0, info[i].length-2);
      nInfo[1] = 'monday';
    }
    else if (cInfo == 'Tu') {
      nInfo[2] = info[i].substring(0, info[i].length-2);
      nInfo[3] = 'tuesday';
    }
    else if (cInfo == 'We') {
      nInfo[4] = info[i].substring(0, info[i].length-2);
      nInfo[5] = 'wednesday';
    }
    else if (cInfo == 'Th') {
      nInfo[6] = info[i].substring(0, info[i].length-2);
      nInfo[7] = 'thursday';
    }
    else if (cInfo == 'Fr') {
      nInfo[8] = info[i].substring(0, info[i].length-2);
      nInfo[9] = 'friday';
    }
    else if (cInfo == 'Sa') {
      nInfo[10] = info[i].substring(0, info[i].length-2);
      nInfo[11] = 'saturday';
    }
    else if (cInfo == 'Su') {
      nInfo[12] = info[i].substring(0, info[i].length-2);
      nInfo[13] = 'sunday';
    }
  }

  for (var i = 0; i < depinfo.length; i++) {
    cInfo = depinfo[i].substring(depinfo[i].length-2, depinfo[i].length);
    if (cInfo == 'Mo') {
      dInfo[0] = depinfo[i].substring(0, depinfo[i].length-2);
      dInfo[1] = 'monday';
    }
    else if (cInfo == 'Tu') {
      dInfo[2] = depinfo[i].substring(0, depinfo[i].length-2);
      dInfo[3] = 'tuesday';
    }
    else if (cInfo == 'We') {
      dInfo[4] = depinfo[i].substring(0, depinfo[i].length-2);
      dInfo[5] = 'wednesday';
    }
    else if (cInfo == 'Th') {
      dInfo[6] = depinfo[i].substring(0, depinfo[i].length-2);
      dInfo[7] = 'thursday';
    }
    else if (cInfo == 'Fr') {
      dInfo[8] = depinfo[i].substring(0, depinfo[i].length-2);
      dInfo[9] = 'friday';
    }
    else if (cInfo == 'Sa') {
      dInfo[10] = depinfo[i].substring(0, depinfo[i].length-2);
      dInfo[11] = 'saturday';
    }
    else if (cInfo == 'Su') {
      dInfo[12] = depinfo[i].substring(0, depinfo[i].length-2);
      dInfo[13] = 'sunday';
    }
  }

}


function loadInfo() {
<<<<<<< HEAD
=======
            if (role[currentday-1] == 1) {
            $("#passenger1").prop('checked', true).checkboxradio("refresh");
            $("#driver1").checkboxradio("refresh");
        }
        else {
            $("#driver1").prop('checked', true).checkboxradio("refresh");
            $("#passenger1").checkboxradio("refresh");
        }
>>>>>>> master
  for (var i = 0; i < info.length; i++) {
      if (document.getElementById("day").innerHTML.substring(0,2) == info[i].substring(info[i].length-2, info[i].length)) {
        if (parseInt(info[i].substring(0,info[i].length - 5)) > 12 ) {
         document.getElementById("hour1").value = parseInt(info[i].substring(0,info[i].length - 5)) - 12; 
         document.getElementById("am").value = "pm";
        } else {
         document.getElementById("hour1").value = info[i].substring(0,info[i].length - 5);
         document.getElementById("am").value = "am";}
         document.getElementById("minute").value = info[i].substring(info[i].length - 5,info[i].length - 2);
         $('#hour1').selectmenu('refresh', true);
         $('#minute').selectmenu('refresh', true);
         $('#am').selectmenu('refresh', true);

    }
  }
    for (var i = 0; i < depinfo.length; i++) {
      if (document.getElementById("day").innerHTML.substring(0,2) == depinfo[i].substring(depinfo[i].length-2, depinfo[i].length)) {
        if (parseInt(depinfo[i].substring(0,depinfo[i].length - 5)) > 12 ) {
         document.getElementById("dephour").value = parseInt(depinfo[i].substring(0,depinfo[i].length - 5)) - 12; 
         document.getElementById("depam").value = "pm";
        } else {
         document.getElementById("dephour").value = depinfo[i].substring(0,depinfo[i].length - 5);
         document.getElementById("depam").value = "am";}
         document.getElementById("depminute").value = depinfo[i].substring(depinfo[i].length - 5,depinfo[i].length - 2);
         $('#dephour').selectmenu('refresh', true);
         $('#depminute').selectmenu('refresh', true);
         $('#depam').selectmenu('refresh', true);
    }
  }
<<<<<<< HEAD
=======

>>>>>>> master
/*      for (var i = 0; i < holdmarker.length; i++) {
        
        holdmarker[i].setMap(null); }
        if ( holdmarker.length > currentday -1) {
         map2.setCenter(rslatlong[currentday - 1]);
         holdmarker[currentday-1].setMap(map2);
      }*/
}

function sortInfo() {
var count = 0;
  for(var i = 0; i < info.length; i++) {
    for (var a = info.length - 1; a > i; a--) {
<<<<<<< HEAD
      if ((info[i].substring(info[i].length-2, info[i].length) == info[a].substring(info[a].length-2, info[a].length)) && a != i ){
        info.splice(i,1);
      }
=======
        if (info[i] != null) {
      if ((info[i].substring(info[i].length-2, info[i].length) == info[a].substring(info[a].length-2, info[a].length)) && a != i ){
        info.splice(i,1);
      }
  }
>>>>>>> master
    }
  }
  for(var i = 0; i < depinfo.length; i++) {
    for (var a = depinfo.length - 1; a > i; a--) {
      if ((depinfo[i].substring(depinfo[i].length-2, depinfo[i].length) == depinfo[a].substring(depinfo[a].length-2, depinfo[a].length)) && a != i ){
        depinfo.splice(i,1);
      }
    }
  }
}
//add submit files to next button
function dayChange(num) {
  currentday = num;
  document.getElementById("day").innerHTML = days[num].charAt(0).toUpperCase() + days[num].substring(1,days[num].length);
  currentday++;
  if (currentday != days.length) {
<<<<<<< HEAD
    $("#next").attr("onclick", "submitFiles();dayChange(" + currentday + ");loadInfo();");
    $("#next").val("Next");
    $("#next").button("refresh");}
  else {
    $("#next").attr("onclick", "submitFiles();finalSubmit()");
    $("#next").val("Submit");
    $("#next").button("refresh");
=======
    $("#next").attr("onclick", "codeAddress();submitFiles();dayChange(" + currentday + ");loadInfo();");
    $("#next").val("Next").button("refresh");
} else {
    $("#next").attr("onclick", "submitFiles();finalSubmit()");
    $("#next").val("Submit").button("refresh");
>>>>>>> master
  }
}

function finalSubmit(){
// do stuff
var daystr;
var today;
var setaddress;
var addressI = 0;
var loca;
var depart;
var carinfo;
orderInfo();
for (var i = 0; i < nInfo.length; i += 2) {
  if ( nInfo[i] != null ) {
<<<<<<< HEAD
    if (dInfo[i] != null) {
=======
    if (dInfo[i] != null       ) {
>>>>>>> master
      depart = dInfo[i];
    }
    daystr = nInfo[i];
    today = nInfo[i+1];
    setaddress = rsaddress[addressI];
    loca = rslatlong[addressI].substring(1,rslatlong[addressI].length-1);
    carinfo = role[addressI];
    addressI++;
$.ajax({
  type: 'GET',
  url: 'php/schedule.php',
<<<<<<< HEAD
  data: {curday: today, dayinf: daystr, caddress: setaddress, newlocation: loca, departinf: depart, role: carinfo},
  success: function(data) {
=======
  data: {
    curday: today,
    dayinf: daystr,
    caddress: setaddress,
    newlocation: loca,
    departinf: depart,
    role: carinfo,
    uid: userid
    },
  success: function(data) {
location.href = "#findMatches";
>>>>>>> master
  }

  });
}
}
}
function radioCheck() {
  if (!$('#driver').is(":checked") && !$('#passenger').is(":checked")) {
    document.getElementById('errorM').innerHTML = 'Please choose a role.';
    bad = 1;
  } else {
    document.getElementById('errorM').innerHTML = '';
    bad = 0;
  }
  if ($('#driver').is(":checked") == true) {
    $("#driver1").attr("checked",true);
    }

  else if ($('#passenger').is(":checked") == true) {
    $("#passenger1").attr("checked",true);
    }
    if (bad == 0 && days.length == 0) {
  if ($("#mondayC").is(":checked")) {
    days.push('monday')
  }
  if ($('#tuesdayC').is(":checked")) {
    days.push('tuesday');
  }
  if ($('#wednesdayC').is(":checked")) {
    days.push('wednesday');
  }
  if ($('#thursdayC').is(":checked")) {
    days.push('thursday');
  }
  if ($('#fridayC').is(":checked")) {
    days.push('friday');
      }
  if ($('#saturdayC').is(":checked")) {
    days.push('saturday');
  }
  if ($('#sundayC').is(":checked")) {
    days.push('sunday');
  }
  }

  if (bad == 1) {
    return false;
  } else {
  if (days.length == 0) {
    document.getElementById('errorA').innerHTML = 'Please select a day.';
        }
  else {
    document.getElementById('errorA').innerHTML = '';
  }
if (bad == 0 && days.length != 0 && ran == 0) {
    document.getElementById("day").innerHTML = days[0].charAt(0).toUpperCase() + days[0].substring(1,days[0].length);
    buttonGen();
<<<<<<< HEAD
=======
    for (var i = 0; i < days.length; i++) {
        if($("#passenger1").is(':checked') == true) {
            role.push(1);

        }
        else {
            role.push(0);
        }
    }
>>>>>>> master
    ran++;
  } else {
    return false;
  }
}
if (days.length == 1) { 
    $("#next").attr("onclick", "submitFiles();finalSubmit()");
    $("#next").val("Submit");
<<<<<<< HEAD
=======
    $("#next").button("refresh");
>>>>>>> master
}
}


function clearPage() {
days = [];
rsaddress = [];
rslatlong = [];
rsmarker;
holdmarker = [];
$("#header_schedule").html('');  
info = [];
depinfo = [];
ran = 0;
$("#driver").attr("checked",false).checkboxradio("refresh");
$("#passenger").attr("checked",false).checkboxradio("refresh");


$("#mondayC").attr("checked", false).checkboxradio("refresh");
$("#tuesdayC").attr("checked", false).checkboxradio("refresh");
$("#wednesdayC").attr("checked", false).checkboxradio("refresh");
$("#thursdayC").attr("checked", false).checkboxradio("refresh");
$("#fridayC").attr("checked", false).checkboxradio("refresh");
$("#saturdayC").attr("checked", false).checkboxradio("refresh");
$("#sundayC").attr("checked", false).checkboxradio("refresh");


} 

$(document).on("pageshow","#myRideSchedule",function() {
clearPage();
});


/*Google Maps section */

/*Loads map on pageshow*/
$(document).on("pageshow", "#schedule", function(){
      loadMap2();
});

function initializeMap2() {
  geocoder = new google.maps.Geocoder();
  var mapOptions = {
    zoom: 12,
    center: new google.maps.LatLng(49.251825, -123.003978 )
  };

  this.map2 = new google.maps.Map(document.getElementById('goodMap'), mapOptions);
  google.maps.event.trigger(map2, "resize")
}


/*Loads the map*/
function loadMap2() {
  if (map2count == 0 ) {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBwRtXAgSKxxKwyhnMoMNIS-8FsVpfQ1EU&sensor=false&'
    + 'callback=initializeMap2';
  document.body.appendChild(script);
  
}
map2count++;
}


/*Geocode*/
 function codeAddress() {
  if (rsmarker != null) {
    rsmarker.setMap(null);
  }
  //only allows one marker at a time
    var address = document.getElementById("address").value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map2.setCenter(results[0].geometry.location);
        rsaddress[currentday - 1] = address;
        rslatlong[currentday - 1] = results[0].geometry.location + "";

        var marker = new google.maps.Marker({
            map2: map2,
            position: results[0].geometry.location,
            title: address 
        });
        holdmarker[currentday-1] = marker;
        marker.setMap(map2);
        rsmarker = marker;
      }
      else {
        alert("Invalid location");
      }
    });
<<<<<<< HEAD
  }




=======
  }
>>>>>>> master
