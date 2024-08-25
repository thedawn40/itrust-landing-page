<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Partner;
use App\Models\Solution;
use App\Models\MainContent;

class HomeController extends Controller
{
    

    public function index(){
        return view('landingpage/home',[
            "title" => "Home",
            "maincontent" => MainContent::all(),
            "solutions" => Solution::all(),
            "news" => News::all(),
            "partners" => Partner::all(),
            "clients" => Client::all(),
            "company" => Company::all()->first(),
        ]);
    }

    public function solutions(){
        return view('landingpage/solutions',[
            "title" => "Solutions",
            "solutions" => Solution::all(),
            "partners" => Partner::all(),
            "company" => Company::all()->first()
        ]);
    }

    public function solutionDetail(Solution $solution){
        return view('landingpage/solutions-detail',[
            "title" => "Solutions",
            "solution" => $solution,
            "company" => Company::all()->first()
        ]);
    }

    public function news(){
        return view('landingpage/news-events',[
            "title" => "News",
            "news" => News::all(),
            "company" => Company::all()->first()
        ]);
    }
    public function newsDetail(News $news){
        return view('landingpage/news-events-detail',[
            "title" => "News",
            "news" => $news,
            "company" => Company::all()->first()
        ]);
    }

    public function contactus(){
        return view('landingpage/contact-us',[
            "title" => "News",
            "news" => News::all(),
            "company" => Company::all()->first()
        ]);
    }

}
