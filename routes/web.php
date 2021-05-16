<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ContactController;

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
Route::get('/', [ViewController::class, 'index'])->name('top');
Route::get('/workExperiences', [ViewController::class, 'workExperiences'])->name('work_experiences');
Route::get('/gallery', [ViewController::class, 'gallery'])->name('gallery');
Route::get('/hobby', [ViewController::class, 'hobby'])->name('hobby');
//contact form
Route::get('/contact', [ContactController::class, 'input'])->name('contact');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');
Route::get('/complete', [ContactController::class, 'complete'])->name('complete');
