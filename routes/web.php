<?php

use App\Http\Controllers\AlllocalnewsController;
use App\Http\Controllers\AllonlinetvController;
use App\Http\Controllers\Top10englishController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\home;
use \App\Http\Controllers\TopbanglaController;
use \App\Http\Controllers\Top10tvController;
use \App\Http\Controllers\Top10portalController;
use \App\Http\Controllers\AllbanglanewsController;
use \App\Http\Controllers\AllenglishnewsController;

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


// Home Route
Route::get('/', [home::class, 'home'])->name('home');
Route::get('headline', [home::class, 'headline'])->name('headline');
Route::get('world', [home::class, 'world'])->name('world');
Route::get('ucon', [home::class, 'ucon'])->name('ucon');
Route::get('corona', [home::class, 'corona'])->name('corona');
Route::get('contact', [home::class, 'contact'])->name('contact');
Route::post('contact', [home::class, 'store']);



// Admin Route

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
Route::get('/dashboard', function () {
return view('backpage.home');
})->name('dashboard');

//Bangla
Route::get('/top10bangla', [TopbanglaController::class, 'index'])->name('top10bangla');
Route::post('/top10bangla', [TopbanglaController::class, 'store']);
Route::get('/top10bangla/{id}', [TopbanglaController::class, 'destroy'])->name('delete');

//TV
    Route::get('/top10tv', [Top10tvController::class, 'index'])->name('top10tv');
    Route::post('/top10tv', [Top10tvController::class, 'store']);
    Route::get('/top10tv/{id}', [Top10tvController::class, 'destroy'])->name('delete');


    //Portal bangla
    Route::get('/top10portal', [Top10portalController::class, 'index'])->name('top10portal');
    Route::post('/top10portal', [Top10portalController::class, 'store']);
    Route::get('/top10portal/{id}', [Top10portalController::class, 'destroy'])->name('delete');


    //Portal English
    Route::get('/top10english', [Top10englishController::class, 'index'])->name('top10english');
    Route::post('/top10english', [Top10englishController::class, 'store']);
    Route::get('/top10english/{id}', [Top10englishController::class, 'destroy'])->name('delete');

    ////////////////////////////////   All News paper link   ///////////////////////////////////////

    //All Bangla News link
    Route::get('/allbanglanews', [AllbanglanewsController::class, 'index'])->name('allbanglanews');
    Route::post('/allbanglanews', [AllbanglanewsController::class, 'store']);
    Route::get('/allbanglanews/{id}', [AllbanglanewsController::class, 'destroy'])->name('delete');


    //All Local News link
    Route::get('/alllocalnews', [AlllocalnewsController::class, 'index'])->name('alllocalnews');
    Route::post('/alllocalnews', [AlllocalnewsController::class, 'store']);
    Route::get('/alllocalnews/{id}', [AlllocalnewsController::class, 'destroy'])->name('delete');


    //All Online TV link
    Route::get('/allonlinetv', [AllonlinetvController::class, 'index'])->name('allonlinetv');
    Route::post('/allonlinetv', [AllonlinetvController::class, 'store']);
    Route::get('/allonlinetv/{id}', [AllonlinetvController::class, 'destroy'])->name('delete');


    //All English News link
    Route::get('/allenglishnews', [AllenglishnewsController::class, 'index'])->name('allenglishnews');
    Route::post('/allenglishnews', [AllenglishnewsController::class, 'store']);
    Route::get('/allenglishnews/{id}', [AllenglishnewsController::class, 'destroy'])->name('delete');
});







