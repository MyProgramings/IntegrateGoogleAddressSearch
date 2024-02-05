<?php

namespace App\Livewire;

use App\Livewire\Validation\mapVaidation;
use App\Models\Map;
use Livewire\Component;

class MapComponent extends Component
{
    use mapVaidation;


    public function store()
    {
        $data = $this->validate();
        dd($data);
        try {
            Map::create($data);
            session()->flash('success', 'تمت العملية بنجاح');
            $this->reset('name','latitude','longitude');
        } catch (\Throwable $th) {
            session()->flash('error', 'عذرا لم تتم العملية');
        }
    }

    public function render()
    {
        return view('livewire.map-component')->extends('welcome');
    }
}
