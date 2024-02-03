<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('leaflet/leaflet.css') }}" />
  </head>
  <body>
    <div class="container-sm">
        <div class="mb-3 col-md-12 ">
            <h3 class="form-label">الموقع </h3>
            <div id="mapid" style="height: 350px;"></div>
        </div>
        <div>
          @livewire('RigisterForm')
          <div class="container">
              <!-- Button trigger modal -->
              <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapmodal">
                  Add new map
              </button>
              @if (session()->has('success'))
            <div data-success="success" id="success-message"
            class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <strong id="successm">{{ session()->get('success') }}</strong>
            </div>
        @endif
          </div>
      </div>
    </div>    
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="{{ asset('leaflet/leaflet.js') }}"></script>
    <!-- Map with Leaflet -->
     <script type="text/javascript">
          var latitude = {!! $maps->pluck('latitude') !!};
          var longitude = {!! $maps->pluck('longitude') !!};
          
          var map = L.map('mapid');

          L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);

          var markers = [];

          for(var i=0; i < longitude.length; i++){
            markers.push(new L.marker([latitude[i], longitude[i]]).addTo(map));
          }

          var group = new L.featureGroup(markers).getBounds();

          map.fitBounds([
            group
          ]);
    </script>
        <script>
          setTimeout(function() {
              document.getElementById('success-message').style.display = 'none';
          }, 3000); // 3000 مللي ثانية = 3 ثواني
      </script>
  </body>
</html>