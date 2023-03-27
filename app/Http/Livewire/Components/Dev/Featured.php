<?php

namespace App\Http\Livewire\Components\Dev;

use Livewire\Component;
use App\Models\HomeProperty;

class Featured extends Component
{
    public function render()
    {
        //get all homeproperty, province, city,detail,amenities,nearby,user,images
        $homeproperties = HomeProperty::with('province', 'city', 'detail', 'amenities', 'nearby', 'user', 'images', 'unit')->get();
        // dd($homeproperties);
        return view('livewire.components.dev.featured', compact('homeproperties'));
    }
}
