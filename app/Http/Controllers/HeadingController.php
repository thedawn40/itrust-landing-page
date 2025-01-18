<?php

namespace App\Http\Controllers;

use App\Models\Heading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminv2.heading.index', [
            'headings' => Heading::all(),
            'title'=> "Heading"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminv2.heading.create',[
            'title'=> "Heading"
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
            'image'=> 'image|file|max:2048',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('heading-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Heading::create($validateData);

        return redirect('/admin/heading')->with('success', 'Data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heading  $heading
     * @return \Illuminate\Http\Response
     */
    public function show(Heading $heading)
    {
        return view('adminv2.heading.detail',[
            'heading'=> $heading,
            "title" => "Heading"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Heading  $heading
     * @return \Illuminate\Http\Response
     */
    public function edit(Heading $heading)
    {
        return view('adminv2.heading.edit',[
            'heading' => $heading,
            "title" => "Heading"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heading  $heading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heading $heading)
    {
        $rules = [
            'name'=> 'required|max:255',
            'image'=> 'image|file|max:2048',
        ];

        // if($request->name != $partner->name){
        //     $rules['name'] = 'required|unique:partner';
        // }

        $validateData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('client-images');
        }

        Heading::where('id', $heading->id)->update($validateData);

        return redirect('/admin/heading')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heading  $heading
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heading $heading)
    {
        if($heading->image){
            Storage::delete($heading->image);
        }
        Heading::destroy($heading->id);
        return redirect('/admin/heading')->with('success', 'Data has been deleted!');
    }
}
