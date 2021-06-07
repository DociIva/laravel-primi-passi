<?php

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

// HOMEPAGE (ritorna)
Route::get('/', function () {
    return view('homepage');
});

// ABOUT (ritorna)
// Per fare la prova 
/*
Route::get('/lorem', function () {
    return 'Lorem Ipusm';
});
*/
// ABOUT CON VIEW  (mettere il collegamento)
Route::get('/about', function () {
    return view('about');
})->name('about');

// NEXT CON VIEW  (mettere il collegamento)
Route::get('/next', function () {
    return view('next');
})->name('next');