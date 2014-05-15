/**
All of the public variables go here
**/
var bad = 1;
var days = [];
var info = [];
var currentday;
var depinfo = [];
/**
All of your functions go here. If something needs to be run on initialization, add it into the initalization function
 **/

function buttonGen() {
for (var i = 0; i < days.length; i++) {
    
	
	$("#header_schedule").append('<input type="button" class="ui-btn ui-btn-inline" onclick="submitFiles(); dayChange(' + i + ')" data-role="button" value="'
     + days[i].charAt(0).toUpperCase() + days[i].substring(1,3) + '">');
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
  info.push(hour + $("#minute").val() + document.getElementById("day").innerHTML.substring(0,2));
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
}

  
function sortInfo() {
var count = 0;
while (count < 5) {

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

  count++;
}
  alert(info);
}
//add submit files to next button
function dayChange(num) {
  currentday = num;
  document.getElementById("day").innerHTML = days[num].charAt(0).toUpperCase() + days[num].substring(1,days[num].length);
  currentday++;
  if (currentday != days.length) {
    $("#next").attr("onclick", "submitFiles();dayChange(" + currentday + ")");
    $("#next").val("Next");
    $("#next").button("refresh");}
  else {
    $("#next").attr("onclick", "finalSubmit()");
    $("#next").val("Submit");
    $("#next").button("refresh");
  }
}
function finalSubmit(){
// do stuff
alert("bananas");
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
    if (bad == 0) {
  if ($("#mondayC").is(":checked")) {
    days.push('monday');
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
if (bad == 0 && days.length != 0) {
    document.getElementById("day").innerHTML = days[0].charAt(0).toUpperCase() + days[0].substring(1,days[0].length);
    buttonGen();
  } else {
    return false;
  }
}
}
function clearPage() {
days = [];
$("#header_schedule").html('');  
info = [];
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


