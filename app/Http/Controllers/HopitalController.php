<?php

namespace App\Http\Controllers;

use App\Models\hopital;
use Illuminate\Http\Request;

class HopitalController extends Controller
{
    public function index()
    {
        $hopitals = hopital::all();
        return view('template.hopital', compact('hopital'));
    }
    public function show(hopital $hopital)
    {
        //
    }
}

