<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/panel', function () {
    return view('Admin.index');
});

Route::prefix('acount')->group(function(){
    Route::prefix('category')->group(function(){
    Route::get('/create',[CategoryController::class,'create'])->name('Acount.Category.Create');
    Route::post('/storeCategory',[CategoryController::class,'storeCategory'])->name('Acount.Categoryt.StoreCategory');
    Route::get('/categoryList',[CategoryController::class,'categoryList'])->name('Acount.Category.CategoryList');
    Route::get('/categoryEdite/{id}',[CategoryController::class,'categoryEdite'])->name('Acount.Category.CategoryEdite');
    Route::post('/categoryUpdate/{id}',[CategoryController::class,'categoryUpdate'])->name('Acount.Category.CategoryUpdate');
    Route::get('/categorydelete/{id}',[CategoryController::class,'categorydelete'])->name('Acount.Category.CategoryDelete');
});
});
