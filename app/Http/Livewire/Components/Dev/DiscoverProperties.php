<?php

namespace App\Http\Livewire\Components\Dev;

use Livewire\Component;
use App\Models\MasterCity;

class DiscoverProperties extends Component
{
    // public $cities;

    public function render()
    {

        //get data from master_cities
        $cities = MasterCity::all();

        return view('livewire.components.dev.discover-properties', compact('cities'));
    }
}
