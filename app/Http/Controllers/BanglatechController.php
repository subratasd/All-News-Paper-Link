<?php

namespace App\Http\Controllers;

use App\Models\banglatech;
use Illuminate\Http\Request;

class BanglatechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = banglatech::all();
        return view('backpage.page.banglatech', compact('all_data',$all_data));

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
        $data = new banglatech;
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
     * @param  \App\Models\banglatech  $banglatech
     * @return \Illuminate\Http\Response
     */
    public function show(banglatech $banglatech)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banglatech  $banglatech
     * @return \Illuminate\Http\Response
     */
    public function edit(banglatech $banglatech)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banglatech  $banglatech
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banglatech $banglatech)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banglatech  $banglatech
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request )
    {
        $del = banglatech::find($request->id);
        unlink(public_path('images/'.$del->image));
        banglatech::destroy($request->id);

        return redirect()->back();
    }
}
