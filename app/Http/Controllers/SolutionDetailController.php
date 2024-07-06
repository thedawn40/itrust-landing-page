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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        return redirect('/admin/solution')->with('success', 'Data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SolutionDetail  $solutionDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SolutionDetail $solutionDetail)
    {
        //
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
    public function destroy(SolutionDetail $solutionDetail)
    {
        if($solutionDetail->image){
            Storage::delete($solutionDetail->image);
        }
        SolutionDetail::destroy($solutionDetail->id);
        return redirect('/admin/solution')->with('success', 'Data has been deleted!');
    }
}
