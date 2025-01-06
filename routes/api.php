<?php

use App\Http\Controllers\Person\StoreController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Person', 'prefix' => 'people'], function () {
    Route::post('/', [StoreController::class, 'store']);
    Route::get('/index', [StoreController::class, 'index']);
    Route::get('/{person}', [StoreController::class, 'show']);
    Route::patch('/{person}', [StoreController::class, 'update']);
    Route::delete('/{person}', [StoreController::class, 'destroy']);
});

