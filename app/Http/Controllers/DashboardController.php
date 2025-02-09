<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solution;
use App\Models\News;
use App\Models\Partner;
use App\Models\Client;
use App\Models\Message;

class DashboardController extends Controller
{
    
    public function index(){
        return view('adminv2/dashboard',[
            "title" => "Dashboard",
            "totalSolution" => Solution::count(),
            "totalNews" => News::count(),
            "totalPartner" => Partner::count(),
            "totalClient" => Client::count(),
            'messages' => Message::latest()->get(),
            "news" => News::latest()->take(5)->get()
        ]);    
    }
}
