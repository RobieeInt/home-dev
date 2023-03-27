<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailProperty;
use App\Models\HomeProperty;

class DetailPropertyController extends Controller
{
    public function index ($slug) {
        // $slug = 'home-1';
        //get from request
        // $detailProperties = HomeProperty::where('slug', $slug)->first();

        //get from request
        $detailProperties = HomeProperty::with('province', 'city', 'detail', 'amenities', 'nearby', 'user', 'images', 'unit')->where('slug', $slug)->first();
        // dd($detailProperties);
        return view('DetailProperty', compact('detailProperties'));
    }
}
