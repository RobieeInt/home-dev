<?php

namespace App\Http\Livewire\Components\Dev;

use Livewire\Component;
use App\Models\MasterCity;
use App\Models\MasterUnit;
use App\Models\HomeProperty;
use App\Services\Ecommerce\HomeDev;

class SearchProperties extends Component
{

    // public $master_units, $master_cities, $properties , $searchInput;
    public $searchInput, $byUnit;
    public $test = "value ya ";
    public $lat, $lang;
    public $home;


    public function render()
    {
         //get master_units
        $master_units = MasterUnit::all();
         //get master_city
        $master_cities = MasterCity::all();
        $properties = HomeProperty::with('province', 'city', 'detail', 'amenities', 'nearby', 'user', 'images', 'unit')->get();

        //get $properties as global variable home and convert to array
        $this->home = $properties->toArray();




        // dd($properties);


        //if has $searchinput search by $this->properties by input
        if($this->searchInput){
            //search input by name, city name, unit name, address,
            $properties = $properties->filter(function($property) {
                return str_contains(strtolower($property->name), strtolower($this->searchInput)) ||
                str_contains(strtolower($property->city->name), strtolower($this->searchInput)) ||
                str_contains(strtolower($property->unit->name), strtolower($this->searchInput)) ||
                str_contains(strtolower($property->address), strtolower($this->searchInput));
            });

            //send new variable $this->home
            $this->home = $properties->toArray();

        }





        return view('livewire.components.dev.search-properties',[
            'master_units' => $master_units,
            'master_cities' => $master_cities,
            'properties' => $properties
        ]);
    }
}
