<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;

Route::prefix('/admin/perfil')
    ->name('admin.perfil')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', [PerfilController::class, 'index'])->name('');
        Route::get('/adicionar', [PerfilController::class, 'create'])->name('.create');
        Route::put('/store', [PerfilController::class, 'store'])->name('.store');
        Route::get('/{id}/{slug?}', [PerfilController::class, 'show'])->name('.show');
        Route::get('/editar/{id}/{slug?}', [PerfilController::class, 'edit'])->name('.edit');
        Route::patch('/update/{id}', [PerfilController::class, 'update'])->name('.update');
        Route::delete('/destroy/{id}', [PerfilController::class, 'destroy'])->name('.destroy');
    });
