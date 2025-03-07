<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::
    prefix('/admin/users')
    ->name('admin.users')
    ->middleware('auth')
    ->group( function() {

    Route::
        get('', 'UserController@index')
        ->name('');

    Route::
        get('/adicionar', 'UserController@create')
        ->name('.create');

    Route::
        put('/store', 'UserController@store')
        ->name('.store');

    Route::
        get('/{id}/{slug?}', 'UserController@show')
        ->name('.show');

    Route::
        get('/editar/{id}/{slug?}', 'UserController@edit')
        ->name('.edit');

    Route::
        patch('/update/{id}', 'UserController@update')
        ->name('.update');

    Route::
        delete('/destroy/{id}', 'UserController@destroy')
        ->name('.destroy');
});
