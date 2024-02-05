@extends('welcome')

@section('content')

<div>
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapmodal">
            Add new map
        </button>
    </div>
    <!-- Modal -->
<div class="modal fade" id="mapmodal" tabindex="-1" aria-labelledby="mapmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong id="modal_title">{{ session('title') }}</strong></h4>
                <i type="reset" data-bs-dismiss="modal" aria-label="Close"
                    class="las las la-times text-danger scale5 cancel-modal"></i>
            </div>
            <div class="modal-body">
                <div class="container-sm">
                    <form action="{{ route('createMap') }}" method="POST">
                        @csrf
                        <div class=" mb-3 col-md-6 ">
                            <label class="form-label" for="name">خط الطول </label>
                            <input type="text" id="name" required="" value="{{ old('name') }}"
                                name="name" class="form-control">
                        </div>
                        <div class=" mb-3 col-md-12 ">
                            <label class="form-label" for="location">الموقع </label>
                            <div id="map" style="height: 350px;"></div>
                            <div class="fv-plugins-message-container invalid-feedback ">
                                الرجاء إدخال الموقع
                            </div>
                            @error('location')
                                <div class="text-danger px-2 showValidationError ">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                
                        <div class=" mb-3 col-md-6 ">
                            <label class="form-label" for="latitude">خط الطول </label>
                            <input type="text" id="latitude" readonly="true" required="" value="{{ old('latitude') }}"
                                name="latitude" class="form-control">
                        </div>
                
                        <div class=" mb-3 col-md-6 ">
                            <label class="form-label" for="longitude">خط العرض </label>
                            <input type="text" id="longitude" readonly="true" required="" value="{{ old('longitude') }}"
                                name="longitude" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>   
            </div>
        </div>
    </div>
  </div>
</div>
    
@endsection

{{-- <!doctype html>
<html lang="en">
  <head>
    <title>Google Autocomplete Address Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <form action="{{ route('createMap') }}" method="POST">
                    @csrf
                    <div class="card-header bg-primary">
                        <h5 class="card-title text-white"> Google Autocomplete Address</h5>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name"> Location/City/Address </label>
                            <input type="text" name="name" id="autocomplete" class="form-control" placeholder="Select Location">
                        </div>

                        <div class="form-group" id="lat_area">
                            <label for="latitude"> Latitude </label>
                            <input type="text" name="latitude" id="latitude" class="form-control">
                        </div>

                        <div class="form-group" id="long_area">
                            <label for="longitude"> Longitude </label>
                            <input type="text" name="longitude" id="longitude" class="form-control">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"> Submit </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&libraries=places&callback=initAutocomplete" type="text/javascript"></script>

   <script>
       $(document).ready(function() {
            $("#lat_area").addClass("d-none");
            $("#long_area").addClass("d-none");
       });
   </script>


   <script>
       google.maps.event.addDomListener(window, 'load', initialize);

       function initialize() {
           var input = document.getElementById('autocomplete');
           var autocomplete = new google.maps.places.Autocomplete(input);
           autocomplete.addListener('place_changed', function() {
               var place = autocomplete.getPlace();
               $('#latitude').val(place.geometry['location'].lat());
               $('#longitude').val(place.geometry['location'].lng());

            // --------- show lat and long ---------------
               $("#lat_area").removeClass("d-none");
               $("#long_area").removeClass("d-none");
           });
       }
    </script>
  </body>
</html> --}}
