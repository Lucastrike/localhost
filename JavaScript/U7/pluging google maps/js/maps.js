
function initMap() {
  var uluru = {lat: 39.4561165, lng: -0.3545661};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}
