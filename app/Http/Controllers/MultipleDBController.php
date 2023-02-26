<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Blog;

class MultipleDBController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $blogs = Blog::all();

        return response()->json([
            'products' => $products,
            'blogs' => $blogs,
        ]);
    }
}
