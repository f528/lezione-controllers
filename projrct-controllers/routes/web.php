<?php

use App\Http\Controllers\pageController;
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

Route::get('/', [pageController::class , 'homepage'])->name('homepage');
Route::get('/orari', [pageController::class , 'partenze'])->name('partenze');
Route::get('/chi-siamo', [pageController::class , 'about'])->name('about');
Route::get('/contatti', [pageController::class, 'contact'])->name('contact');


