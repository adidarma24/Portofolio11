<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    /**
     * Display a list of products.
     *
     * @return \Illuminate\View\View
     */
    public function showProduct()
    {
        // Data produk
        $products = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 15000000, 'category' => 'Electronics'],
            ['id' => 2, 'name' => 'Smartphone', 'price' => 5000000, 'category' => 'Electronics'],
            ['id' => 3, 'name' => 'Tablet', 'price' => 3000000, 'category' => 'Electronics'],
        ];

        // Kirim data ke view
        return view('product.index', compact('products'));
    }
}