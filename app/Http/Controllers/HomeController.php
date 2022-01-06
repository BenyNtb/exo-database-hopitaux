<?php

namespace App\Http\Controllers;

use App\Models\hopital;
use App\Models\local;
use App\Models\patient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hopitals = hopital::all();
        $patients = patient::all();
        $locals = local::all();
        // $locals = local::where('local', 1)->get();
        return view('home', compact('hopitals', 'patients', 'locals'));
    }
}
