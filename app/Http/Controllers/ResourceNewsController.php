<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class ResourceNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', [
            'news' => News::all(),
            "title" => "News & Events",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create',[
            'categories' => Category::all(),
            "title" => "News & Events",
        ]);
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $body = $request->body;

        $dom = new \DomDocument();

       $dom->loadHtml($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $imageFile = $dom->getElementsByTagName('imageFile');
 
       foreach($imageFile as $item => $image)
       {
           $data = $image->getAttribute('src');
           list($type, $data) = explode(';', $data);
           list(, $data)      = explode(',', $data);
           $imgeData = base64_decode($data);
           $image_name= "/upload/" . time().$item.'.png';
           $path = public_path() . $image_name;
           file_put_contents($path, $imgeData);           
           $image->removeAttribute('src');
           $image->setAttribute('src', $image_name);
        }
 
       $body = $dom->saveHTML();

        $validateData = $request->validate([
            'title'=> 'required|max:255',
            'slug'=> 'required:unique:news',
            'category_id'=> 'required',
            'image'=> 'image|file|max:2048',
            'body' => 'required'
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('news-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 50);
        $validateData['body'] = $body;

        News::create($validateData);

        return redirect('/admin/news')->with('success', 'Data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin.news.detail',[
            'news'=> $news,
            "title" => "News & Events"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit',[
            'news' => $news,
            'categories' => Category::all(),
            "title" => "News & Events"
        ]);
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {

        $body = $request->body;

    //     $dom = new \DomDocument();

    //    $dom->loadHtml($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadHTML($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $imageFile = $dom->getElementsByTagName('imageFile');
 
       foreach($imageFile as $item => $image)
       {
           $data = $image->getAttribute('src');
           list($type, $data) = explode(';', $data);
           list(, $data)      = explode(',', $data);
           $imgeData = base64_decode($data);
           $image_name= "/upload/" . time().$item.'.png';
           $path = public_path() . $image_name;
           file_put_contents($path, $imgeData);           
           $image->removeAttribute('src');
           $image->setAttribute('src', $image_name);
        }
 
       $body = $dom->saveHTML();

        $rules = [
            'title'=> 'required|max:255',
            'category_id'=> 'required',
            'image'=> 'image|file|max:2048',
            'body' => 'required'
        ];

        if($request->slug != $news->slug){
            $rules['slug'] = 'required|unique:news';
        }

        $validateData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('news-images');
        }
        $validateData['body'] = $body;


        News::where('id', $news->id)->update($validateData);

        return redirect('/admin/news')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if($news->image){
            Storage::delete($news->image);
        }
        News::destroy($news->id);
        return redirect('/admin/news')->with('success', 'Data has been deleted!');
    }

    public function checkSlug(Request $request){

        $slug = SlugService::createSlug(News::class, 'slug',$request->title);
        return response()->json(['slug'=>$slug]);
    }
}
