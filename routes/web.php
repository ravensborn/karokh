<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/tutorials', [PageController::class, 'tutorials'])
    ->name('tutorials');

Route::get('/pricing', [PageController::class, 'pricing'])
    ->name('pricing');

Route::get('/resources', [PageController::class, 'resources'])
    ->name('resources');

Route::get('/blog', [PageController::class, 'blog'])
    ->name('blog');

Route::get('/gallery', [PageController::class, 'gallery'])
    ->name('gallery');

Route::get('/contact-us', [PageController::class, 'contact_us'])
    ->name('contact-us');
