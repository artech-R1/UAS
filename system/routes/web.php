<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('berandaAdmin', [HomeController::class, 'showBeranda']);
Route::get('berandaUser', [UserProdukController::class, 'index']);
Route::get('produkUser/{produkUser}', [UserProdukController::class, 'show']);
Route::post('produkUser/filter', [UserProdukController::class, 'filter']);


Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'showRegister']);
Route::post('register', [AuthController::class, 'register']);


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('kategoriAdmin', KategoriController::class);
    Route::resource('produkAdmin', ProdukController::class);
    Route::post('produkAdmin/filter', [ProdukController::class, 'filter']);
    Route::post('kategoriAdmin/filter', [KategoriController::class, 'filter']);
    Route::resource('user', UserController::class);
});

Route::get('test-ajax', [ProdukController::class, 'create']);