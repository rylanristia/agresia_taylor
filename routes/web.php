<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ContactControler;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
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

Route::get('/login-dashboard', [AuthController::class, 'index'])->name('login-dashboard');
Route::post('/process-login', [AuthController::class, 'login'])->name('process-login');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/collection', [CollectionController::class, 'index'])->name('collection');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/contact', [ContactControler::class, 'index'])->name('contact');

Route::prefix('admin')->middleware('administrator')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});