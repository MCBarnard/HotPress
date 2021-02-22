<?php

use App\Http\Controllers\HomeController;
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
Route::get('admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

Auth::routes();
