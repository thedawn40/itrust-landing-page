<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Partner;
use App\Models\Solution;

class HomeController extends Controller
{
    

    public function index(){
        return view('landingpage/home',[
            "title" => "Home",
            "solutions" => Solution::all(),
            "news" => News::all(),
            "partners" => Partner::all(),
            "clients" => Client::all(),
        ]);
    }

    public function solutions(){
        return view('landingpage/solutions',[
            "title" => "Solutions",
            "solutions" => Solution::all(),
            "partners" => Partner::all(),
        ]);
    }

    public function solutionDetail(Solution $solution){
        return view('landingpage/solutions-detail',[
            "title" => "Solutions",
            "solution" => $solution
        ]);
    }

    public function news(){
        return view('landingpage/news-events',[
            "title" => "News",
            "news" => News::all(),
        ]);
    }
    public function newsDetail(News $news){
        return view('landingpage/news-events-detail',[
            "title" => "News",
            "news" => $news
        ]);
    }

    public function contactus(){
        return view('landingpage/contact-us',[
            "title" => "News",
            "news" => News::all(),
        ]);
    }

}
