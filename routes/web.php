<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\UmurControler;
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
// Route::get('/tes', function () {
//     return view('tes');
// });
// untuk versi php 7.5 keatas
Route::get('', fn () => view('welcome'));
Route::get('/contac', fn () => view('contac'));
Route::get('/about', fn () => view('about'));
Route::get('/galery', fn () => view('galery'));
Route::get('/sidebar', fn () => view('penduduk.index2'))->middleware(['auth'])->name('sidebar');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/penduduk/umur', [UmurControler::class, 'index'])->middleware(['auth'])->name('data_umur');
Route::get('/penduduk/rekap', [PendudukController::class, 'dusun'])->middleware(['auth'])->name('umur_rekap');

Route::get('/penduduk', [PendudukController::class, 'index'])->middleware(['auth'])->name('penduduk');
// Route::get('/penduduk/{id}/lihat', [PendudukController::class, 'lihat'])->middleware(['auth'])->name('lihat');

Route::get('/create', [PendudukController::class, 'create'])->middleware(['auth'])->name('create');
Route::post('/penduduk/store', [PendudukController::class, 'store'])->middleware(['auth'])->name('simpandata');
Route::get('/penduduk/{id}/edit', [PendudukController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::get('/penduduk/{id}/detail', [PendudukController::class, 'detail'])->middleware(['auth'])->name('detail');
Route::put('/penduduk/{id}', [PendudukController::class, 'update'])->middleware(['auth'])->name('updatedata');
Route::get('/penduduk/{id}/hapus', [PendudukController::class, 'delet'])->middleware(['auth'])->name('hapus');
Route::delete('/penduduk/{id}', [PendudukController::class, 'destroy'])->middleware(['auth'])->name('Hapus_penduduk');
require __DIR__.'/auth.php';