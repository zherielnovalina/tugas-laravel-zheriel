<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anggota', [AnggotaController::class, 'index']);

Route::get('petugas', [PetugasController::class, 'index']);

Route::get('buku', [BukuController::class, 'index']);

/*Route::get('/about', function () {
    return view('layouts.master');
});

Route::get('/content', function () {
    return view('layouts.content.index');
});

Route::get('/create', function () {
    return view('layouts.content.create');
});*/


Route::get('/tabel', function () {
    return view('layouts.tabel.tabel');
});