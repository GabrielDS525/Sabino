<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LiderController;
use App\Http\Controllers\MembroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.homepage');
Route::get('/lider', [LiderController::class, 'index'])->name('lider.liderpage');
Route::get('/membro', [MembroController::class, 'index'])->name('membro.membro');
