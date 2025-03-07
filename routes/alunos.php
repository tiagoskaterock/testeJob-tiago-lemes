<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::prefix('/admin/alunos')
    ->name('admin.alunos.')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', [AlunoController::class, 'index'])->name('index');
        Route::get('/adicionar', [AlunoController::class, 'create'])->name('create');
        Route::put('/store', [AlunoController::class, 'store'])->name('store');
        Route::get('/{id}/{slug?}', [AlunoController::class, 'show'])->name('show');
        Route::get('/editar/{id}/{slug?}', [AlunoController::class, 'edit'])->name('edit');
        Route::patch('/update/{id}', [AlunoController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [AlunoController::class, 'destroy'])->name('destroy');
    });
