<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

Route::get('/', [AnggotaController::class, 'profil'])->name('profil');
Route::get('/anggota', [AnggotaController::class, 'index'])->name('home');
Route::get('/anggota/{id}', [AnggotaController::class, 'show'])->name('anggota.show');
