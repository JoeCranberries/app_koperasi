<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\UserController;



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
    return view('auth.login');
});

Auth::routes();

Route::get('/admin/index', [App\Http\Controllers\HomeController::class, 'adminHome'])->middleware('admin');

Route::get('/anggota', [App\Http\Controllers\HomeController::class, 'anggotaHome'])->middleware();

Route::get('/agen', [App\Http\Controllers\HomeController::class, 'agenHome'])->middleware('agen');


Route::resource('/admin/anggota', UserController::class);

Route::resource('admin', UserController::class);

Route::resource('agen', AgenController::class);
