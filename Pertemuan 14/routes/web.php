<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\BiodataController;
use App\Models\Biodata;
use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('home_p13'));
Route::get('/biodatas', [BiodataController::class, 'index'])->name('biodatas.index');
Route::put('/biodatas/{id}', [BiodataController::class, 'update'])->name('biodatas.update');
Route::get('/biodatas/create', [BiodataController::class, 'create'])->name('biodatas.create');
Route::get('biodatas/{id}/edit', [BiodataController::class, 'edit'])->name('biodatas.edit');
Route::post('/biodatas', [BiodataController::class, 'store'])->name('biodatas.store');
Route::delete('biodatas/{id}', [BiodataController::class, 'destroy'])->name('biodatas.destroy');



Route::get('/baru/home',[HalamanController::class, 'home'])->name('topmenu1');
Route::get('/baru/about',[HalamanController::class, 'about'])->name('topmenu2');
Route::get('/baru/contact',[HalamanController::class, 'contact'])->name('topmenu3');



