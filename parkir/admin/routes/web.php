<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AreaParkirController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\TransaksiController;

Route::post('/login', 'AuthController@login')->name('login');

// Route untuk menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route untuk menghandle proses login
Route::post('/login', [LoginController::class, 'login']);

// Route untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth, admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profil/edit', [ProfileController::class, 'edit'])->name('profil.edit');

    Route::get('/admin/areaparkir', [AreaParkirController::class, 'index']);
    Route::get('/admin/jenis', [JenisController::class, 'index']);
    Route::resource('jenis', JenisController::class);
    
    Route::get('/admin/areaparkir', [AreaParkirController::class, 'index'])->name('areaparkir.index');
    Route::get('/areaparkir/create', [AreaParkirController::class, 'create'])->name('areaparkir.create');
    Route::post('/areaparkir', [AreaParkirController::class, 'store'])->name('areaparkir.store');
    Route::get('/areaparkir/{id}/edit', [AreaParkirController::class, 'edit'])->name('areaparkir.edit');
    Route::put('/areaparkir/{id}', [AreaParkirController::class, 'update'])->name('areaparkir.update');
    Route::delete('/areaparkir/{id}', [AreaParkirController::class, 'destroy'])->name('areaparkir.destroy');
    Route::get('/areaparkir/{id}', [AreaParkirController::class, 'show'])->name('areaparkir.show');

    
    Route::get('/admin/jenis', [JenisController::class, 'index'])->name('jenis.index');
    Route::get('/jenis/create', [JenisController::class, 'create'])->name('jenis.create');
    Route::post('/jenis', [JenisController::class, 'store'])->name('jenis.store');
    Route::get('/jenis/{id}/edit', [JenisController::class, 'edit'])->name('jenis.edit');
    Route::put('/jenis/{id}', [JenisController::class, 'update'])->name('jenis.update');
    Route::delete('/jenis/{id}', [JenisController::class, 'destroy'])->name('jenis.destroy');
    Route::get('/jenis/{id}', [JenisController::class, 'show'])->name('/jenis.show');

    Route::get('/admin/kampus', [KampusController::class, 'index'])->name('kampus.index');
    Route::get('/kampus/create', [KampusController::class, 'create'])->name('kampus.create');
    Route::post('/kampus', [KampusController::class, 'store'])->name('kampus.store');
    Route::get('/kampus/{id}/edit', [KampusController::class, 'edit'])->name('kampus.edit');
    Route::put('/kampus/{id}', [KampusController::class, 'update'])->name('kampus.update');
    Route::delete('/kampus/{id}', [KampusController::class, 'destroy'])->name('kampus.destroy');
    Route::get('/kampus/{id}', [KampusController::class, 'show'])->name('kampus.show');

    // Kendaraan
    Route::get('/admin/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
    Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
    Route::post('/kendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
    Route::get('/kendaraan/{id}/edit', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
    Route::put('/kendaraan/{id}', [KendaraanController::class, 'update'])->name('kendaraan.update');
    Route::delete('/kendaraan/{id}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');
    Route::get('/kendaraan/{id}', [KendaraanController::class, 'show'])->name('kendaraan.show');

    // Transaksi
    Route::get('/admin/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
    Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
    Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
    Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
    Route::get('/transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show');

});

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('areaparkir', AreaParkirController::class);
    });
    Route::prefix('admin')->group(function () {
        Route::resource('jenis', JenisController::class);
    });
    Route::prefix('admin')->group(function () {
        Route::resource('kampus', KampusController::class);
    });
    Route::prefix('admin')->group(function () {
        Route::resource('kendaraan', KendaraanController::class);
    });
    Route::prefix('admin')->group(function () {
        Route::resource('transaksi', TransaksiController::class);
    });
});

require __DIR__.'/auth.php';
