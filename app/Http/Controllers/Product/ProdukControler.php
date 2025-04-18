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

        $products = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 15000000, 'category' => 'Electronics'],
            ['id' => 2, 'name' => 'Smartphone', 'price' => 5000000, 'category' => 'Electronics'],
            ['id' => 3, 'name' => 'Tablet', 'price' => 3000000, 'category' => 'Electronics'],
            ['id' => 4, 'name' => 'Headphones', 'price' => 1000000, 'category' => 'Electronics'],
            ['id' => 5, 'name' => 'Smartwatch', 'price' => 2000000, 'category' => 'Electronics'],
            ['id' => 6, 'name' => 'Camera', 'price' => 8000000, 'category' => 'Electronics'],
            ['id' => 7, 'name' => 'Printer', 'price' => 2500000, 'category' => 'Electronics'],
            ['id' => 8, 'name' => 'Monitor', 'price' => 4000000, 'category' => 'Electronics'],
            ['id' => 9, 'name' => 'Keyboard', 'price' => 500000, 'category' => 'Electronics'],
            ['id' => 10, 'name' => 'Mouse', 'price' => 300000, 'category' => 'Electronics'],
        ];

        return view('product.index', compact('products', 'name', 'age', 'hobby', 'phone'));
    }
}
