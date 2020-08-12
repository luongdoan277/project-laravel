<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
    public function index(){
        return view('Admin.listOrder');
    }

    public function orderDetails(){
        return view('Admin.orderDetails');
    }
}
