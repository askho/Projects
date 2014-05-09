/**
All of the public variables go here
**/
var days = [];
var info = [];
/**
All of your functions go here. If something needs to be run on initialization, add it into the initalization function
 **/


function submitFinal() {
  //if days.length
}

function buttonGen() {
for(var i = 0; i < days.length; i++) {
    $("#head1").append('<a onclick="submitFiles(' + i + ');  + dayChange(' + i + ')" data-role="button">'
     + days[i].charAt(0).toUpperCase() + days[i].substring(1,3) + '</a>');
}
}


function submitFiles(nums) {
var hour = 0;
if (!($('#hour1').val()) || !($('#minute').val())) 
{
 
}
else {
  if ($("#am").val() == 'pm') {
    hour = parseInt($("#hour1").val()) + 12;
  }
  else {
    hour = $("#hour1").val();
  }
  info.push(hour + $("#minute").val() + document.getElementById("day").innerHTML.substring(0,2));
  alert(info);
}
}

function dayChange(num) {
  document.getElementById("day").innerHTML = days[num].charAt(0).toUpperCase() + days[num].substring(1,days[num].length);;
}

function radioCheck() {
  $('#head1').html('');
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
    }

  else if ($('#passenger').is(":checked") == true) {
    $("#passenger1").attr("checked",true);
    }
  var checked = 0;
  //used to check if anything has been checked.  If nothing is checked wont proceed.
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
  
  if (days.length == 0) {
    document.getElementById('errorA').innerHTML = 'Please select a day.';
        }
  else {
    document.getElementById('errorA').innerHTML = '';
  }



  if (bad == 1 || days.length == 0) {
    return false;
  }
  else {
    document.getElementById("day").innerHTML = days[0].charAt(0).toUpperCase() + days[0].substring(1,days[0].length);
    buttonGen();
  }
}

$(document).on("pageinit","#schedule",function(){
  loadMap();
})

function clearPage() {
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

