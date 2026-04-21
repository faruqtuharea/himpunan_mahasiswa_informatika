<?php

use Illuminate\Support\Facades\Route;

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