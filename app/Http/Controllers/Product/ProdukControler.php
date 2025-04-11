<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukControler extends Controller
{
    public function showProduct()
    {
        $name = 'Jone Doe';
        $age = 25;
        $hobby = 'Coding';
        $phone = '08123456789';

        $product = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 15000000, 'category' => 'Electronics'],
            ['id' => 2, 'name' => 'Smartphone', 'price' => 5000000, 'category' => 'Electronics'],
            ['id' => 3, 'name' => 'Tablet', 'price' => 3000000, 'category' => 'Electronics'],
        ];

        return view('product.index', compact('name', 'age', 'hobby', 'phone', 'product'));
    }
}
