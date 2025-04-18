<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\ProdukControler;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/products', [ProdukControler::class, 'showProduct']);
    // echo ("Ini Halaman Produk");

Route::get('/cart', function () {
    return view('product.cart');
});
Route::get('/checkout', function () {
    echo ("Ini Halaman Checkout");
});
Route::get('/hello/{name}', function ($name) {
    echo ("Hello ".$name);
});

Route::resource('example', ExampleController::class);

