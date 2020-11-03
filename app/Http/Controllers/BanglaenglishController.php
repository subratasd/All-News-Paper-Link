<?php

namespace App\Http\Controllers;


use App\Models\banglaenglish;
use Illuminate\Http\Request;

class BanglaenglishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = banglaenglish::all();
        return view('backpage.page.banglaenglish', compact('all_data',$all_data));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);
        $data = new banglaenglish;
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
     * @param  \App\Models\banglaenglish  $banglaenglish
     * @return \Illuminate\Http\Response
     */
    public function show(banglaenglish $banglaenglish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banglaenglish  $banglaenglish
     * @return \Illuminate\Http\Response
     */
    public function edit(banglaenglish $banglaenglish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banglaenglish  $banglaenglish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banglaenglish $banglaenglish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banglaenglish  $banglaenglish
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request )
    {
        $del = banglaenglish::find($request->id);
        unlink(public_path('images/'.$del->image));
        banglaenglish::destroy($request->id);

        return redirect()->back();
    }
}
