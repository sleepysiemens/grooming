<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/', [App\Http\Controllers\MainController::class, 'form_submit'])->name('main.form.submit');

//ADMIN
Route::group(['middleware' => ['auth', \App\Http\Middleware\AdminMiddleware::class]], function () {
    Route::get('/admin', [App\Http\Controllers\Admin\TimetableController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products.index');
        Route::get('/create', [\App\Http\Controllers\Admin\ProductController::class, 'create_product'])->name('admin.products.create');
        Route::put('/store', [\App\Http\Controllers\Admin\ProductController::class, 'store_product'])->name('admin.products.store');
        Route::delete('/delete/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'delete_product'])->name('admin.products.delete');
        Route::get('/edit/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'edit_product'])->name('admin.products.edit');
        Route::patch('/update/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'update_product'])->name('admin.products.update');
    });
    Route::group(['prefix' => 'applications'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\ApplicationController::class, 'index'])->name('admin.applications.index');
        Route::get('/edit/{application}', [\App\Http\Controllers\Admin\ApplicationController::class, 'edit'])->name('admin.applications.edit');
        Route::patch('/update/{application}', [\App\Http\Controllers\Admin\ApplicationController::class, 'update'])->name('admin.applications.update');
    });
});

//MASTER
Route::group(['middleware' => ['auth', \App\Http\Middleware\MasterMiddleware::class]], function () {
    Route::get('/timetable', [App\Http\Controllers\Master\MainController::class, 'index'])->name('master.index');
});
