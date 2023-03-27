<?php

namespace App\Http\Livewire\Components\Dev;

use Livewire\Component;
use App\Models\HomeProperty;
use App\Models\MasterCity;

class PropertyDetail extends Component
{
    public $detailProperties;
    public $properties;
    public $cities;
    public $properties3;
    public $home;

    public function render()
    {
        // $slug = 'home-1';
        //get all homeproperty, province, city,detail,amenities,nearby,user,images
        // $this->detailProperties = HomeProperty::where('slug', $slug)->first();

        // dd($this->detailProperties);
        $this->home = $this->detailProperties->toArray();

        //get property except this $detailProperties
        $this->properties = HomeProperty::where('name', '!=', $this->detailProperties->name)->get();

        //random properties max 3 except this $detailProperties
        $this->properties3 = HomeProperty::where('name', '!=', $this->detailProperties->name)->inRandomOrder()->limit(3)->get();

        //get city all
        $this->cities = MasterCity::all();

        //get homeproperty by slug with province, city,detail,amenities,nearby,user,images
        // $this->detailProperties = HomeProperty::with('province', 'city', 'detail', 'amenities', 'nearby', 'user', 'images')->where('slug', $slug)->first();
        // dd($this->detailProperties);
        return view('livewire.components.dev.property-detail');
    }
}
