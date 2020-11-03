<?php

namespace App\Http\Controllers;

use App\Models\banglajob;
use Illuminate\Http\Request;

class BanglajobController extends Controller
{
    public function index()
    {
        $all_data = banglajob::all();
        return view('backpage.page.banglajob', compact('all_data',$all_data));
    }


    public function store(Request $request)
    {
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);
        $data = new banglajob;
        $data->link = $request->link;
        $data->name = $request->name;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->sl = $request->sl;
        $data->image = $imageName;
        $data->save();
        return redirect()->back();





    }

    public function destroy(Request $request )
    {
        $del = banglajob::find($request->id);
        unlink(public_path('images/'.$del->image));
        banglajob::destroy($request->id);

        return redirect()->back();
    }


}
