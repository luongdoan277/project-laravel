<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductSeller(){
        $ProductSeller = Product::find(5);
        return view('homepage', compact('ProductSeller'));
    }
}
