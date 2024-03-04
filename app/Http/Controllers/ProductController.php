<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    $products = [
        (object) ['id' => 1, 'name' => 'T-shirt', 'description' => 'Comfortable cotton T-shirt', 'price' => 20],
        (object) ['id' => 2, 'name' => 'Jeans', 'description' => 'Stylish denim jeans', 'price' => 50],
        (object) ['id' => 3, 'name' => 'Sneakers', 'description' => 'Sporty sneakers for everyday wear', 'price' => 30],
    ];

    return view('index', compact('products'));
}


    public function show($id)
    {
        $product = (object) ['id' => $id, 'name' => 'Sample Product', 'description' => 'This is a sample product', 'price' => 10];
        
        return view('products.show', compact('product'));
    }
}
