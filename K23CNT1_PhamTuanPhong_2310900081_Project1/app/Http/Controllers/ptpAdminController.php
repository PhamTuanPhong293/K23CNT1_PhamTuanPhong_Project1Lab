<?php

namespace App\Http\Controllers;

use App\Models\PTP_QUAN_TRI;
use Illuminate\Http\Request;

class ptpAdminController extends Controller
{
    public function ptpList(){
        $ptpadmin = PTP_QUAN_TRI::all();
        return view("ptpadmins.ptpadmin.ptplist", compact("ptpadmin"));
    }
}
