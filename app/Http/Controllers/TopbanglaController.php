<?php

namespace App\Http\Controllers;

use App\Models\topbangla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Validation\ValidationException;

class TopbanglaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = topbangla::all();
        return view('backpage.page.top10bangla', compact('all_data',$all_data));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);
        $data = new topbangla;
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
     * @param  \App\Models\topbangla  $topbangla
     * @return \Illuminate\Http\Response
     */
    public function show(topbangla $topbangla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\topbangla  $topbangla
     * @return \Illuminate\Http\Response
     */
    public function edit(topbangla $topbangla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\topbangla  $topbangla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, topbangla $topbangla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\topbangla  $topbangla
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request )
    {
        $del = topbangla::find($request->id);
        unlink(public_path('images/'.$del->image));
        topbangla::destroy($request->id);

        return redirect()->back();
    }
}
