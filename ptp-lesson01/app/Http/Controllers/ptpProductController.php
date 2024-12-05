<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ptpProductController extends Controller
{
    public function ptpIndex(){
        $fruits = array("Apple","Orange","Mango","Banana","Pineapple");
    return view('test', ["fruits"=> $fruits]);
    }
}
