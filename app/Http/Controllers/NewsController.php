<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        return view('admin/news', [
            "title" => "News & Events",
            "posts" => News::all()
        ]);
    }

    public function show(News $news){
        return view('admin/newsdetail', [
            "title" => "News",
            "post" => $news
        ]);
    }
}
