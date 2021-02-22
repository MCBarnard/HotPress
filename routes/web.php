<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\StockController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', [HomeController::class, 'logout'])->name('session.logout');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin'],function(){
    Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

    Route::group(['prefix'=>'jobs'],function() {
        Route::get('/completed', [JobController::class, 'completed'])->name('admin.jobs.completed');
        Route::get('/cancelled', [JobController::class, 'cancelled'])->name('admin.jobs.cancelled');
        Route::get('/queued', [JobController::class, 'queued'])->name('admin.jobs.queued');
        Route::get('/in-progress', [JobController::class, 'inProgress'])->name('admin.jobs.inProgress');
    });

    Route::group(['prefix'=>'stock'],function() {
        Route::get('/all', [StockController::class, 'all'])->name('admin.stock.all');
    });
});

Auth::routes();
