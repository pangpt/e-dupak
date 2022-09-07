<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterKegiatanController;
use App\Http\Controllers\DokumentasiController;
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

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/master_kegiatan/bab', [MasterKegiatanController::class, 'bab'])->name('bab_kegiatan');
Route::get('/master_kegiatan/subbab', [MasterKegiatanController::class, 'subbab'])->name('subbab_kegiatan');
Route::get('/master_kegiatan/modul', [MasterKegiatanController::class, 'modul_kegiatan'])->name('modul_kegiatan');

Route::get('/dokumentasi/tambah', [DokumentasiController::class, 'tambah'])->name('dokumentasi.tambah');
Route::get('/dokumentasi/autocomplete', [DokumentasiController::class, 'autocomplete'])->name('dokumentasi.autocomplete');
