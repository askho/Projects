var directionsDisplay;
var directionsService;
function initializeMap() {
  var mapOptions = {
    zoom: 12,
    center: new google.maps.LatLng(49.251825, -123.003978 )
  };

  this.map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
}
function initializeMap() {
    var mapOptions = {
    zoom: 12,
      
    center: new google.maps.LatLng(49.251825, -123.003978 )
  };

    this.map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    loadDirectionService();
    calcRoute();
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
function test() {
  var trafficLayer = new google.maps.TrafficLayer();
  trafficLayer.setMap(map);
}
function loadDirectionService() {
    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map);
}
function calcRoute() {
  var start = new google.maps.LatLng(049.152451, -122.3202850);
  var end = new google.maps.LatLng(049.251825, -123.0039780);
  var waypts = [];
  var checkboxArray = document.getElementById('waypoints');
      waypts.push({
          location:new google.maps.LatLng(049.215760, -122.5758430),
          stopover:true});
    waypts.push({
        location: new google.maps.LatLng(049.152451, -122.3202850),
    });
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