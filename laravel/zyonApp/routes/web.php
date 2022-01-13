<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PsikologController;
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
        Route::post('/tambah-psikolog-tambah', [PsikologController::class,'store'])->name('tambah-psikolog');
        Route::get('/psikolog-list', [PsikologController::class,'index']);
        Route::post('/psikolog-edit', [PsikologController::class,'edit']);
        Route::post('/psikolog-delete', [PsikologController::class,'delete']);

        Route::get('/konsultasi', function () {
            return view('dashboard_admin.konsultasi');
        });
        
        
        Route::get('/transaksi', function () {
            return view('dashboard_admin.transaksi');
        });
        // Route::get('/psikolog', [AdminController::class,'index']);
        // Route::get('/psikolog/tambah', [AdminController::class,'index']);
        // Route::get('/konsultasi', [AdminController::class,'index']);
        // Route::get('/transaksi', [AdminController::class,'index']);
        // Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
    });

    Route::group(['middleware' => ['role:user']], function() {
        Route::get('/dashboard', [UserController::class,'index'])->name('dashboard-user');
        Route::get('/psikolog', [PsikologController::class,'index']);
        Route::get('/event', function () {
            return view('dashboard_user.event');
        });
        Route::post('/psikolog/{date}/bayar', [TransaksiController::class,'create'])->name('bayar');
        
        // Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
    });

});
