<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BiodataController::class, 'index'])->name('home');

Route::get('/features', fn () => view('pages.features'))->name('features');
Route::get('/pricing', fn () => view('pages.pricing'))->name('pricing');
Route::get('/faqs', fn () => view('pages.faqs'))->name('faqs');
Route::get('/about', fn () => view('pages.about'))->name('about');

Route::get('/biodata/create', [BiodataController::class, 'create'])->name('biodata.create');
Route::post('/biodata', [BiodataController::class, 'store'])->name('biodata.store');
Route::get('/biodata/{biodata}/edit', [BiodataController::class, 'edit'])->name('biodata.edit');
Route::put('/biodata/{biodata}', [BiodataController::class, 'update'])->name('biodata.update');
Route::delete('/biodata/{biodata}', [BiodataController::class, 'destroy'])->name('biodata.destroy');
