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
            <input type="hidden" id="name" value="{{ $map->name }}">
            <input type="hidden" id="latitude" value="{{ $map->latitude }}">
            <input type="hidden" id="longitude" value="{{ $map->longitude }}">
        </div>
    </div>    
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="{{ asset('leaflet/leaflet.js') }}"></script>
    <!-- Map with Leaflet -->
     <script src="{{ asset('leaflet/showmapLeaflet.js') }}"></script>
  </body>
</html>