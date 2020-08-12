<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        $Products = Product::paginate(4);
        return view('Admin.home',compact('Products'));
    }
}
