<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HopitalController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);


// P A T I E N T

//read
Route::get('template/patient', [PatientController::class, 'index'])->name('patients.index');


// H O P I T A L 

//read
Route::get('template/hopital', [HopitalController::class, 'index'])->name('hopitals.index');

// I N F O 

Route::get('/template/local', function(){
    return view('local.index');
})->name('local');
