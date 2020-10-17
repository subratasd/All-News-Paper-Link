@extends('frontend.leyout.main')

@section('title', 'World')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

                @foreach(helper::one_World() as $data)

                    <div class="col-md-4">
                        <a href="{{$data['url']}}" target="_blank">
                        <div class="card mb-4 shadow-sm">
                            <img src="{{$data['urlToImage']}}" width="100%" height="200px">
                            <div class="card-body">
                                <p class="card-text">{{$data['title']}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button href="{{$data['url']}}" target="_blank" class="btn btn-danger">Read More</button>

                                    </div>
                                    <small class="text-muted">{{$data['publishedAt']}}</small>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                @endforeach


            </div>
        </div>
    </div>

@endsection
