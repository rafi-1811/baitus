<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PagesController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/program/{slug}', [PagesController::class, 'detailProgram'])->name('detail-program');
Route::get('/berita', [PagesController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [PagesController::class, 'detailBerita'])->name('detail-berita');
Route::get('/kontak', [PagesController::class, 'kontak'])->name('kontak');


Route::get('{any}', [App\Http\Controllers\PagesController::class, 'pageView']);

