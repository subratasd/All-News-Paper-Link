<?php

namespace App\Http\Controllers;

use App\Models\banglaonlin;
use Illuminate\Http\Request;

class BanglaonlinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = banglaonlin::all();
        return view('backpage.page.banglaonline', compact('all_data',$all_data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);
        $data = new banglaonlin;
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
     * @param  \App\Models\banglaonlin  $banglaonlin
     * @return \Illuminate\Http\Response
     */
    public function show(banglaonlin $banglaonlin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banglaonlin  $banglaonlin
     * @return \Illuminate\Http\Response
     */
    public function edit(banglaonlin $banglaonlin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banglaonlin  $banglaonlin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banglaonlin $banglaonlin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banglaonlin  $banglaonlin
     * @return \Illuminate\Http\RedirectResponse
     */

    public function destroy(Request $request )
    {
        $del = banglaonlin::find($request->id);
        unlink(public_path('images/'.$del->image));
        banglaonlin::destroy($request->id);

        return redirect()->back();
    }
}
