<?php

namespace App\Http\Controllers;

use App\Models\banglamagazin;
use Illuminate\Http\Request;

class BanglamagazinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = banglamagazin::all();
        return view('backpage.page.banglamagazin', compact('all_data',$all_data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);
        $data = new banglamagazin;
        $data->link = $request->link;
        $data->name = $request->name;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->sl = $request->sl;
        $data->image = $imageName;
        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banglamagazin  $banglamagazin
     * @return \Illuminate\Http\Response
     */
    public function show(banglamagazin $banglamagazin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banglamagazin  $banglamagazin
     * @return \Illuminate\Http\Response
     */
    public function edit(banglamagazin $banglamagazin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banglamagazin  $banglamagazin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banglamagazin $banglamagazin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banglamagazin  $banglamagazin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request )
    {
        $del = banglamagazin::find($request->id);
        unlink(public_path('images/'.$del->image));
        banglamagazin::destroy($request->id);

        return redirect()->back();
    }
}
