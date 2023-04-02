<?php

namespace App\Http\Livewire\Components\Dev;

use Livewire\Component;
use App\Models\contactus;
use App\Models\aboutus as about;


class AboutUs extends Component
{
    public $contactus, $aboutus;

    public function render()
    {
        $this->contactus = contactus::first();
        $this->aboutus = about::first();
        // dd($this->aboutus);
        return view('livewire.components.dev.about-us');
    }
}
