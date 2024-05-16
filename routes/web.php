<?php

use Illuminate\Support\Facades\Route;


// nguoi dung
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as SanphamController;
use App\Http\Controllers\frontend\ContactController;

// quan ly
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;


// trang nguoi dung
Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('san-pham',[SanphamController::class,'index'])->name('site.product');
Route::get('chi-tiet-san-pham/{slug}',[SanphamController::class,'product_detail'])->name('site.product.detail');
Route::get('lien-he',[ContactController::class,'index'])->name('site.contact');

// trang quan tri
Route::prefix('admin')->group(function(){
Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');

Route::prefix('product')->group(function(){
   Route::get('/', [ProductController::class,'index'])->name('admin.product.index');
   Route::get('create', [ProductController::class,'create']);
   Route::get('{id}/edit', [ProductController::class,'edit']);
   Route::get('delete/{id}',[ProductController::class,'delete']);
});

Route::prefix('category')->group(function(){
    Route::get('/', [CategoryController::class,'index']);
    Route::get('category/create', [CategoryController::class,'category']);
    Route::get('category/{id}/edit', [CategoryController::class,'edit']);
    Route::get('category/delete/{id}', [CategoryController::class,'delete']);

});
Route::prefix('brand')->group(function(){
   Route::get('/', [BrandController::class,'index']);
   Route::get('brand/create', [BrandController::class,'category']);
   Route::get('brand/{id}/edit',  [BrandController::class,'edit']);
   Route::get('brand/delete/{id}',  [BrandController::class,'delete']);
    });
});