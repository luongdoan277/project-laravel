<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HightChartController extends Controller
{
    public function index(){
        return view('component.highchart');
    }
}
