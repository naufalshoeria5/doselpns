<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TahorController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/', DashboardController::class)->name('/');

    // route tahor
    Route::resource('tahor',TahorController::class);
    // tahor

    // route Pegawai
    Route::resource('pegawai', PegawaiController::class);
    // Pegawai


    // Route::view('/pegawai', 'pages.pegawai.index', ['title' => 'judul']);


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
