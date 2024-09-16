<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home', function () {
    return view('home');
});


// routes/web.php

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

// Tambahkan rute home dan rute lainnya
Route::get('home', function () {
    return view('home');
})->name('home');


// routes/web.php

Route::middleware(['auth'])->group(function () {
    // Tambahkan rute yang memerlukan autentikasi di sini
});




use App\Http\Controllers\LoginController;
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// routes/web.php







// routes/web.php
Route::get('PeminjamanBuku', [App\Http\Controllers\PeminjamanBukuController::class, 'tampilDataPeminjaman']);
Route::post('/simpanPerubahanPeminjaman/{id_peminjaman}', [App\Http\Controllers\PeminjamanBukuController::class, 'simpanPerubahanPeminjaman']);
Route::get('/PeminjamanBuku/edit/{id_peminjaman}', [App\Http\Controllers\PeminjamanBukuController::class, 'editPeminjamanForm']);
Route::get('/PeminjamanBuku/dataPinjam', [PeminjamanBukuController::class, 'tampilDataPeminjaman']);
Route::get('/PeminjamanBuku/tambahPeminjaman', [App\Http\Controllers\PeminjamanBukuController::class, 'tambahPeminjamanForm']);
Route::post('/simpanPeminjaman', [App\Http\Controllers\PeminjamanBukuController::class, 'tambahPeminjaman']);


Route::get('tentangBuku', [App\Http\Controllers\BukuController::class, 'tampilDataBuku']);
Route::get('/tentangBuku/tambahBuku', [App\Http\Controllers\BukuController::class, 'tambahBukuForm']);
Route::post('tentangBuku', [App\Http\Controllers\BukuController::class, 'tambahBuku']);
Route::get('/tentangBuku/editBukuForm/{id}', [App\Http\Controllers\BukuController::class, 'editBukuForm']);
Route::patch('tentangBuku/{id}',  [App\Http\Controllers\BukuController::class, 'updateBuku']);
Route::get('/tentangBuku/hapusBuku/{id}', [App\Http\Controllers\BukuController::class, 'hapusBuku']);


Route::get('manajemenPengguna', [App\Http\Controllers\PenggunaController::class, 'tampilDataPengguna']);
Route::get('/manajemenPengguna/tambahPengguna', [App\Http\Controllers\PenggunaController::class, 'tambahPenggunaForm']);
Route::post('manajemenPengguna', [App\Http\Controllers\PenggunaController::class, 'tambahPengguna']);
Route::get('/manajemenPengguna/editPenggunaForm/{id}', [App\Http\Controllers\PenggunaController::class, 'editPenggunaForm']);
Route::patch('manajemenPengguna/{id}',  [App\Http\Controllers\PenggunaController::class, 'updatePengguna']);
Route::get('/manajemenPengguna/hapusPengguna/{id}', [App\Http\Controllers\PenggunaController::class, 'hapusPengguna']);


Route::get('informasiDenda', [App\Http\Controllers\DendaController::class, 'tampilDataDenda']);
Route::get('/informasiDenda/editDendaForm/{id_peminjaman}', [App\Http\Controllers\DendaController::class, 'editDendaForm']);
Route::patch('/informasiDenda/updateDenda/{id_peminjaman}', [App\Http\Controllers\DendaController::class, 'updateDenda']);
