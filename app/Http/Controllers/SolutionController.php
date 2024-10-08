<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use App\Models\News;
use App\Http\Requests\UpdateSolutionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.solution.index',[
            'solutions' => Solution::all(),
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
        return view('admin.solution.create',[
            'title'=> "Solution",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSolutionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=> 'required|max:255',
            'description'=> 'required',
            'image'=> 'image|file|max:2048',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('solution-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        $solution = Solution::create($validateData);

        // return redirect('/admin/solution')->with('success', 'Data has been added!');
        return redirect()->route('admin.solution.edit', [
            'solution' => $solution->name,
        ])->with('success', 'Data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show(Solution $solution)
    {
        return view('admin.solution.detail',[
            'solution' => $solution,
            'title'=> "Solution"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit(Solution $solution)
    {
        return view('admin.solution.edit',[
            'solution' => $solution,
            'title'=> "Solution"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSolutionRequest  $request
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solution $solution)
    {
        $description = $request->description;

        libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadHTML($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

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
 
       $description = $dom->saveHTML();

        $rules = [
            'name'=> 'required|max:255',
            'description'=> 'required',
            'image'=> 'image|file|max:2048',
        ];

        $validateData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('solution-images');
        }
        $validateData['description'] = $description;

        Solution::where('id', $solution->id)->update($validateData);

        return redirect('/admin/solution')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {

        if($solution->image){
            Storage::delete($solution->image);
        }
        Solution::destroy($solution->id);
        return redirect('/admin/solution')->with('success', 'Data has been deleted!');    }
}
