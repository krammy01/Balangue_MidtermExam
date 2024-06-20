<?php

namespace App\Http\Controllers;

abstract class Controller
{
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    
    class ProductController extends \Illuminate\Routing\Controller
    {
        public function index()
        {
            $products = [
                [
                    'name' => 'Samsung TV',
                    'price' => 6000.00,
                    'description' => 'A 55-inch 4K smart TV with HDR and Dolby Atmos',
                ],
                [
                    'name' => 'Apple iPhone 13',
                    'price' => 15000.99,
                    'description' => 'A 6.1-inch smartphone with A15 Bionic chip and dual-camera setup',
                ],
                [
                    'name' => 'Sony Wireless Headphones',
                    'price' => 2999.99,
                    'description' => 'Wireless noise-cancelling headphones with long battery life and advanced noise-cancelling technology',
                ],
            ];
            return view('products.index', compact('products'));
        }
    }
}
