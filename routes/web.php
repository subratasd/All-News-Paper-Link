<?php

use App\Http\Controllers\AlllocalnewsController;
use App\Http\Controllers\AllonlinetvController;
use App\Http\Controllers\BanglaenglishController;
use App\Http\Controllers\BanglafmController;
use App\Http\Controllers\BanglajobController;
use App\Http\Controllers\BanglamagazinController;
use App\Http\Controllers\BanglaonlinController;
use App\Http\Controllers\BanglatechController;
use App\Http\Controllers\ShearbazarController;
use App\Http\Controllers\Top10englishController;
use App\Http\Controllers\WestbangleController;
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
Route::get('job', [home::class, 'job'])->name('job');
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

    //Bangla English News link
    Route::get('/banglaenglish', [banglaenglishController::class, 'index'])->name('banglaenglish');
    Route::post('/banglaenglish', [banglaenglishController::class, 'store']);
    Route::get('/banglaenglish/{id}', [banglaenglishController::class, 'destroy'])->name('delete');

    // Shear Bazar News link
    Route::get('/shearbazar', [ShearbazarController::class, 'index'])->name('shearbazar');
    Route::post('/shearbazar', [ShearbazarController::class, 'store']);
    Route::get('/shearbazar/{id}', [ShearbazarController::class, 'destroy'])->name('delete');


    // Shear Bazar News link
    Route::get('/westbengal', [WestbangleController::class, 'index'])->name('westbengal');
    Route::post('/westbengal', [WestbangleController::class, 'store']);
    Route::get('/westbengal/{id}', [WestbangleController::class, 'destroy'])->name('delete');


    // Bangla Onlin News link
    Route::get('/banglaonlin', [BanglaonlinController::class, 'index'])->name('banglaonlin');
    Route::post('/banglaonlin', [BanglaonlinController::class, 'store']);
    Route::get('/banglaonlin/{id}', [BanglaonlinController::class, 'destroy'])->name('delete');


    // Bangla Magazine link
    Route::get('/banglamagazin', [BanglamagazinController::class, 'index'])->name('banglamagazin');
    Route::post('/banglamagazin', [BanglamagazinController::class, 'store']);
    Route::get('/banglamagazin/{id}', [BanglamagazinController::class, 'destroy'])->name('delete');

    // Bangla Job link
    Route::get('/banglajob', [BanglajobController::class, 'index'])->name('banglajob');
    Route::post('/banglajob', [BanglajobController::class, 'store']);
    Route::get('/banglajob/{id}', [BanglajobController::class, 'destroy'])->name('delete');

    // Bangla Tech Site Link
    Route::get('/banglatech', [BanglatechController::class, 'index'])->name('banglatech');
    Route::post('/banglatech', [BanglatechController::class, 'store']);
    Route::get('/banglatech/{id}', [BanglatechController::class, 'destroy'])->name('delete');

    // Bangla FM Radio
    Route::get('/banglafm', [BanglafmController::class, 'index'])->name('banglafm');
    Route::post('/banglafm', [BanglafmController::class, 'store']);
    Route::get('/banglafm/{id}', [BanglafmController::class, 'destroy'])->name('delete');
});







