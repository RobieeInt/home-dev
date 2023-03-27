<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulasiKprController extends Controller
{
    public function index (Request $request) {


        return view('SimulasiKpr');
    }
}
