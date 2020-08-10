<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $ProductSeller = Product::all()->random(4);
        $Category = Category::all();
        return view('pages.home', compact(['ProductSeller', 'Category']));
    }
}
