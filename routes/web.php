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

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/error-400', function () {
  return view('errors.400');
});

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

Route::get(
  '/logout',
  [LoginController::class, 'logout']
)->name('logout')->middleware('auth');

Route::get(
  '/pendaftaran-siswa',
  [SiswaController::class, 'index']
);

Route::post(
  '/pendaftaran-siswa',
  [SiswaController::class, 'cetak']
)->name('cetak');

Route::get(
  '/dashboard',
  [AdminController::class, 'index']
)->middleware('auth');

Route::post(
  '/pesan',
  [SiswaController::class, 'pesan']
)->name('pesan');

Route::get(
  '/page-pembayaran',
  [AdminController::class, 'pembayaran']
)->name('pembayaran')->middleware('auth');

Route::post(
  '/page-pembayaran',
  [AdminController::class, 'proses']
)->name('proses')->middleware('auth');

// routes yang dilindungi dengan middleware isAdmin,
// middleware yang mengecek apakah user yg login saat ini adalah role admin
Route::get(
  '/detail-pembayaran/{id}',
  [AdminController::class, 'detail_pembayaran']
)->name('detail_pembayaran')->middleware(['auth', 'admin']);

Route::get(
  '/detail-pendaftaran/{id}',
  [AdminController::class, 'detail_pendaftaran']
)->name('detail_pendaftaran')->middleware(['auth', 'admin']);

Route::get(
  '/pesan',
  [AdminController::class, 'pesan']
)->name('pesan')->middleware(['auth', 'admin']);

Route::get(
  '/detail-pesan/{id}',
  [AdminController::class, 'detail_pesan']
)->name('detail-pesan')->middleware(['auth', 'admin']);

Route::post(
  '/proses-verifikasi',
  [AdminController::class, 'verifikasi']
)->name('verifikasi')->middleware(['auth', 'admin']);

Route::post(
  '/proses-tolak',
  [AdminController::class, 'tolak']
)->name('tolak')->middleware(['auth', 'admin']);
