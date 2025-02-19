<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/impressum', 'impressum')->name('impressum');
Route::view('/datenschutzerklaerung', 'datenschutzerklaerung')->name('datenschutzerklaerung');
