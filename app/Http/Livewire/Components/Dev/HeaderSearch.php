<?php

namespace App\Http\Livewire\Components\Dev;

use App\Models\MasterCity;
use Livewire\Component;
use App\Models\MasterUnit;

class HeaderSearch extends Component
{
    public $master_units, $master_cities;
    public function render()
    {
        //get master_units
        $this->master_units = MasterUnit::all();
        //get master_city
        $this->master_cities = MasterCity::all();
        // dd($this->master_units);
        return view('livewire.components.dev.header-search');
    }
}
