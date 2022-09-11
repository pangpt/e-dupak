<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterKegiatanController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
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
Route::get('/master_kegiatan/bab', [MasterKegiatanController::class, 'bab'])->name('bab_kegiatan');
Route::get('/master_kegiatan/subbab', [MasterKegiatanController::class, 'subbab'])->name('subbab_kegiatan');
Route::get('/master_kegiatan/modul', [MasterKegiatanController::class, 'modul_kegiatan'])->name('modul_kegiatan');

Route::get('/dokumentasi/tambah', [DokumentasiController::class, 'tambah'])->name('dokumentasi.tambah');
Route::get('/dokumentasi/detil', [DokumentasiController::class, 'detil'])->name('dokumentasi.detil');
Route::post('/dokumentasi/tambah', [DokumentasiController::class, 'inputkegiatan'])->name('dokumentasi.input');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/akun', [ProfileController::class, 'akun'])->name('profile.akun');
Route::post('/profile/akun', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/dokumentasi/autocomplete', [DokumentasiController::class, 'autocomplete'])->name('dokumentasi.autocomplete');
