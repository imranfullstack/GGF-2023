
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGgMbsGTS2o7QRB8OILsw8dYqGdcGsnRY&callback=initMap&libraries=places" async defer></script>
<script id="rendered-js">
  function initializeAutocomplete() {
    var input = document.getElementById("locality");
    // var options = {
    //   types: ['(regions)'],
    //   componentRestrictions: {country: "IN"}
    // };
    var options = {};

    var autocomplete = new google.maps.places.Autocomplete(input, options);

    google.maps.event.addListener(
      autocomplete,
      "place_changed",
      function () {
        var place = autocomplete.getPlace();
        var lat = place.geometry.location.lat();
        var lng = place.geometry.location.lng();
        var placeId = place.place_id;
        // to set city name, using the locality param
        var componentForm = {
          locality: "short_name",
        };

        for (var i = 0; i < place.address_components.length; i++) {
          if (window.CP.shouldStopExecution(0)) break;
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val =
              place.address_components[i][componentForm[addressType]];
            document.getElementById("city").value = val;
          }
        }
        window.CP.exitedLoop(0);
        document.getElementById("latitude").value = lat;
        document.getElementById("longitude").value = lng;
        document.getElementById("location_id").value = placeId;
      }
    );
  }
  //# sourceURL=pen.js Emon
</script>