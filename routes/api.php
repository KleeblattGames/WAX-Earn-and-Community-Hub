<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/notik_callback', [App\Http\Controllers\NotikPostbackController::class, 'handlePostback'])->name('notik_callback');
Route::get('/lootably_callback', [App\Http\Controllers\LootablyPostbackController::class, 'handlePostback'])->name('lootably_callback');