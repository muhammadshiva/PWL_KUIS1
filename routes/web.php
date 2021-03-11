<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\DashboardController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/vidio', [HomeController::class, 'show']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::prefix('admin')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/pegawai', [DashboardController::class, 'pegawai']);
    Route::get('/supplier', [DashboardController::class, 'supplier']);
});