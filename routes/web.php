<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KenaikanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PensiunController;
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
    Route::resource('tahor', TahorController::class);
    // tahor

    // route pensiun
    Route::resource('pensiun',PensiunController::class);
    // route pensiun

    //route kenaikan
    Route::resource('kenaikan', KenaikanController::class);
    //route kenaikan

    // route Pegawai
    Route::get('getPegawai/{nip}', [PegawaiController::class, 'getPegawai']);
    Route::get('getBerkas/tahor/{id}', [PegawaiController::class, 'berkasTahor']);
    Route::get('getBerkas/pensiun/{id}', [PegawaiController::class, 'berkasPensiun']);
    Route::resource('pegawai', PegawaiController::class);
    // Pegawai


    // Route::view('/pegawai', 'pages.pegawai.index', ['title' => 'judul']);


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
