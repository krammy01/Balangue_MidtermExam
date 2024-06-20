<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            'Electronics' => [
                [
                    'name' => 'Samsung TV',
                    'price' => 800.00,
                    'description' => 'A 55-inch 4K smart TV with HDR and Dolby Atmos',
                ],
                [
                    'name' => 'Apple iPhone 13',
                    'price' => 999.99,
                    'description' => 'A 6.1-inch smartphone with A15 Bionic chip and dual-camera setup',
                ],
                [
                    'name' => 'Sony Wireless Headphones',
                    'price' => 299.99,
                    'description' => 'Wireless noise-cancelling headphones with long battery life and advanced noise-cancelling technology',
                ],
            ],
        ];
        return view('products.index', compact('products'));
    }
}