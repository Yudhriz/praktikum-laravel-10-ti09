<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ForminputController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel";
});

Route::get('/hallo', function () {
    return view('hallo');
});

Route::get('/hallo2', function () {
    return view('hallo.halloworld');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/health-check', function () {
    return view('health-check/form');
});

Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'hasil']);

Route::get('/formp9', [ForminputController::class, 'index']);
Route::get('/formp9', [ForminputController::class, 'array']);
Route::post('/result', [ForminputController::class, 'hasil']);

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/kategori_produk', [KategoriProdukController::class, 'index'])->name('kategori_produk');
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
