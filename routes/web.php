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


Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/berita', [App\Http\Controllers\HomeController::class, 'berita']);
Route::get('/blog-details/{slug}', [App\Http\Controllers\HomeController::class, 'blogdetails']);

// Route::get('/berita/{id}', [App\Http\Controllers\HomeController::class, 'blogdetail']);
// Route::get('/blog-details/{slug}', [HomeController::class, 'blogdetail'])->name('blog-details'); 
// Route::get('/blog-detail/{slug}', function ($slug) {
//     $berita = Berita::where('slug', $slug)->firstOrFail();
//     return view('blog-detail', compact('berita'));
// });

// Route::get('/index', [App\Http\Controllers\HomeController::class, 'indexx']);
// Route::get('/', [App\Http\Controllers\HomeController::class, 'indexx']);


Route::get('{any}', [App\Http\Controllers\HomeController::class, 'pageView']);

// Route::get('/', [App\Http\Controllers\HomeController::class, 'rekening']);


