<?php

namespace App\Http\Controllers;

use App\Models\westbangle;
use Illuminate\Http\Request;

class WestbangleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = westbangle::all();
        return view('backpage.page.westbangle', compact('all_data',$all_data));
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
        $data = new westbangle;
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
     * @param  \App\Models\westbangle  $westbangle
     * @return \Illuminate\Http\Response
     */
    public function show(westbangle $westbangle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\westbangle  $westbangle
     * @return \Illuminate\Http\Response
     */
    public function edit(westbangle $westbangle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\westbangle  $westbangle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, westbangle $westbangle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\westbangle  $westbangle
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request )
    {
        $del = westbangle::find($request->id);
        unlink(public_path('images/'.$del->image));
        westbangle::destroy($request->id);

        return redirect()->back();
    }
}
