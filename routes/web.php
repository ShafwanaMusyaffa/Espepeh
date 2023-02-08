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

Route::get('/dashboard/pembayaran', function () {
    return view('pages.admin.pembayaran.index');
});

Route::get('/dashboard/kelas', function () {
    return view('pages.admin.kelas.index');
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
