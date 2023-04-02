<?php

namespace App\Http\Controllers;

use App\Models\aboutus;
use App\Models\contactus;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index (Request $request) {

        //get about us and contactus
        $aboutus = aboutus::where('status', 1)->first();
        $contactus = contactus::first();

        return view('Aboutus', compact('aboutus', 'contactus'));
    }
}
