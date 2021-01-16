<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [ViewController::class, 'index']);
Route::get('/workExperiences', [ViewController::class, 'workExperiences']);
Route::get('/gallery', [ViewController::class, 'gallery']);
Route::get('/hobby', [ViewController::class, 'hobby']);
Route::get('/contact', [ViewController::class, 'contact']);
