<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HightChartController extends Controller
{
    function show(){
        return view('component.highchart');
    }
}
