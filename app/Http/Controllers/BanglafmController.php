<?php

namespace App\Http\Controllers;

use App\Models\banglafm;
use Illuminate\Http\Request;

class BanglafmController extends Controller
{

    public function index()
    {
        $all_data = banglafm::all();
        return view('backpage.page.banglafm', compact('all_data',$all_data));

    }




    public function store(Request $request)
    {
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);
        $data = new banglafm;
        $data->link = $request->link;
        $data->name = $request->name;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->sl = $request->sl;
        $data->image = $imageName;
        $data->save();
        return redirect()->back();
    }




    public function update(Request $request, banglafm $banglafm)
    {
        //
    }


        public function destroy(Request $request )
    {
        $del = banglafm::find($request->id);
        unlink(public_path('images/'.$del->image));
        banglafm::destroy($request->id);

        return redirect()->back();
    }

}
