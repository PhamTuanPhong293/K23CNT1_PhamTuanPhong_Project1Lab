<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PtpAccountController extends Controller
{
    //
    public function index(){
        return "<h1> Welcome to, Phạm Tuấn Phong - Controller </h1>";
    }


//create form
public function create(){
    return view('ptp-account-create');
    }

}