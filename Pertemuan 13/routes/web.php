<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('home_p13'));


Route::get('/baru/home',[HalamanController::class, 'home'])->name('topmenu1');
Route::get('/baru/about',[HalamanController::class, 'about'])->name('topmenu2');
Route::get('/baru/contact',[HalamanController::class, 'contact'])->name('topmenu3');



