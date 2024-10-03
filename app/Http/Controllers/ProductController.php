<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function show($title)
    {
        $product = Product::with(['images'])->where('title', $title)->first();
        return view('user.show', ['product' => $product]);


    }

}
