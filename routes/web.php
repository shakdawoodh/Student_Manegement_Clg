<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\indexController;
use App\Http\Controllers\fsd_01Controller;
use App\Http\Controllers\fsd_02Controller;
use App\Http\Controllers\fsd_03Controller;
use App\Http\Controllers\fsd_04Controller;
use App\Http\Controllers\fsd_05Controller;
use App\Http\Controllers\fsd_06Controller;

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
    return view('auth/login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [indexController::class, 'index'])->name('home');
Route::get('/fsd_01', [fsd_01Controller::class, 'index'])->name('fsd_01');
Route::get('/fsd_02', [fsd_02Controller::class, 'index'])->name('fsd_02');
Route::get('/fsd_03', [fsd_03Controller::class, 'index'])->name('fsd_03');
Route::get('/fsd_04', [fsd_04Controller::class, 'index'])->name('fsd_04');
Route::get('/fsd_05', [fsd_05Controller::class, 'index'])->name('fsd_05');
Route::get('/fsd_06', [fsd_06Controller::class, 'index'])->name('fsd_06');
