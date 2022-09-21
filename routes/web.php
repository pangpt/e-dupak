<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterKegiatanController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DupakController;
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
Route::get('/', [LoginController::class, 'index'])->name('loginpage')->middleware('guest');
Route::post('/login',[LoginController::class, 'login'])->name('login');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('registerpage')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('registerstore');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/master_kegiatan/bab', [MasterKegiatanController::class, 'bab'])->name('bab_kegiatan')->middleware('auth');
Route::get('/master_kegiatan/subbab', [MasterKegiatanController::class, 'subbab'])->name('subbab_kegiatan')->middleware('auth');
Route::get('/master_kegiatan/modul', [MasterKegiatanController::class, 'modul_kegiatan'])->name('modul_kegiatan')->middleware('auth');

Route::get('dokumentasi/daftarkegiatan', [DokumentasiController::class, 'daftarkegiatan'])->name('dokumentasi.daftarkegiatan')->middleware('auth');
Route::get('/dokumentasi/tambah', [DokumentasiController::class, 'tambah'])->name('dokumentasi.tambah')->middleware('auth');
Route::get('/dokumentasi/detil', [DokumentasiController::class, 'detil'])->name('dokumentasi.detil')->middleware('auth');
Route::post('/dokumentasi/tambah', [DokumentasiController::class, 'inputkegiatan'])->name('dokumentasi.input')->middleware('auth');
Route::post('dokumentasi/edit/{id}',[DokumentasiController::class, 'edit'])->name('dokumentasi.edit')->middleware('auth');
Route::get('/dokumentasi/hapus/{id}', [DokumentasiController::class, 'hapus'])->name('dokumentasi.hapus')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index')->middleware('auth');
Route::get('/profile/akun', [ProfileController::class, 'akun'])->name('profile.akun')->middleware('auth');
Route::post('/profile/akun', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

Route::get('/dupak/parameter', [DupakController::class, 'parameter'])->name('dupak.parameter')->middleware('auth');
Route::post('/dupak/parameter', [DupakController::class, 'inputParameter'])->name('dupak.inputparam')->middleware('auth');

Route::get('/dokumentasi/autocomplete', [DokumentasiController::class, 'autocomplete'])->name('dokumentasi.autocomplete');
