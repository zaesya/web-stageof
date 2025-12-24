<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WeatherController;

Route::get('/', [WeatherController::class, 'index'])
    ->name('stitch-page');
Route::get('/profil', function () {
    return view('profil');
})->name('profil');
Route::get('/gempa-page', function () {
    return view('gempa-page');
})->name('gempa-page');
Route::get('/magnet-bumi', function () {
    return view('magnet-bumi');
})->name('magnet-bumi');
Route::get('/petir', function () {
    return view('petir');
})->name('petir');
Route::get('/tanda-waktu', function () {
    return view('tanda-waktu');
})->name('tanda-waktu');
Route::get('/cuaca-iklim', function () {
    return view('cuaca-iklim');
})->name('cuaca-iklim');
Route::get('/publikasi', function () {
    return view('publikasi');
})->name('publikasi');
Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');


