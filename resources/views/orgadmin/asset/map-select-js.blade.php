
  <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDjS5QXqKr4vDPLOTUwFcmn8oDSjQIawNc'></script>
      <script id="rendered-js" >
var map; //Will contain map object.
var marker = false; ////Has the user plotted their location marker? 

//Function called to initialize / create the map.
//This is called when the page has loaded.
function initMap() {

  //The center location of our map.
  var centerOfMap = new google.maps.LatLng(-35.473469 , 149.012375 );

  //Map options.
  var options = {
    center: centerOfMap, //Set center.
    zoom: 7 //The zoom value.
  };

  //Create the map object.
  map = new google.maps.Map(document.getElementById('map'), options);

  //Listen for any clicks on the map.
  google.maps.event.addListener(map, 'click', function (event) {
    //Get the location that the user clicked.
    var clickedLocation = event.latLng;
    //If the marker hasn't been added.
    if (marker === false) {
      //Create the marker.
      marker = new google.maps.Marker({
        position: clickedLocation,
        map: map });

      //Listen for drag events!
    } else {
      //Marker has already been added, so just change its location.
      marker.setPosition(clickedLocation);
    }
    //Get the marker's location.
    markerLocation();
  });
}

//This function will get the marker's current location and then add the lat/long
//values to our textfields so that we can save the location.
function markerLocation() {
  //Get location.
  var currentLocation = marker.getPosition();
  //Add lat and lng values to a field that we can save.
  document.getElementById('lat').value = currentLocation.lat(); //latitude
  document.getElementById('lng').value = currentLocation.lng(); //longitude
}


//Load the map when the page has finished loading.
google.maps.event.addDomListener(window, 'load', initMap);
//# sourceURL=pen.js
    </script>
