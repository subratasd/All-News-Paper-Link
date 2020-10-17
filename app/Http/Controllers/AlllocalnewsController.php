<?php

namespace App\Http\Controllers;


use App\Models\alllocalnews;
use Illuminate\Http\Request;

class AlllocalnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = alllocalnews::all();
        return view('backpage.page.alllocalnews', compact('all_data',$all_data));
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
        $data = new alllocalnews;
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
     * @param  \App\Models\alllocalnews  $alllocalnews
     * @return \Illuminate\Http\Response
     */
    public function show(alllocalnews $alllocalnews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alllocalnews  $alllocalnews
     * @return \Illuminate\Http\Response
     */
    public function edit(alllocalnews $alllocalnews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\alllocalnews  $alllocalnews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alllocalnews $alllocalnews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alllocalnews  $alllocalnews
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request )
    {
        $del = alllocalnews::find($request->id);
        unlink(public_path('images/'.$del->image));
        alllocalnews::destroy($request->id);

        return redirect()->back();
    }
}