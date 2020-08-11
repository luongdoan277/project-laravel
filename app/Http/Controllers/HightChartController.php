<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class HightChartController extends Controller
{
    public function index()
    {
        return view('component.highchart');
    }
}
