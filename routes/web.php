<?php

use App\Http\Controllers\ColorController;
use App\Http\Controllers\VoitureController;
use App\Models\Voiture;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('voiture', VoitureController::class);
Route::resource('color', ColorController::class);

Route::get('/section', function () {
    $voitures = Voiture::all();
    return view('pages.section', compact('voitures'));
})->name('section');
