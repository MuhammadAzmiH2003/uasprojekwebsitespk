<?php

use Illuminate\Support\Facades\Route;

// dashboard
use App\http\Controllers\Dashboard\DashboardController;
use App\http\Controllers\Dashboard\UpdateprodukController;
use App\http\Controllers\Dashboard\TambahprodukController;
use App\http\Controllers\Dashboard\EditprodukController;
use App\http\Controllers\Dashboard\UserController;
use App\http\Controllers\Dashboard\KriteriaController;
use App\http\Controllers\Dashboard\PenilaianController;
use App\http\Controllers\Dashboard\HitungController;
use App\http\Controllers\Dashboard\AltupdateController;
use App\http\Controllers\Dashboard\AlttambahController;
use App\http\Controllers\Dashboard\AlteditController;
use App\http\Controllers\Dashboard\KriteriatambahController;
use App\http\Controllers\Dashboard\KriteriaeditController;
use App\http\Controllers\Dashboard\KriteriaupdateController;
use App\http\Controllers\Dashboard\PenilaianupdateController;
use App\http\Controllers\Dashboard\PenilaiantambahController;
use App\http\Controllers\Dashboard\PenilaianeditController;
use App\http\Controllers\Dashboard\LoginController;




// landing
use App\http\Controllers\landing\HomeController;
use App\http\Controllers\landing\ProdukController;
use App\http\Controllers\landing\DetailprodukController;
use App\http\Controllers\landing\ContactController;
use App\http\Controllers\landing\AlternatifController;
use App\http\Controllers\landing\RegisterController;
use App\http\Controllers\landing\RekomendasiController;



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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


//login
Route::get('/login',[LoginController::class, 'index'])->name('login.index');


// dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/updateproduk',[UpdateprodukController::class, 'index'])->name('updateproduk.index');
Route::get('/tambahproduk', [TambahprodukController::class, 'index'])->name('tambahproduk.index');
Route::get('/editproduk', [EditprodukController::class, 'index'])->name('editproduk.index');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria.index');
Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif.index');
Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian.index');

//Hitung
Route::get('/Hitung', [HitungController::class, 'hitung'])->name('hitung.index');

// Route::get('/altupdate', [AltupdateController::class, 'index'])->name('altupdate.index');
// Route::get('/alttambah', [AlttambahController::class, 'index'])->name('alttambah.index');
// Route::get('/altedit', [AlteditController::class, 'index'])->name('altedit.index');
Route::get('/kriteriatambah', [KriteriatambahController::class, 'index'])->name('kriteriatambah.index');
Route::get('/kriteriaupdate', [KriteriaupdateController::class, 'index'])->name('kriteriaupdate.index');
Route::get('/kriteriaedit', [KriteriaeditController::class, 'index'])->name('kriteriaedit.index');
Route::get('/penilaianupdate', [PenilaianupdateController::class, 'index'])->name('penilaianupdate.index');
Route::get('/penilaianedit', [PenilaianeditController::class, 'index'])->name('penilaianedit.index');
Route::get('/penilaiantambah', [PenilaiantambahController::class, 'index'])->name('penilaiantambah.index');

// alternatif
Route::get('/altupdate', [AltupdateController::class, 'index'])->name('altupdate.index');
Route::get('/alttambah', [AltupdateController::class, 'tambah'])->name('alttambah.index');
Route::post('/alttambah', [AltupdateController::class, 'store'])->name('Alternatif.index');
Route::get('/altupdate/edit/{id}', [AltupdateController::class, 'edit'])->name('altedit.index');
Route::put('/altupdate/update/{id}', [AltupdateController::class, 'update'])->name('updateAlternatif.index');
Route::get('/altupdate/hapus/{id}', [AltupdateController::class, 'hapus'])->name('hapus.index');

// kriteria
Route::get('/kriteriaupdate', [KriteriaupdateController::class, 'index'])->name('kriteriaupdate.index');
Route::get('/kriteriatambah', [KriteriaupdateController::class, 'tambah'])->name('kriteriatambah.index');
Route::post('/kriteriatambah', [KriteriaupdateController::class, 'store'])->name('Kriteria.index');
Route::get('/kriteriaupdate/edit/{id}', [KriteriaupdateController::class, 'edit'])->name('kriteriaedit.index');
Route::put('/kriteriaupdate/update/{id}', [KriteriaupdateController::class, 'update'])->name('updateKriteria.index');
Route::get('/kriteriaupdate/hapus/{id}', [KriteriaupdateController::class, 'hapus'])->name('hapus.index');

//penilaian
Route::get('/penilaianupdate', [PenilaianupdateController::class, 'index'])->name('penilaianupdate.index');
Route::get('/penilaiantambah', [PenilaianupdateController::class, 'tambah'])->name('penilaiantambah.index');
Route::post('/penilaiantambah', [PenilaianupdateController::class, 'store'])->name('Penilaian.index');
Route::get('/penilaianupdate/edit/{id}', [PenilaianupdateController::class, 'edit'])->name('penilaianedit.index');
Route::put('/penilaianupdate/update/{id}', [PenilaianupdateController::class, 'update'])->name('updatePenilaian.index');
Route::get('/penilaianupdate/hapus/{id}', [PenilaianupdateController::class, 'hapus'])->name('hapus.index');

//produk
Route::get('/updateproduk', [UpdateprodukController::class, 'index'])->name('updateproduk.index');
Route::get('/tambahproduk', [UpdateprodukController::class, 'tambah'])->name('tambahproduk.index');
Route::post('/tambahproduk', [UpdateprodukController::class, 'store'])->name('Produk.index');
Route::get('/updateproduk/edit/{id}', [UpdateprodukController::class, 'edit'])->name('editProduk.index');
Route::put('/updateproduk/update/{id}', [UpdateprodukController::class, 'update'])->name('updateProduk.index');
Route::get('/updateproduk/hapus/{id}', [UpdateprodukController::class, 'hapus'])->name('hapus.index');

// landing
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('detail-produk', [DetailprodukController::class, 'index'])->name('detail-produk.index');
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index');