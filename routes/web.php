<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
    
Route::prefix('product')->group(function(){
       Route::get('/create',[ProductController::class,'createProduct'])->name('Acount.product.Create');
       Route::post('/storeProduct',[ProductController::class,'storeProduct'])->name('Acount.Product.StoreProduct');
       Route::get('/productList',[ProductController::class,'productList'])->name('Acount.Product.ProductList');
       Route::get('/EditProduct/{id}',[ProductController::class,'editeProduct'])->name('Acount.Product.EditeProduct');
       Route::post('/updateProduct/{id}',[ProductController::class,'updateProduct'])->name('Acount.Product.updateProduct');
       Route::get('/productdelete/{id}',[ProductController::class,'productdelete'])->name('Acount.Product.ProductDelete');

       //iamge
       Route::get('/ProductAddPicture/{id}',[ProductController::class,'ProductAddPicture'])->name('Acount.Product.ProductAddPicture');
       Route::post('/storeProductimage/{id}',[ProductController::class,'storeProductimage'])->name('Acount.Product.storeProductimage');
       Route::get('ProductImageList',[ProductController::class,'ProductImageList'])->name('Acount.Product.ProductImageList');
       Route::get('ProductimageDelete/{id}',[ProductController::class,'ProductimageDelete'])->name('Acount.Product.ProductimageDelete');

       //Color

       Route::get('/ProductAddColor/{id}',[ProductController::class,'ProductAddColor'])->name('Acount.Product.ProductAddColor');
       Route::post('/StoreProductImage/{id}',[ProductController::class,'StoreProductColor'])->name('Acount.Product.StoreProductColor');
       Route::get('/ProductColorList',[ProductController::class,'ProductColorList'])->name('Acount.Product.ProductColorList');
       Route::get('ProductColorDelete/{id}',[ProductController::class,'ProductColorDelete'])->name('Acount.Product.ProductColorDelete');

    });

});
