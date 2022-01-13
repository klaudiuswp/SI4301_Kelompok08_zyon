<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\dashboardController;
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
        Route::get('/konsultasi', function () {
            return view('dashboard_admin.konsultasi');
        });
        Route::get('/psikolog', function () {
            return view('dashboard_admin.psikolog');
        });
        Route::get('/psikolog-tambah', function () {
            return view('dashboard_admin.tambah-psikolog');
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
        Route::get('/event', function () {
            return view('dashboard_user.event');
        });
        Route::get('/bayar', function () {
            return view('dashboard_user.bayar');
        });
        Route::get('/psikolog', function () {
            return view('dashboard_user.psikolog');
        });
        // Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
    });

});
