var latitude = $('#latitude').val();
var longitude = $('#longitude').val();

var map = L.map('mapid', {
    center : [latitude, longitude],
    zoom : 13
});
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);
L.marker([latitude, longitude]).bindPopup($('#name').val()).addTo(map).openPopup();