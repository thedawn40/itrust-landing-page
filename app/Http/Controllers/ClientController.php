<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.client.index', [
            'client' => Client::all(),
            'title'=> "Client"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create',[
            'title'=> "Client"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=> 'required|max:255',
            'image'=> 'image|file|max:2048',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('client-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Client::create($validateData);

        return redirect('/admin/client')->with('success', 'Data has been added!');    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('admin.client.detail',[
            'client'=> $client,
            "title" => "Client"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.client.edit',[
            'client'=> $client,
            "title" => "Client"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
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

        Client::where('id', $client->id)->update($validateData);

        return redirect('/admin/client')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        if($client->image){
            Storage::delete($client->image);
        }
        Client::destroy($client->id);
        return redirect('/admin/client')->with('success', 'Data has been deleted!');
    }
}
