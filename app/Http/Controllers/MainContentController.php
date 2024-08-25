<?php

namespace App\Http\Controllers;

use App\Models\MainContent;
use Illuminate\Http\Request;

class MainContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.maincontent.index',[
            'main' => MainContent::all(),
            'title'=> "Solution"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.maincontent.create',[
            "title" => "Main Content",
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
        $content = $request->content;

        $dom = new \DomDocument();

       $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

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
 
       $content = $dom->saveHTML();

        $validateData = $request->validate([
            'description' => 'required',
            'content' => 'required'
        ]);

        MainContent::create($validateData);

        return redirect('/admin/main-content')->with('success', 'Data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainContent  $mainContent
     * @return \Illuminate\Http\Response
     */
    public function show(MainContent $mainContent)
    {
        return view('admin.maincontent.detail',[
            'main' => $mainContent,
            "title" => "News & Events"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainContent  $mainContent
     * @return \Illuminate\Http\Response
     */
    public function edit(MainContent $mainContent)
    {
        return view('admin.maincontent.edit',[
            'main' => $mainContent,
            "title" => "News & Events"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MainContent  $mainContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainContent $mainContent)
    {
        $content = $request->content;

    //     $dom = new \DomDocument();

    //    $dom->loadHtml($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

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
 
       $content = $dom->saveHTML();

        $rules = [
            'description' => 'required',
            'content' => 'required'
        ];


        $validateData = $request->validate($rules);
        $validateData['content'] = $content;


        MainContent::where('id', $mainContent->id)->update($validateData);

        return redirect('/admin/main-content')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainContent  $mainContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainContent $mainContent)
    {
        MainContent::destroy($mainContent->id);
        return redirect('/admin/main-content')->with('success', 'Data has been deleted!');
    }
}
