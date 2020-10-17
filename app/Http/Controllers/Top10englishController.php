<?php

namespace App\Http\Controllers;

use App\Models\top10english;
use App\Models\top10portal;
use Illuminate\Http\Request;

class Top10englishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $all_english = top10english::all();
        return view('backpage.page.top10english', compact('all_english',$all_english));
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
        $data = new top10english;
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
     * @param  \App\Models\top10english  $top10english
     * @return \Illuminate\Http\Response
     */
    public function show(top10english $top10english)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\top10english  $top10english
     * @return \Illuminate\Http\Response
     */
    public function edit(top10english $top10english)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\top10english  $top10english
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, top10english $top10english)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\top10english  $top10english
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $del = top10english::find($request->id);
        unlink(public_path('images/'.$del->image));
        top10english::destroy($request->id);

        return redirect()->back();
    }
}
