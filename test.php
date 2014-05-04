<!DOCTYPE HTML>
<html>
<head>
    <style type="text/css">
      #map-canvas { height: 900px; width:100%; }
    </style>
    <script type="text/javascript">  
        var markers = [];
        
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

window.onload=loadMap;
    </script>    
</head>
<body>

    
<input onclick="showMarkers();" type=button value="Show All Markers">
<input onclick="addMarker();" type=button value="Add Marker">
    <div id="map-canvas"/>
</body>
</html>