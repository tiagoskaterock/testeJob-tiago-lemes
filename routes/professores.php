<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;

Route::prefix('/admin/professores')
    ->name('admin.professores')
    ->middleware('admin')
    ->group(function () {
        Route::get('/', [ProfessorController::class, 'index'])->name('');
        Route::get('/adicionar', [ProfessorController::class, 'create'])->name('.create');
        Route::put('/store', [ProfessorController::class, 'store'])->name('.store');
        Route::get('/{id}/{slug?}', [ProfessorController::class, 'show'])->name('.show');
        Route::get('/editar/{id}/{slug?}', [ProfessorController::class, 'edit'])->name('.edit');
        Route::patch('/update/{id}', [ProfessorController::class, 'update'])->name('.update');
        Route::delete('/destroy/{id}', [ProfessorController::class, 'destroy'])->name('.destroy');
    });
