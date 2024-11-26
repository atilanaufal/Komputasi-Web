<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/halo-apa-kabar/{nama}', function ($nama) {
    return "halo apa kabar $nama";
});
Route::get('/nama/{namadepan}/{namabelakang}', function ($namadepan, $namabelakang) {
    return "halo apa kabar $namadepan $namabelakang";
});
Route::get('/home',[BiodataController::class, 'home']);
Route::get('/about',[BiodataController::class, 'about']);
Route::get('/contact',[BiodataController::class, 'contact']);

//tanpa Controller
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/new',[PageController::class, 'home'])->name('home');
