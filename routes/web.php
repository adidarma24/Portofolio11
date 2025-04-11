<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\ProdukControler;
use App\Http\Controllers\ExampleController;

Route::get('/', function () {
    return view('Home');
});

Route::get('/product', function () {
    return view('product.product');
    // echo ("Ini Halaman Produk");
});
Route::get('/cart', function () {
    echo ("Ini Halaman Cart");
});
Route::get('/checkout', function () {
    echo ("Ini Halaman Checkout");
});
Route::get('/hello/{name}', function ($name) {
    echo ("Hello ".$name);
});

Route::resource('example', ExampleController::class);

Route::get('/product', [ProdukControler::class, 'showProduct']);