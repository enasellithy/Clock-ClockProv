<?php

//namespace App\Http\Controllers;
namespace Clock\ClockProv;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClockFacdecs extends Controller
{
    public static function clock()
    {
    	return date('d/m/Y');
    }

    public static function map()
    {
    	return view('map');
    }
}
