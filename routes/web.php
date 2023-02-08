<?php

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
    return view('pages.beranda');
});


Route::get('/dashboard/siswa', function () {
    return view('pages.admin.siswa.index');
});

Route::get('/dashboard/kelas', function () {
    return view('pages.admin.kelas.index');
});

Route::get('/dashboard/admin', function () {
    return view('pages.admin.admin.index');
});

Route::get('/dashboard/user', function () {
    return view('pages.admin.user.index');
});

Route::get('/dashboard/petugas', function () {
    return view('pages.admin.petugas.index');
});

Route::get('/dashboard/spp', function () {
    return view('pages.admin.spp.index');
});

// Pembayaran
Route::get('/dashboard/pembayaran', function () {
    return view('pages.admin.pembayaran.index');
});
Route::get('/dashboard/pembayaran/bayar', function () {
    return view('pages.admin.pembayaran.bayar');
});
Route::get('/dashboard/pembayaran/status', function () {
    return view('pages.admin.pembayaran.status-pembayaran');
});
Route::get('/dashboard/pembayaran/detail', function () {
    return view('pages.admin.pembayaran.detail-status');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.admin.dashboard');
    })->name('dashboard');
});
