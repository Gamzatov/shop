<?php

use App\Http\Controllers\Category\CreateController;
use App\Http\Controllers\Category\DeleteController;
use App\Http\Controllers\Category\EditController;
use App\Http\Controllers\Category\IndexController;
use App\Http\Controllers\Category\ShowController;
use App\Http\Controllers\Category\StoreController;
use App\Http\Controllers\Category\UpdateController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index'])->name('main.index');

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('categories.index');
    Route::get('/create', [CreateController::class, 'index'])->name('categories.create');
    Route::post('/', [StoreController::class, 'index'])->name('categories.store');
    Route::get('/{category}/edit', [EditController::class, 'index'])->name('categories.edit');
    Route::get('/{category}', [ShowController::class, 'index'])->name('categories.show');
    Route::patch('/{category}', [UpdateController::class, 'index'])->name('categories.update');
    Route::delete('/{category}', [DeleteController::class, 'index'])->name('categories.delete');
});
Route::group(['prefix' => 'tag'], function () {
    Route::get('/', [\App\Http\Controllers\Tag\IndexController::class, 'index'])->name('tag.index');
    Route::get('/create', [\App\Http\Controllers\Tag\CreateController::class, 'index'])->name('tag.create');
    Route::post('/', [\App\Http\Controllers\Tag\StoreController::class, 'index'])->name('tag.store');
    Route::get('/{tag}/edit', [\App\Http\Controllers\Tag\EditController::class, 'index'])->name('tag.edit');
    Route::get('/{tag}', [\App\Http\Controllers\Tag\ShowController::class, 'index'])->name('tag.show');
    Route::patch('/{tag}', [\App\Http\Controllers\Tag\UpdateController::class, 'index'])->name('tag.update');
    Route::delete('/{tag}', [\App\Http\Controllers\Tag\DeleteController::class, 'index'])->name('tag.delete');
});
Route::group(['prefix' => 'color'], function () {
    Route::get('/', [\App\Http\Controllers\Color\IndexController::class, 'index'])->name('color.index');
    Route::get('/create', [\App\Http\Controllers\Color\CreateController::class, 'index'])->name('color.create');
    Route::post('/', [\App\Http\Controllers\Color\StoreController::class, 'index'])->name('color.store');
    Route::get('/{color}/edit', [\App\Http\Controllers\Color\EditController::class, 'index'])->name('color.edit');
    Route::get('/{color}', [\App\Http\Controllers\Color\ShowController::class, 'index'])->name('color.show');
    Route::patch('/{color}', [\App\Http\Controllers\Color\UpdateController::class, 'index'])->name('color.update');
    Route::delete('/{color}', [\App\Http\Controllers\Color\DeleteController::class, 'index'])->name('color.delete');
});
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [\App\Http\Controllers\User\IndexController::class, 'index'])->name('user.index');
    Route::get('/create', [\App\Http\Controllers\User\CreateController::class, 'index'])->name('user.create');
    Route::post('/', [\App\Http\Controllers\User\StoreController::class, 'index'])->name('user.store');
    Route::get('/{user}/edit', [\App\Http\Controllers\User\EditController::class, 'index'])->name('user.edit');
    Route::get('/{user}', [\App\Http\Controllers\User\ShowController::class, 'index'])->name('user.show');
    Route::patch('/{user}', [\App\Http\Controllers\User\UpdateController::class, 'index'])->name('user.update');
    Route::delete('/{user}', [\App\Http\Controllers\User\DeleteController::class, 'index'])->name('user.delete');
});
Route::group(['prefix' => 'products'], function () {
    Route::get('/', [\App\Http\Controllers\Product\IndexController::class, 'index'])->name('product.index');
    Route::get('/create', [\App\Http\Controllers\Product\CreateController::class, 'index'])->name('product.create');
    Route::post('/', [\App\Http\Controllers\Product\StoreController::class, 'index'])->name('product.store');
    Route::get('/{product}/edit', [\App\Http\Controllers\Product\EditController::class, 'index'])->name('product.edit');
    Route::get('/{product}', [\App\Http\Controllers\Product\ShowController::class, 'index'])->name('product.show');
    Route::patch('/{product}', [\App\Http\Controllers\Product\UpdateController::class, 'index'])->name('product.update');
    Route::delete('/{product}', [\App\Http\Controllers\Product\DeleteController::class, 'index'])->name('product.delete');
});
