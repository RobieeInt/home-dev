<?php

namespace App\Http\Livewire\Components\Dev;

use Livewire\Component;
use App\Models\contactus;

class Footer extends Component
{
    public $contactus;
    public function render()
    {
        $this->contactus = contactus::first();
        return view('livewire.components.dev.footer');
    }
}
