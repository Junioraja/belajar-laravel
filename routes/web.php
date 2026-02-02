<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tambah', [MahasiswaController::class, 'index']);
Route::post('simpan-mahasiswa', [MahasiswaController::class, 'store']);