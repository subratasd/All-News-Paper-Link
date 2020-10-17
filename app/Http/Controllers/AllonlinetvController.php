<?php

namespace App\Http\Controllers;


use App\Models\allonlinetv;
use Illuminate\Http\Request;

class AllonlinetvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = allonlinetv::all();
        return view('backpage.page.allonlintv', compact('all_data',$all_data));
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
        $data = new allonlinetv;
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
     * @param  \App\Models\allonlinetv  $allonlinetv
     * @return \Illuminate\Http\Response
     */
    public function show(allonlinetv $allonlinetv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\allonlinetv  $allonlinetv
     * @return \Illuminate\Http\Response
     */
    public function edit(allonlinetv $allonlinetv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\allonlinetv  $allonlinetv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, allonlinetv $allonlinetv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\allonlinetv  $allonlinetv
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request )
    {
        $del = allonlinetv::find($request->id);
        unlink(public_path('images/'.$del->image));
        allonlinetv::destroy($request->id);
        return redirect()->back();
    }
}
