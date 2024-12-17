<?php

namespace App\Http\Controllers;

use App\Models\PtpNhaCC;
use Illuminate\Http\Request;

class PtpNhaCCController extends Controller
{
    //
    public function list()
    {
        $ptpNhaCCs = PtpNhaCC::all();
        return view('PtpNhaCC.List',['ptpNhaCCs'=>$ptpNhaCCs]);
    }
}
