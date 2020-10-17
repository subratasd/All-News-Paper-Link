<?php

namespace App\Http\Controllers;

use App\Models\allbanglanews;
use App\Models\allenglishnews;
use Illuminate\Http\Request;

class AllenglishnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $all_data = allenglishnews::all();
        return view('backpage.page.allenglishnews', compact('all_data',$all_data));
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
        $data = new allenglishnews;
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
     * @param  \App\Models\allenglishnews  $allenglishnews
     * @return \Illuminate\Http\Response
     */
    public function show(allenglishnews $allenglishnews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\allenglishnews  $allenglishnews
     * @return \Illuminate\Http\Response
     */
    public function edit(allenglishnews $allenglishnews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\allenglishnews  $allenglishnews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, allenglishnews $allenglishnews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\allenglishnews  $allenglishnews
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request )
    {
        $del = allenglishnews::find($request->id);
        unlink(public_path('images/'.$del->image));
        allenglishnews::destroy($request->id);

        return redirect()->back();
    }
}
