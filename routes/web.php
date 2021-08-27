<?php

use App\Http\Controllers\CustomController;
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

Route::get('/', [CustomController::class, 'landing']);
Route::post('/tambah', [CustomController::class, 'tambahData']);
Route::get('/hapus/{id}', [CustomController::class, 'hapusData'])->middleware('auth');



Route::get('/login', [CustomController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [CustomController::class, 'loginAuth']);

Route::get('/logout', [CustomController::class, 'logout']);
