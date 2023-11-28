<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index')->name('index');
Route::permanentRedirect('/hilfe', 'https://github.com/poldixd/rustdesk/releases/download/nightly/rustdesk-1.2.4-x86_64.exe');
Route::view('/impressum', 'impressum')->name('impressum');
Route::view('/datenschutzerklaerung', 'datenschutzerklaerung')->name('datenschutzerklaerung');