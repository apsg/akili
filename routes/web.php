<?php

use App\Http\Controllers\ContactController;
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
    return view('welcome');
});

Route::get('/o-nas', function () {
    return view('about');
});

Route::get('/wspolpraca', function () {
    return view('cooperation');
});

Route::get('/conaswyroznia', function () {
    return view('conaswyroznia');
});

Route::get('/uslugi', function () {
    return view('uslugi');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'send'])->name('contact');
