@extends('frontend.leyout.main')

@section('title', 'All bangladeshi News paper Links')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm card-border">
                    <div class="card-top-text">
                        <h4 class="text-center">
                            Bangla News Paper
                        </h4>
                    </div>
                    <div class="card-body">
                        @foreach($top10bangla as $top10b)
                        <div class="img-list text-center">
                            <a href="{{$top10b->link}}" target="_blank">
                                <img src="{{asset('images/'.$top10b->image)}}" width="100%" height="45px">
                                <div class="img-link text-center">
                                    <span>{{$top10b->name}}</span>
                                </div>
                            </a>
                        </div>
                        @endforeach



                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4 shadow-sm card-border">
                    <div class="card-top-text">
                        <h4 class="text-center">
                            Online Tv Chanel
                        </h4>
                    </div>
                    <div class="card-body">

                        @foreach($top10tv as $top10tv)
                            <div class="img-list text-center">
                                <a href="{{$top10tv->link}}" target="_blank">
                                    <img src="{{asset('images/'.$top10tv->image)}}" width="100%" height="45px">
                                    <div class="img-link text-center">
                                        <span>{{$top10tv->name}}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4 shadow-sm card-border">
                    <div class="card-top-text">
                        <h4 class="text-center">
                            Online News Portal
                        </h4>
                    </div>
                    <div class="card-body">

                        @foreach($top10portal as $top10po)
                            <div class="img-list text-center">
                                <a href="{{$top10po->link}}" target="_blank">
                                    <img src="{{asset('images/'.$top10po->image)}}" width="100%" height="45px">
                                    <div class="img-link text-center">
                                        <span>{{$top10po->name}}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4 shadow-sm card-border">
                    <div class="card-top-text">
                        <h4 class="text-center">
                            English News Paper
                        </h4>
                    </div>
                    <div class="card-body">

                        @foreach($top10english as $top10po)
                            <div class="img-list text-center">
                                <a href="{{$top10po->link}}" target="_blank">
                                    <img src="{{asset('images/'.$top10po->image)}}" width="100%" height="45px">
                                    <div class="img-link text-center">
                                        <span>{{$top10po->name}}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>


        </div>

    </div>

    </div>

@include('frontend.page.allbangla')
@include('frontend.page.alllocalnews')
@include('frontend.page.allonlinetv')
@include('frontend.page.allenglishnews')







@endsection
