/**
All of the public variables go here
**/


    
    
/**
All of your functions go here. If something needs to be run on initialization, add it into the initalization function
**/
function initalize() {
    generateMenuPanel();
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

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(49.251825, -123.003978),
        title:"Hello World!"
    });

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
var moncheck = 0;
var tuecheck = 0;
var wedcheck = 0;
var thucheck = 0;
var fricheck = 0;
var satcheck = 0;
var suncheck = 0;
//Works until you look at the page
//maybe needs refresh function?
function radioCheck() {
  var bad = 0;
  if ($('#driver').is(":checked") == false && $('#passenger').is(":checked") == false) {
    document.getElementById('errorM').innerHTML = 'Please choose a role.';
    bad = 1;
  }
  else {
    document.getElementById('errorM').innerHTML = '';
    bad = 0;
  }
  if ($('#driver').is(":checked") == true) {
    $("#driver1").attr("checked",true);
    $("#driver2").attr("checked",true);
    $("#driver3").attr("checked",true);
    $("#driver4").attr("checked",true);
    $("#driver5").attr("checked",true);
    $("#driver6").attr("checked",true);
    $("#driver7").attr("checked",true);
    }

  else if ($('#passenger').is(":checked") == true) {
    $("#passenger1").attr("checked",true);
    $("#passenger2").attr("checked",true);
    $("#passenger3").attr("checked",true);
    $("#passenger4").attr("checked",true);
    $("#passenger5").attr("checked",true);
    $("#passenger6").attr("checked",true);
    $("#passenger7").attr("checked",true);  }
  var checked = 0;
  var last;
  //used to check if anything has been checked.  If nothing is checked wont proceed.
  if ($("#mondayC").is(":checked")) {
    checked++;
    last = 0;
  }
  if ($('#tuesdayC').is(":checked")) {
    checked++;
    last = 1;
  }
  if ($('#wednesdayC').is(":checked")) {
    checked++;
    last = 2;
  }
  if ($('#thursdayC').is(":checked")) {
    checked++;
    last = 3;
  }
  if ($('#fridayC').is(":checked")) {
    checked++;
    last = 4;
  }
  if ($('#saturdayC').is(":checked")) {
    checked++;
    last = 5
  }
  if ($('#sundayC').is(":checked")) {
    checked++;
    last = 6;
  }

  
  if (checked == 0) {
    document.getElementById('errorA').innerHTML = 'Please select a day.';
        }
  else {
    document.getElementById('errorA').innerHTML = '';
  }

  var location = document.getElementById('changeMe');

    if ($('#sundayC').is(":checked")) {
    location.setAttribute('href', '#sunday');
  }
    if ($('#saturdayC').is(":checked")) { 
    location.setAttribute('href', '#saturday');
  }
    if ($('#fridayC').is(":checked")) { 
    location.setAttribute('href', '#friday');
  }
    if ($('#thursdayC').is(":checked")) { 
    location.setAttribute('href', '#thursday');
  }
    if ($('#wednesdayC').is(":checked")) { 
    location.setAttribute('href', '#wednesday');
  }
    if ($('#tuesdayC').is(":checked")) { 
    location.setAttribute('href', '#tuesday');
  }
    if ($('#mondayC').is(":checked")) { 
    location.setAttribute('href', '#monday');
  }

  if (bad == 1 || checked == 0) {
    return false;
  }
  else {
      switch (last) {
case 0:
    $("#submit1").append('<input type="submit" data-inline="true" value="Submit"/>');
    break;
case 1:
    $("#submit2").append('<input type="submit" data-inline="true" value="Submit"/>');
    break;
case 2:
    $("#submit3").append('<input type="submit" data-inline="true" value="Submit"/>');
    break;
case 3:
    $("#submit4").append('<input type="submit" data-inline="true" value="Submit"/>');
    break;
case 4:
    $("#submit5").append('<input type="submit" data-inline="true" value="Submit"/>');
    break;
case 5:
    $("#submit6").append('<input type="submit" data-inline="true" value="Submit"/>');
    break;
case 6:
    $("#submit7").append('<input type="submit" data-inline="true" value="Submit"/>');
    break;
}

if ($("#mondayC").is(":checked") && moncheck == 0) {
    $("#head1").append('<a href="#monday" data-role="button">Mon</a>');
    $("#head2").append('<a href="#monday" data-role="button">Mon</a>');
    $("#head3").append('<a href="#monday" data-role="button">Mon</a>');
    $("#head4").append('<a href="#monday" data-role="button">Mon</a>');
    $("#head5").append('<a href="#monday" data-role="button">Mon</a>');
    $("#head6").append('<a href="#monday" data-role="button">Mon</a>');
    $("#head7").append('<a href="#monday" data-role="button">Mon</a>');
    moncheck++;
}
if ($("#tuesdayC").is(":checked") && tuecheck == 0) {
    $("#head1").append('<a href="#tuesday" data-role="button">Tue</a>');
    $("#head2").append('<a href="#tuesday" data-role="button">Tue</a>');
    $("#head3").append('<a href="#tuesday" data-role="button">Tue</a>');
    $("#head4").append('<a href="#tuesday" data-role="button">Tue</a>');
    $("#head5").append('<a href="#tuesday" data-role="button">Tue</a>');
    $("#head6").append('<a href="#tuesday" data-role="button">Tue</a>');
    $("#head7").append('<a href="#tuesday" data-role="button">Tue</a>');
    tuecheck++;
}
if ($("#wednesdayC").is(":checked") && wedcheck == 0) {
    $("#head1").append('<a href="#wednesday" data-role="button">Wed</a>');
    $("#head2").append('<a href="#wednesday" data-role="button">Wed</a>');
    $("#head3").append('<a href="#wednesday" data-role="button">Wed</a>');
    $("#head4").append('<a href="#wednesday" data-role="button">Wed</a>');
    $("#head5").append('<a href="#wednesday" data-role="button">Wed</a>');
    $("#head6").append('<a href="#wednesday" data-role="button">Wed</a>');
    $("#head7").append('<a href="#wednesday" data-role="button">Wed</a>');
    wedcheck++;
}

if ($("#thursdayC").is(":checked") && thucheck == 0) {
    $("#head1").append('<a href="#thursday" data-role="button">Thu</a>');
    $("#head2").append('<a href="#thursday" data-role="button">Thu</a>');
    $("#head3").append('<a href="#thursday" data-role="button">Thu</a>');
    $("#head4").append('<a href="#thursday" data-role="button">Thu</a>');
    $("#head5").append('<a href="#thursday" data-role="button">Thu</a>');
    $("#head6").append('<a href="#thursday" data-role="button">Thu</a>');
    $("#head7").append('<a href="#thursday" data-role="button">Thu</a>');
    thucheck++;
  }

if ($("#fridayC").is(":checked") && fricheck == 0) {
    $("#head1").append('<a href="#friday" data-role="button">Fri</a>');
    $("#head2").append('<a href="#friday" data-role="button">Fri</a>');
    $("#head3").append('<a href="#friday" data-role="button">Fri</a>');
    $("#head4").append('<a href="#friday" data-role="button">Fri</a>');
    $("#head5").append('<a href="#friday" data-role="button">Fri</a>');
    $("#head6").append('<a href="#friday" data-role="button">Fri</a>');
    $("#head7").append('<a href="#friday" data-role="button">Fri</a>');
    fricheck++
}

if ($("#saturdayC").is(":checked") && satcheck == 0) {
    $("#head1").append('<a href="#saturday" data-role="button">Sat</a>');
    $("#head2").append('<a href="#saturday" data-role="button">Sat</a>');
    $("#head3").append('<a href="#saturday" data-role="button">Sat</a>');
    $("#head4").append('<a href="#saturday" data-role="button">Sat</a>');
    $("#head5").append('<a href="#saturday" data-role="button">Sat</a>');
    $("#head6").append('<a href="#saturday" data-role="button">Sat</a>');
    $("#head7").append('<a href="#saturday" data-role="button">Sat</a>');
    satcheck++;
}
if ($("#sundayC").is(":checked") && suncheck == 0) {
    $("#head1").append('<a href="#sunday" data-role="button">Sun</a>');
    $("#head2").append('<a href="#sunday" data-role="button">Sun</a>');
    $("#head3").append('<a href="#sunday" data-role="button">Sun</a>');
    $("#head4").append('<a href="#sunday" data-role="button">Sun</a>');
    $("#head5").append('<a href="#sunday" data-role="button">Sun</a>');
    $("#head6").append('<a href="#sunday" data-role="button">Sun</a>');
    $("#head7").append('<a href="#sunday" data-role="button">Sun</a>');
    suncheck++;
}
}
}


$(document).on("pageinit","#findMatches2",function(){ 
    loadMap();


});

function clearPage() {
document.getElementById('head1').innerHTML = '';
document.getElementById('head2').innerHTML = '';
document.getElementById('head3').innerHTML = '';
document.getElementById('head4').innerHTML = '';
document.getElementById('head5').innerHTML = '';
document.getElementById('head6').innerHTML = '';
document.getElementById('head7').innerHTML = '';
document.getElementById('submit1').innerHTML = '';
document.getElementById('submit2').innerHTML = '';
document.getElementById('submit3').innerHTML = '';
document.getElementById('submit4').innerHTML = '';
document.getElementById('submit5').innerHTML = '';
document.getElementById('submit6').innerHTML = '';
document.getElementById('submit7').innerHTML = '';

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
})

