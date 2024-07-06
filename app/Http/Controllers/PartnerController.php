<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Requests\UpdatePartnerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.partner.index', [
            'partner' => Partner::all(),
            'title'=> "Partner"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create',[
            'title'=> "Partner"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=> 'required|max:255',
            'image'=> 'image|file|max:2048',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('partner-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Partner::create($validateData);

        return redirect('/admin/partner')->with('success', 'Data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        return view('admin.partner.detail',[
            'partner'=> $partner,
            "title" => "Partner"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('admin.partner.edit',[
            'partner' => $partner,
            "title" => "Partner"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartnerRequest  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
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

        Partner::where('id', $partner->id)->update($validateData);

        return redirect('/admin/partner')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        if($partner->image){
            Storage::delete($partner->image);
        }
        Partner::destroy($partner->id);
        return redirect('/admin/partner')->with('success', 'Data has been deleted!');
    }
}
