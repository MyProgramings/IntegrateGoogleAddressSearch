<div wire:ignore>

    
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
                        <form wire:submit.prevent="store">
                            <div class=" mb-3 col-md-6 ">
                                <label class="form-label" for="name">خط الطول </label>
                                <input wire:model="name" type="text" id="name" required="" value="{{ old('name') }}"
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
                                <input wire:model="latitude" type="text" id="latitude" required="" value="{{ old('latitude') }}"
                                    name="latitude" class="form-control">
                            </div>
                    
                            <div class=" mb-3 col-md-6 ">
                                <label class="form-label" for="longitude">خط العرض </label>
                                <input wire:model="longitude" type="text" id="longitude" required="" value="{{ old('longitude') }}"
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
        
    </div>