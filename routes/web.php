<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Campaign;
use App\Livewire\FormDonasi;
use App\Livewire\BeritaDetail;
use App\Livewire\GaleriBerita;
use App\Livewire\ProgramDetail;
use App\Livewire\DetailCampaign;
use App\Livewire\BeritaComponent;
use Illuminate\Support\Facades\Route;

// ini udh pake livewire pi, udh ga pake controller lg
Route::get('/', Home::class)->name('home');
Route::get('/tentang-kami', About::class)->name('tentang-kami');
Route::get('/kontak', Contact::class)->name('kontak');
Route::get('program/{slug}', ProgramDetail::class)->name('detail-program');
Route::get('/berita', BeritaComponent::class)->name('berita');
Route::get('/berita/{slug}', BeritaDetail::class)->name('detail-berita');
Route::get('/dokumentasi/{slug}', GaleriBerita::class)->name('galeri-berita');


// Halaman campaign
Route::get('/campaign', Campaign::class)->name('campaign');
Route::get('/campaign/{slug}', DetailCampaign::class)->name('detail-campaign');
Route::get('/campaign/{slug}/donasi', FormDonasi::class)->name('form-donasi');


Route::get('{any}', [App\Http\Controllers\PagesController::class, 'pageView']);
