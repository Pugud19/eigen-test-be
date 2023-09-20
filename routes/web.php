<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PinjamanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/member', MemberController::class);
Route::resource('/', PinjamanController::class);
Route::resource('/pinjamans', PinjamanController::class);
Route::resource('books', BookController::class);
Route::get('/borrow', [MemberController::class, 'create']);
Route::post('/pinjamans', [PinjamanController::class, 'store'])->name('pinjamans.store');

