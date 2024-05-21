<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\KasKeluarController;
use App\Http\Controllers\KasMasukController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::post('/pembayaran/store', [PembayaranController::class,'store'])->name('pembayaran.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/visimisi', function () {
    return view('visimisi');
});
Route::get('/agenda', [AgendaController::class, 'index']);

Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::post('/pembayaran/store', [PembayaranController::class,'store'])->name('pembayaran.store');

// Route::get('/beranda', function () {
//     return view('layout.admin');
// });

// web.php
Route::get('/beranda', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/kas', [KasMasukController::class, 'index'])->name('kasMasuk.index');
Route::get('/kasmasuk-create', [KasMasukController::class, 'create']);
Route::post('/kasMasuk/store', [KasMasukController::class, 'store'])->name('admin.kasMasuk.store');
Route::get('/kasmasuk-edit-{id}', [KasMasukController::class, 'edit'])->name('kasmasuk.edit');
Route::put('/kasmasuk-update-{id}', [KasMasukController::class, 'update'])->name('kasmasuk.update');
Route::delete('/kasmasuk-delete-{id}', [KasMasukController::class, 'destroy'])->name('kasmasuk.destroy');

Route::get('/kas-keluar', [KasKeluarController::class, 'index'])->name('kasKeluar.index');
Route::get('/kaskeluar-create', [KasKeluarController::class, 'create']);
Route::post('/kasKeluar/store', [KasKeluarController::class, 'store'])->name('admin.kasKeluar.store');
Route::get('/kaskeluar-edit-{id}', [KasKeluarController::class, 'edit'])->name('kaskeluar.edit');
Route::put('/kaskeluar-update-{id}', [KasKeluarController::class, 'update'])->name('kaskeluar.update');
Route::delete('/kaskeluar-delete-{id}', [KasKeluarController::class, 'destroy'])->name('kaskeluar.destroy');

Route::get('/donasi', [DonasiController::class, 'index'])->name('donasi.index');
Route::get('/donasi-create', [DonasiController::class, 'create']);
Route::post('/donasi/store', [DonasiController::class, 'store'])->name('admin.donasi.store');
Route::get('/donasi-edit-{id}', [DonasiController::class, 'edit'])->name('donasi.edit');
Route::put('/donasi-update-{id}', [DonasiController::class, 'update'])->name('donasi.update');
Route::delete('/donasi-delete-{id}', [DonasiController::class, 'destroy'])->name('donasi.destroy');

Route::get('/agenda-admin', [AgendaController::class, 'indexAdmin'])->name('agenda.index');
Route::get('/agenda-create', [AgendaController::class, 'create']);
Route::post('/agenda/store', [AgendaController::class, 'store'])->name('admin.agenda.store');
Route::get('/agenda-edit-{id}', [AgendaController::class, 'edit'])->name('agenda.edit');
Route::put('/agenda-update-{id}', [AgendaController::class, 'update'])->name('agenda.update');
Route::delete('/agenda-delete-{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy');

Route::get('/pembayaran-admin', [PembayaranController::class, 'indexAdmin'])->name('pembayaran.index');
Route::get('/pembayaran-create', [PembayaranController::class, 'create']);
Route::post('/pembayaran-admin/store', [PembayaranController::class, 'storeAdmin'])->name('admin.pembayaran.store');
Route::get('/pembayaran-edit-{id}', [PembayaranController::class, 'edit'])->name('pembayaran.edit');
Route::put('/pembayaran-update-{id}', [PembayaranController::class, 'update'])->name('pembayaran.update');
Route::delete('/pembayaran-delete-{id}', [PembayaranController::class, 'destroy'])->name('pembayaran.destroy');

require __DIR__.'/auth.php';
