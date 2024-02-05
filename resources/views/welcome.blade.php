<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Bootstrap demo</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
        <nav></nav>
        <main class="py-4">
            @yield('content')
        </main> 
    </div>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuDa9tqacEi5u-Ct9iLcnNqaQXIPz3cn4&loading=async&region=JP&language=ar&callback=initMap">
</script> --}}
    <script src="{{ asset('leaflet/mapLeaflet.js') }}"></script>
    <script async src="{{ asset('leaflet/mapsGoogleapis.js') }}"></script>
  </body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adventure Buddies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <!-- Map Section using GMP components -->
  <div id="map" style="height: 300px;"></div>
                    

  
   <!-- Hidden input fields for latitude and longitude -->
  <input type="text" id="latitude" name="latitude">
  <input type="text" id="longitude" name="longitude">
    <!-- Additional scripts for Google Maps Platform and Places Autocomplete -->
    <script>
      function initMap() {
          const map = new google.maps.Map(document.getElementById('map'), {
              center: { lat: 49.98841094970703, lng: 6.497772216796875 },
              zoom: 14,
          });
  
          const input = document.getElementById('location');
          const autocomplete = new google.maps.places.Autocomplete(input);
  
          autocomplete.addListener('place_changed', function() {
              const place = autocomplete.getPlace();
              
              if (place.geometry) {
                  map.setCenter(place.geometry.location);
                  map.setZoom(14);
  
                  // You can also add a marker at the selected location if needed
                  const marker = new google.maps.Marker({
                      position: place.geometry.location,
                      map: map,
                      title: place.name
                  });
  
                  // Store the GPS coordinates in your form or send them to the server
                  document.getElementById('latitude').value = place.geometry.location.lat();
                  document.getElementById('longitude').value = place.geometry.location.lng();
              }
          });
      }
  </script>
  <script async
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe-3hs_UvSzw68By3DFkObD8v_MwgG7R4&loading=async&region=JP&language=ar&callback=initMap">
</script>
</body> --}}