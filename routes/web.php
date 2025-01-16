<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

// ini udh pake livewire pi, udh ga pake controller lg
Route::get('/', App\Livewire\Home::class)->name('home');
Route::get('/tentang-kami', App\Livewire\About::class)->name('tentang-kami');
Route::get('/kontak', App\Livewire\Contact::class)->name('kontak');
Route::get('program/{slug}', App\Livewire\ProgramDetail::class)->name('detail-program');
Route::get('/berita', App\Livewire\BeritaComponent::class)->name('berita');
Route::get('/berita/{slug}', App\Livewire\BeritaDetail::class)->name('detail-berita');






Route::get('{any}', [App\Http\Controllers\PagesController::class, 'pageView']);
