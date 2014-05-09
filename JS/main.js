/**
All of the public variables go here
**/
var day;
var markers = [];
/**
All of your functions go here. If something needs to be run on initialization, add it into the initalization function
**/
function initalize() {
    generateMenuPanel();
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

function connectMain() {
	window.location.href = "index.php";
}

function connectSignIn() {
	window.location.href = "start.html";
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
        <h1>Menu</h1>\
        <hr />\
        <a href = \"#home\" data-transition=\"slide\" class = \"menuLink\">Home</a>\
        <br />\
        <a href = \"#findMatches\" data-transition=\"slide\" class = \"menuLink\">Find Matches</a>\
        <br />\
        <a href = \"#myRideSchedule\" data-transition=\"slide\" class = \"menuLink\">My Ride Schedule</a>\
        <br />\
        <a href = \"#myProfile\" data-transition=\"slide\" class = \"menuLink\">My Profile</a>\
		<br />\
		<a href onclick = \"return connectSignIn()\" data-transition=\"slide\" class = \"menuLink\">Log Out</a>\
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

//This piece of code will load up the map when find matches is loaded.

$(document).on("pageinit","#findMatches2",function(){ 
    loadMap();
});
$(document).on("pageshow","#findMatches2",function(){ 
   deleteMarkers();
});
function createMarker(pos, t) {
    var marker = new google.maps.Marker({       
    position: pos, 
    title: t      
    }); 
    google.maps.event.addListener(marker, 'click', function() { 
       alert("I am marker " + marker.title); 
    }); 
    markers.push(marker);
    return marker; 
}
function showMarkers() {
    for(var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}
function hideMarkers() {
    for(var i = 0; i < markers.length; i++) {
        markers[i].setMap(null);
    }
}
function deleteMarkers() {
    hideMarkers();
    markers = [];
}
function grabMarkers() {
    $.ajax({ 
    type: 'GET', 
    url: 'php/generateJsonMarkers.php', 
    data: { get_param: 'value', day : day}, 
    dataType: 'json',
    success: function (data) { 
        var i = 0;
        var lengthOfArray = data.length;
        if(lengthOfArray == 0) {
            alert("No results found");
        } else {
        while(i < lengthOfArray) {
                var location = data[i].location;
                var coord = location.split(", ");
                var coordinate = data[i].location;
                var position = new google.maps.LatLng(coord[0],coord[1]);
                createMarker(position, coordinate);
            i++;
            }
        }
        showMarkers();
    }
    });
}
function setDate(day2) {
    day = day2;
    //alert("day is now " + day);
}
/*function calculateDistance(starting, ending) {
    var coord1 = starting.split(", ");
    var coord2 = ending.split(", ");
    var R = 6371; // km
    var φ1 = lat1.toRadians();
    var φ2 = lat2.toRadians();
    var Δφ = (lat2-lat1).toRadians();
    var Δλ = (lon2-lon1).toRadians();

    var a = Math.sin(Δφ/2) * Math.sin(Δφ/2) +
            Math.cos(φ1) * Math.cos(φ2) *
            Math.sin(Δλ/2) * Math.sin(Δλ/2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));

    var d = R * c;
    alert(d);
}
*/
