<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistController;

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
    return view('link');
});

Route::get('/user/regist', [UserRegistController::class, 'index'])->name('user_regist');
Route::post('/user/confirm', [UserRegistController::class, 'confirm'])->name('user_confirm');
Route::post('/user/store', [UserRegistController::class, 'store'])->name('user_store');
Route::get('/user/list', [UserRegistController::class, 'show'])->name('user_list');
