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
    return redirect('/home');
});
// Route::get('/earn', function () {
//     return view('earn');
// });
Route::get('/rewards', function () {
    return view('rewards');
}); 
Route::get('/starter_zone', function () {
    return view('starter_zone');
});
Route::get('/profile', function () {
    return view('profile');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource( '/earn', App\Http\Controllers\EarnController::class )->middleware('auth');
Route::post('/get_lootably_offers', [App\Http\Controllers\EarnController::class, 'lootably_offers'])->middleware('auth');
Route::post('/get_notik_offers', [App\Http\Controllers\EarnController::class, 'notik_offers'])->middleware('auth');
Route::post('/get_iframe', [App\Http\Controllers\EarnController::class, 'get_iframe'])->middleware('auth');
// Route::resource( '/starter_zone', App\Http\Controllers\StarterZoneController::class );
// Route::resource( '/rewards', App\Http\Controllers\RewardsController::class );
