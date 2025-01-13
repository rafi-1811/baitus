<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


// yang ini blom pake livewire masih pake controller
// Route::get('/', [PagesController::class, 'home'])->name('home');
// Route::get('/tentang-kami', [PagesController::class, 'tentangKami'])->name('tentang-kami');
// Route::get('/program/{slug}', [PagesController::class, 'detailProgram'])->name('detail-program');
// Route::get('/berita', [PagesController::class, 'berita'])->name('berita');
// Route::get('/berita/{slug}', [PagesController::class, 'detailBerita'])->name('detail-berita');
// Route::get('/kontak', [PagesController::class, 'kontak'])->name('kontak');



// ini udh pake livewire pi, udh ga pake controller lg
Route::get('/', App\Livewire\Home::class)->name('home');
Route::get('/tentang-kami', App\Livewire\About::class)->name('tentang-kami');
Route::get('/kontak', App\Livewire\Contact::class)->name('kontak');
Route::get('program/{slug}', App\Livewire\ProgramDetail::class)->name('detail-program');
Route::get('/berita', App\Livewire\BeritaComponent::class)->name('berita');
Route::get('/berita/{slug}', App\Livewire\BeritaDetail::class)->name('detail-berita');






Route::get('{any}', [App\Http\Controllers\PagesController::class, 'pageView']);
