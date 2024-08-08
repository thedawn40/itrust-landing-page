<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solution;
use App\Models\News;
use App\Models\Partner;
use App\Models\Client;

class DashboardController extends Controller
{
    
    public function index(){
        return view('admin/dashboard',[
            "title" => "Dashboard",
            "totalSolution" => Solution::count(),
            "totalNews" => News::count(),
            "totalPartner" => Partner::count(),
            "totalClient" => Client::count()
        ]);    
    }
}
