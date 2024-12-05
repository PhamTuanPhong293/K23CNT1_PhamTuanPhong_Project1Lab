<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class PtpAccountController extends Controller
{
    // Welcome page
    public function index()
    {
        return "<h1>Welcome to, Phạm Tuấn Phong - Controller</h1>";
    }

    // Create form
    public function create()
    {
        // Ensure the view exists
        return view('ptp-account-create');
    }

    // Show specific data
    public function ptpShowData()
    {
        $data = ['2310900081', 'Phạm Tuấn Phong']; // Array for data
        return view('ptp-account-showData', ['ptpData' => $data]); // Passing data to view
    }

    // List all accounts
    public function ptpList()
    {
        $data = [
            ["id" => "2310900081", "UserName" => "PhongPham", "Password" => "123456a@", "FullName" => "Phạm Tuấn Phong"],
            ["id" => "2310900090", "UserName" => "Devmaster", "Password" => "123456a@", "FullName" => "Devmaster Academy"],
            ["id" => "2310900081", "UserName" => "PhongPham", "Password" => "123456a@", "FullName" => "Phạm Tuấn Phong"],
            ["id" => "2310900081", "UserName" => "PhongPham", "Password" => "123456a@", "FullName" => "Phạm Tuấn Phong"]
        ];
        return view('ptp-account-list', ['list' => $data]); // Passing data to view
    }
    public function ptpGetAll()
    {
        $model = FacadesDB::table('ptpaccount')->get();
        return view('ptp-account-all',['model'=> $model]);
    }
}
