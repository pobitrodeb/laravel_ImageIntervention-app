<?php

use App\Http\Controllers\ImageCrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ImageCrudController::class, 'index']);
Route::get('/create-product', [ImageCrudController::class, 'create'])->name('create.product');
Route::post('/store-product', [ImageCrudController::class, 'store'])->name('store.product');
