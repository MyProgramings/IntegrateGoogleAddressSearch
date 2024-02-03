<?php

use App\Http\Controllers\MapController;
use App\Livewire\MapComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('map.index');
});

Route::post('storeMap', [MapController::class, 'store'])->name('createMap');
// Route::get('/show/{id}', [MapController::class, 'show_map']);
Route::resource('maps', MapController::class);
Route::get('livewire-maps', MapComponent::class);
