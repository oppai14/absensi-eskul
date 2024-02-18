<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::middleware(['auth'])->group(function () {
    Route::get('/home',[AbsenController::class,'index']);
    Route::resource('absen',AbsenController::class);
    Route::resource('anggota', AnggotaController::class);
});

Route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/logout',[LogoutController::class,'logout'])->name('logout');




Route::get('/', function () {
    return view('login.login');
});

