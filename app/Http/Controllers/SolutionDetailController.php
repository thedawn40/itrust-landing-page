<?php

namespace App\Http\Controllers;

use App\Models\SolutionDetail;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SolutionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.solution.detail.index',[
            'solutions' => Solution::all(),
            'title'=> "Solution"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Solution $solution)
    {
        return view('admin.solution.detail.create',[
            'solution' => $solution,
            'title'=> "Solution"
        ]);

    }

    public function addDetail(Solution $solution)
    {
        return view('admin.solution.detail.create',[
            'solution' => $solution,
            'title'=> "Solution"
        ]);

    }

    public function viewDetail(Solution $solution, SolutionDetail $details)
    {

        return view('admin.solution.detail.detail',[
            'solution' => $solution,
            'solutionDetail' => $details,
            'title'=> "Solution"
        ]);
    }

    public function showDetail(Solution $solution, SolutionDetail $details)
    {

        return view('admin.solution.detail.edit',[
            'solution' => $solution,
            'solutionDetail' => $details,
            'title'=> "Solution"
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
        dd($request);
        $validateData = $request->validate([
            'name'=> 'required|max:255',
            'description'=> 'required',
            'image'=> 'image|file|max:2048',
            'solutionid'=> 'required',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('solution-detail-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['solution_id'] = $request->solutionid;

        SolutionDetail::create($validateData);

        return redirect('/admin/solution')->with('success', 'Data has been added!');
    }

    public function createDetail(Solution $solution, Request $request)
    {
        $validateData = $request->validate([
            'name'=> 'required|max:255',
            'description'=> 'required',
            'image'=> 'image|file|max:2048',
            'solutionid'=> 'required',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('solution-detail-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['solution_id'] = $request->solutionid;

        SolutionDetail::create($validateData);

        return redirect()->route('admin.solution.edit', [
            'solution' => $solution->name,
        ])->with('success', 'Data detail has been added!');
    }

    public function updateDetail(Solution $solution, SolutionDetail $details, Request $request)
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
            $validateData['image'] = $request->file('image')->store('solution-detail-images');
        }
        $validateData['description'] = $description;
        $validateData['solution_id'] = $request->solutionid;

        SolutionDetail::where('id', $details->id)->update($validateData);

        return redirect()->route('admin.solution.edit', [
            'solution' => $solution->name,
        ])->with('success', 'Data detail has been updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SolutionDetail  $solutionDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SolutionDetail $solutionDetail)
    {
        return view('admin.solution.detail.detail',[
            'solutionDetail' => $solutionDetail,
            'title'=> "Solution Detail"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SolutionDetail  $solutionDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(SolutionDetail $solutionDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SolutionDetail  $solutionDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SolutionDetail $solutionDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SolutionDetail  $solutionDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SolutionDetail $details)
    {
        dd($details);
        
        if($details->image){
            Storage::delete($details->image);
        }
        SolutionDetail::destroy($details->id);
        return redirect('/admin/solution')->with('success', 'Data has been deleted!');
    }


    public function deleteDetail(Solution $solution, SolutionDetail $details)
    {      
        if ($details->image) {
            Storage::delete($details->image);
        }
        SolutionDetail::destroy($details->id);

        return redirect()->route('admin.solution.edit', [
            'solution' => $solution->name,
        ])->with('success', 'Data detail has been deleted!');
    }

}
