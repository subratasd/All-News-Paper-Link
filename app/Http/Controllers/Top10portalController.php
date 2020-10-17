<?php

namespace App\Http\Controllers;

use App\Models\top10portal;
use Illuminate\Http\Request;

class Top10portalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $all_portal = top10portal::all();
        return view('backpage.page.top10portal', compact('all_portal',$all_portal));
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
        $data = new top10portal;
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
     * @param  \App\Models\top10portal  $top10portal
     * @return \Illuminate\Http\Response
     */
    public function show(top10portal $top10portal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\top10portal  $top10portal
     * @return \Illuminate\Http\Response
     */
    public function edit(top10portal $top10portal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\top10portal  $top10portal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, top10portal $top10portal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\top10portal  $top10portal
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request )
    {
        $del = top10portal::find($request->id);
        unlink(public_path('images/'.$del->image));
        top10portal::destroy($request->id);

        return redirect()->back();
    }
}
