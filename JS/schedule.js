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
}


function loadInfo() {
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
      if ((info[i].substring(info[i].length-2, info[i].length) == info[a].substring(info[a].length-2, info[a].length)) && a != i ){
        info.splice(i,1);
      }
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
    $("#next").attr("onclick", "submitFiles();dayChange(" + currentday + ");loadInfo();");
    $("#next").val("Next");
    $("#next").button("refresh");}
  else {
    $("#next").attr("onclick", "submitFiles();finalSubmit()");
    $("#next").val("Submit");
    $("#next").button("refresh");
  }
}

function finalSubmit(){
// do stuff
var daystr;
var today;
var address;
orderInfo();
for (var i = 0; i < nInfo.length; i += 2) {
  if ( nInfo[i] != null ) {
    daystr = nInfo[i];
    today = nInfo[i+1];
    address = rsaddress[i/2];
$.ajax({
  type: 'GET',
  url: 'php/schedule.php',
  data: {curday: today, dayinf: daystr, caddress: address},
  success: function(data) {
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
    ran++;
  } else {
    return false;
  }
}
if (days.length == 1) { 
    $("#next").attr("onclick", "submitFiles();finalSubmit()");
    $("#next").val("Submit");
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
        rslatlong[currentday - 1] = results[0].geometry.location;

        var marker = new google.maps.Marker({
            map2: map2,
            position: results[0].geometry.location,
            title: address 
        });
        holdmarker[currentday-1] = marker;
        marker.setMap(map2);
        rsmarker = marker;
      }
    });
  }


