<?php

namespace App\Livewire\Validation;

trait mapVaidation
{
    // public $attribute = ['name','latitude','longitude'];

    public $name;
    public $latitude;
    public $longitude;


    protected $rules = [
        'name' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
    ];

    //Vaildaion messgae
    protected $messages = [
        'name.required' => ' موقع الخيمة مطلوب',
        'latitude.required' => 'حقل خط الطول الخيمة مطلوب',
        'longitude.required' => 'حقل خط العرض الخيمة مطلوب',
    ];

}
