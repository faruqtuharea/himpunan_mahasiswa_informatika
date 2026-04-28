<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AspirationController;
use App\http\Controllers\MemberController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/program-kerja', function () {
    return view('pages.proker');
})->name('proker');

Route::get('/berita', function () {
    return view('pages.berita');
})->name('berita');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

// Public Routes
Route::get('/daftar', [MemberController::class, 'create'])->name('daftar');
Route::post('/daftar', [MemberController::class, 'store'])->name('daftar.store');

Route::get('/aspirasi', [AspirationController::class, 'create'])->name('aspirasi');
Route::post('/aspirasi', [AspirationController::class, 'store'])->name('aspirasi.store');

// Admin Routes (Gunakan Middleware 'auth' untuk keamanan)
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // CRUD Anggota
    // Route::resource('members', MemberController::class)->except(['create', 'store']);
    
    // CRUD Aspirasi
    Route::get('/aspirations', [AspirationController::class, 'index'])->name('admin.aspirasi');
    Route::delete('/aspirations/{id}', [AspirationController::class, 'destroy'])->name('admin.aspirasi.delete');
});