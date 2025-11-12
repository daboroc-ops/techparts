<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/viewproduct', [productcontroller::class, 'index'])->name('product.view');
Route::get('/producthome' ,[productcontroller::class, 'manage_product'])->name('product.search');
Route::get('/productview' ,[productcontroller::class, 'product_manage'])->name('product.list');
Route::get('/products/add',[productcontroller::class, 'product_create'])->name('product.create');
Route::post('/product/add', [productcontroller::class, 'product_save'])->name('product.save');
Route::get('/product/{product_id}/edit', [ProductController::class, 'product_edit'])->name('product.edit');
Route::put('/product/update/{product_id}', [ProductController::class, 'product_update'])->name('product.update');
route::delete('/product/{product_id}/delete', [ProductController::class, 'product_delete'])->name('product.delete');
Route::get('/products/pdf', [ProductController::class, 'downloadPDF'])->name('products.pdf');