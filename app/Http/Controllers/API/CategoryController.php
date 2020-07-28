<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showAllCategory(){
        $AllCategory = Category::all();
        return view('pages.category', compact('AllCategory'));
    }
}
