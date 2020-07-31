<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $AllCategory = Category::all();
        return view('pages.allcategory', compact('AllCategory'));
    }
    public function show($id){
        $categories = Category::findOrFail($id);

    }
}
