<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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
  return view('beranda', [
    'title' => 'Beranda'
  ]);
});

Route::get('/jurusan', function () {
  return view('jurusan', [
    'title' => 'Jurusan'
  ]);
});

Route::get('/tentang-kami', function () {
  return view('tentang-kami', [
    'title' => 'Tentang Kami'
  ]);
});

Route::get('/testimoni', function () {
  return view('testimoni', [
    'title' => 'Testimoni'
  ]);
});

Route::get('/hubungi-kami', function () {
  return view('hubungi-kami', [
    'title' => 'Hubungi Kami'
  ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/pendaftaran-siswa', [SiswaController::class, 'index']);

// Route::post('/pendaftaran-siswa', [SiswaController::class, 'cetak'])->name('cetak');

// Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth');

// Route::get('/page-pembayaran', [AdminController::class, 'pembayaran'])->name('pembayaran')->middleware('auth');

Auth::routes(['register' => false, 'reset' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
