<?php

use App\Http\Controllers\ImageCrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ImageCrudController::class, 'index'])->name('home');
Route::get('/create-product', [ImageCrudController::class, 'create'])->name('create.product');
Route::post('/store-product', [ImageCrudController::class, 'store'])->name('store.product');
Route::get('/show-product/{id}', [ImageCrudController::class, 'edit'])->name('edit.product');

Route::get('/delete-product/{id}', [ImageCrudController::class, 'distroy'])->name('delete.product');
