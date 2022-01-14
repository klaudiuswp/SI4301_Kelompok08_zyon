<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PsikologController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home.home');
})->name('home');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/dashboard', [dashboardController::class,'index'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['role:admin']], function() {
        Route::get('/admin-dashboard', [AdminController::class,'index'])->name('dashboard-admin');
        Route::get('/tambah-psikolog', [PsikologController::class,'create']);
        Route::post('/tambah-psikolog/tambah', [PsikologController::class,'store'])->name('tambah-psikolog');
        Route::get('/psikolog-list', [PsikologController::class,'index']);
        Route::post('/psikolog-edit', [PsikologController::class,'edit']);
        Route::post('/psikolog-delete', [PsikologController::class,'delete']);
        Route::get('/metode-pembayaran', [RekeningController::class,'create']);
        Route::post('/metode-pembayaran/tambah', [RekeningController::class,'store'])->name('tambah-metode-pembayaran');
        Route::post('/metode-pembayaran/edit', [RekeningController::class,'edit'])->name('edit-metode-pembayaran');
        Route::post('/metode-pembayaran/delete', [RekeningController::class,'delete'])->name('delete-metode-pembayaran');
        Route::get('/konsultasi', [KonsultasiController::class,'index']);
        Route::post('/konsultasi/update', [KonsultasiController::class,'update'])->name('konsultasi-update');
        Route::get('/transaksi', [TransaksiController::class,'index']);
    });

    Route::group(['middleware' => ['role:user']], function() {
        Route::get('/dashboard', [UserController::class,'index'])->name('dashboard-user');
        Route::get('/kegiatan', [UserController::class,'show']);
        Route::get('/kegiatan-aktif', [UserController::class,'showactive']);
        Route::get('/pilih-psikolog', [PsikologController::class,'index']);
        Route::get('/riwayat-transaksi', [UserController::class,'transHistory']);
        Route::post('/pembayaran', [KonsultasiController::class,'create']);
        Route::get('/pembayaran/{psikolog}/{tanggal}', [KonsultasiController::class,'createbayar'])->name('buat-bayar');
        Route::post('/pembayaran-bayar', [KonsultasiController::class,'store'])->name('bayar');
    
    });

});
