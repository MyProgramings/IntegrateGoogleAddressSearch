let map;
function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8,
        scrollwheel: true,
    });
    const uluru = { lat: -34.397, lng: 150.644 };
    let marker = new google.maps.Marker({
        position: uluru,
        map: map,
        draggable: true
    });

    // move pin and current location
    // infoWindow = new google.maps.InfoWindow;
    geocoder = new google.maps.Geocoder();
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            map.setCenter(pos);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(pos),
                map: map,
                title: 'موقعك الحالي'
            });
            markers.push(marker);
            marker.addListener('click', function() {
                geocodeLatLng(geocoder, map, infoWindow,marker);
            });
            // to get current position address on load
            google.maps.event.trigger(marker, 'click');
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        console.log('dsdsdsdsddsd');
        handleLocationError(false, infoWindow, map.getCenter());
    }
    google.maps.event.addListener(marker,'position_changed',
        function (){
            let lat = marker.position.lat()
            let lng = marker.position.lng()
            $('#latitude').val(lat)
            $('#longitude').val(lng)
        })
    google.maps.event.addListener(map,'click',
    function (event){
        pos = event.latLng
        marker.setPosition(pos)
    })
}

// let map;

// async function initMap() {
//   const { Map } = await window.google.maps.importLibrary("maps");

//   map = new Map(document.getElementById("map"), {
//     center: { lat: -34.397, lng: 150.644 },
//     zoom: 8,
//     // mapTypeId: 'satellite',
//   });
//     const marker = new google.maps.Marker({
//     position: myLatlng,
//     map,
//     title: "Click to zoom",
//   });
// }

// initMap();
