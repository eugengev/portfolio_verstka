function initialize() {
  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    zoom: 17,
    scrollwheel: false,
    center: {lat: 53.8617756, lng: 27.4802513}
  });

  var image = 'js/helix-map.png';
  var beachMarker = new google.maps.Marker({
    position: {lat: 53.8617756, lng: 27.4802513},
    map: map,
    icon: image
  });
}