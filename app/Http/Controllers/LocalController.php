<?php

namespace App\Http\Controllers;

use App\Models\local;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function index()
    {
        $local = local::all();
        return view('template.local', compact('local'));
    }
    
}

