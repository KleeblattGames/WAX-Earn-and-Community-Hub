<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;

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
<<<<<<< HEAD
    return redirect('/starter_zone');
})->middleware("auth");
=======
    return redirect('/home');
});
>>>>>>> 77ce2b3203c8239d79a8928c83ec3407021881f5
Route::get('/earn', function () {
    return view('earn');
})->middleware("auth");
Route::get('/rewards', function () {
    return view('rewards');
})->middleware("auth"); 
Route::get('/starter_zone', function () {
    return view('starter_zone');
})->middleware("auth");
Route::get('/profile', function () {
    return view('profile');
})->middleware("auth");
Route::get('/profile', function () {
    return view('profile');
})->middleware("auth");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource( '/earn', App\Http\Controllers\EarnController::class )->middleware('auth');
Route::post('/get_lootably_offers', [App\Http\Controllers\EarnController::class, 'lootably_offers'])->middleware('auth');
Route::post('/get_notik_offers', [App\Http\Controllers\EarnController::class, 'notik_offers'])->middleware('auth');
Route::post('/get_iframe', [App\Http\Controllers\EarnController::class, 'get_iframe'])->middleware('auth');
// Route::resource( '/starter_zone', App\Http\Controllers\StarterZoneController::class );
// Route::resource( '/rewards', App\Http\Controllers\RewardsController::class );
