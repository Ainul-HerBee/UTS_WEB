<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('/Beranda', function () {return view('Beranda');});
Route::get('/Tentang', function () {return view('Tentang');});
Route::get('/Alamat', function () {return view('Alamat');});
Route::get('/Visi', function () {return view('Visi');});
Route::get('/Misi', function () {return view('Misi');});

