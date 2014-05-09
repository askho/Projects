function grabMarkers() {
    $.ajax({ 
    type: 'GET', 
    url: 'sampleJson.php', 
    data: { get_param: 'value', day: 'monday'}, 
    dataType: 'json',
    success: function (data) { 
        alert("Test");
            alert(data.markers[0].location);
        }
    }
    );
}