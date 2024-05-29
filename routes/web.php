<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\foodMenuController; // Import the foodMenuController

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//activity 7
Route::view('/studentinput','studentinput');
Route::post('/store',[studentController::class, 'store']);
Route::get('/studentshow',[studentController::class, 'show']);


//food menu test
Route::view('/input','input');
Route::post('/store',[foodMenuController::class, 'store']);
Route::get('/showkitchen',[foodMenuController::class, 'show']);