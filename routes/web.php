<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComproController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\FlipController;
use App\Http\Controllers\MidtransController;
use App\Http\Middleware\CheckCampaignTarget;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\HomeController;
use App\Models\Berita;



Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/program/{slug}', [App\Http\Controllers\PagesController::class, 'detailProgram'])->name('detail-program');
Route::get('/berita', [App\Http\Controllers\PagesController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [App\Http\Controllers\PagesController::class, 'detailBerita'])->name('detail-berita');


Route::get('{any}', [App\Http\Controllers\PagesController::class, 'pageView']);

// Route::get('/', [App\Http\Controllers\HomeController::class, 'rekening']);
