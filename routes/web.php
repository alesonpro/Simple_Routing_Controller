<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\SkillsController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

// About me route
Route::get('/about_me', [AboutMeController::class, 'index']);

// Skills route
Route::get('/skills', [SkillsController::class, 'index']);


// Hobbies route
Route::get('/hobbies', [HobbiesController::class, 'index']);
