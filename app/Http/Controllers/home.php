<?php

namespace App\Http\Controllers;

use App\Models\allbanglanews;
use App\Models\allenglishnews;
use App\Models\alllocalnews;
use App\Models\allonlinetv;
use App\Models\banglaenglish;
use App\Models\banglafm;
use App\Models\banglajob;
use App\Models\banglamagazin;
use App\Models\banglaonlin;
use App\Models\banglatech;
use App\Models\shearbazar;
use App\Models\top10english;
use App\Models\top10portal;
use App\Models\top10tv;
use App\Models\topbangla;
use App\Models\westbangle;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Http;
use function GuzzleHttp\Promise\all;

class home extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function home(){
        $top10bangla = topbangla::orderBy('sl', 'ASC')->take(10)->get();
        $top10tv = top10tv::orderBy('sl', 'ASC')->take(10)->get();
        $top10portal = top10portal::orderBy('sl', 'ASC')->take(10)->get();
        $top10english = top10english::orderBy('sl', 'ASC')->take(10)->get();
        $allbanglanews = allbanglanews::orderBy('sl', 'ASC')->take(50)->get();
        $alllocalnews = alllocalnews::orderBy('sl', 'ASC')->take(50)->get();
        $allenglishnews = allenglishnews::orderBy('sl', 'ASC')->take(50)->get();
        $allonlintv = allonlinetv::orderBy('sl', 'ASC')->take(50)->get();
        $banglaenglish = banglaenglish::orderBy('sl', 'ASC')->take(50)->get();
        $shearbazar = shearbazar::orderBy('sl', 'ASC')->take(50)->get();
        $westbengl = westbangle::orderBy('sl', 'ASC')->take(50)->get();
        $banglamagazin = banglamagazin::orderBy('sl', 'ASC')->take(50)->get();
        $banglajob = banglajob::orderBy('sl', 'ASC')->take(50)->get();
        $banglatech = banglatech::orderBy('sl', 'ASC')->take(50)->get();
        $banglafm = banglafm::orderBy('sl', 'ASC')->take(50)->get();
        $banglaonlin = banglaonlin::orderBy('sl', 'ASC')->take(50)->get();


        return view('home',compact([
            $top10bangla, 'top10bangla',
            $top10tv, 'top10tv',
            $top10portal, 'top10portal',
            $top10english, 'top10english',
            $allbanglanews, 'allbanglanews',
            $alllocalnews, 'alllocalnews',
            $allenglishnews, 'allenglishnews',
            $allonlintv, 'allonlintv',
            $banglaenglish, 'banglaenglish',
            $shearbazar, 'shearbazar',
            $westbengl, 'westbengl',
            $banglamagazin, 'banglamagazin',
            $banglajob, 'banglajob',
            $banglatech, 'banglatech',
            $banglafm, 'banglafm',
            $banglaonlin, 'banglaonlin'
        ]));
    }

    public function headline(){
        return view('frontend.page.headline');
    }

    public function world(){
        return view('frontend.page.world');
    }
    public function ucon(){
        return view('frontend.page.ucon');
    }

    public function job(){
        return view('frontend.page.job');
    }

    public function corona(){
        return view('frontend.page.corona');
    }
    public function contact()
    {
        return view('frontend.page.contact');
    }
    public function store(Request $request){
        return redirect()->back();
    }
}
