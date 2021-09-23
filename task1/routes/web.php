<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;

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


Route::get('/',[pageController::class, 'homepage'])->name('home');
Route::get('/service',[pageController::class, 'servicepage'])->name('service');
Route::get('/about',[pageController::class, 'aboutpage'])->name('about');
Route::get('/contact',[pageController::class, 'contactpage'])->name('contact');
Route::get('/teams',[pageController::class, 'teamspage'])->name('teams');
