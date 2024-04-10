<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main.index');
Route::post('/', [App\Http\Controllers\MainController::class, 'form_submit'])->name('main.form.submit');
Route::post('/logout', [App\Http\Controllers\MainController::class, 'logout'])->name('logout.get');

Route::group(['middleware' => ['auth', \App\Http\Middleware\AdminMiddleware::class]], function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'products'], function () {
        Route::get('/create', [App\Http\Controllers\AdminController::class, 'create_product'])->name('admin.products.create');
        Route::put('/store', [App\Http\Controllers\AdminController::class, 'store_product'])->name('admin.products.store');
        Route::delete('/delete/{product}', [App\Http\Controllers\AdminController::class, 'delete_product'])->name('admin.products.delete');
        Route::get('/edit/{product}', [App\Http\Controllers\AdminController::class, 'edit_product'])->name('admin.products.edit');
        Route::patch('/update/{product}', [App\Http\Controllers\AdminController::class, 'update_product'])->name('admin.products.update');
    });
});
