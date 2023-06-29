<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ForminputController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;

// use Auth;
use Illuminate\Support\Facades\Auth;

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

Route::get('after_register', function() {
    return view('after_register');
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
Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk/store');
    Route::post('/produk/update', [ProdukController::class, 'update'])->name('produk/update');
    Route::get('/produk/view/{id}', [ProdukController::class, 'view'])->name('produk.view/{id}');
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk/edit/{id}');
    Route::get('/produk/delete/{id}', [ProdukController::class, 'delete'])->name('produk/delete/{id}');

    Route::get('/kategori_produk', [KategoriProdukController::class, 'index'])->name('kategori_produk');

    Route::get('/kategori_produk/create', [KategoriProdukController::class, 'create']);
    Route::post('/kategori_produk/store', [KategoriProdukController::class, 'store'])->name('kategori_produk/store');
    Route::post('/kategori_produk/update', [KategoriProdukController::class, 'update'])->name('kategori_produk/update');
    Route::get('/kategori_produk/view/{id}', [KategoriProdukController::class, 'view'])->name('kategori_produk.view/{id}');
    Route::get('/kategori_produk/edit/{id}', [KategoriProdukController::class, 'edit'])->name('kategori_produk/edit/{id}');
    Route::get('/kategori_produk/delete/{id}', [KategoriProdukController::class, 'delete'])->name('kategori_produk/delete/{id}');

    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');

    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store'])->name('pesanan/store');
    Route::post('/pesanan/update', [PesananController::class, 'update'])->name('pesanan/update');
    Route::get('/pesanan/view/{id}', [PesananController::class, 'view'])->name('pesanan.view/{id}');
    Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit'])->name('pesanan/edit/{id}');
    Route::get('/pesanan/delete/{id}', [PesananController::class, 'delete'])->name('pesanan/delete/{id}');
});

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/about', [HomeController::class, 'about'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
