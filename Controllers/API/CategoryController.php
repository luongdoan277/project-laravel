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
    public function show($category_id){
        $categories = Category::findOrFail($category_id);
        return view('pages.category', compact('categories'));
    }
}
