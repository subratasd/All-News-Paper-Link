@extends('frontend.leyout.main')

@section('title', 'Corona Update')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            @foreach(helper::corona() as  $corona)

            <h3 class="text-center liveUpadatH3">
                <img src="https://www.countryflags.io/{{$corona['CountryCode']}}/shiny/64.png" class="mr-10">  {{$corona['Country']}} এর করোনা ভাইরাস আপডেট </h3>

            <div class="row mb-4">
                <div class="col-lg-4 col-xs-6 live-update-box">
                    <div class="panel panel-body live-update-box-wrap">
                        <h2 class="live-update-box-wrap-h2">
                            <b>নতুন আক্রান্ত</b></h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="live-update-box-wrap-h4">
                                    ২৪ ঘণ্টা </h4>
                                <h3 class="live-update-box-wrap-h1">
                                    <b> {{$corona['NewConfirmed']}} </b>
                                </h3>
                            </div>
                            <div class="col-lg-6 text-right">
                                <h4 class="live-update-box-wrap-h4">
                                    মোট</h4>
                                <h3 class="live-update-box-wrap-h1">
                                    <b> {{$corona['TotalConfirmed']}} </b>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h5 class="color222 text-center">
                               তারিখঃ <?php
                                $date = $corona['Date'];

                                echo $fixed = date('d-F-Y', strtotime($date));
                               ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-xs-6 live-update-box">
                    <div class="panel panel-body live-update-box-body">
                        <h2 class="live-update-box-body-h2">
                            <b>মৃত্যু</b></h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="live-update-box-body-h4"> ২৪ ঘণ্টা </h4>
                                <h1 class="live-update-box-wrap-h1">
                                    <b> {{$corona['NewDeaths']}} </b>
                                </h1>
                            </div>
                            <div class="col-lg-6 text-right">
                                <h4 class="live-update-box-body-h4"> মোট</h4>
                                <h1 class="live-update-box-wrap-h1">
                                    <b> {{$corona['TotalDeaths']}} </b>
                                </h1>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h5 class="color222 text-center">
                                তারিখঃ <?php
                                $date = $corona['Date'];

                                echo $fixed = date('d-F-Y', strtotime($date));
                                ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-xs-6  live-update-box">
                    <div class="panel panel-body live-update-box-body-two">
                        <h2 class="live-update-box-body-two-h2">
                            <b>সুস্থ</b></h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="live-update-box-body-two-h4">
                                    ২৪ ঘণ্টা</h4>
                                <h3 class="live-update-box-wrap-h1">
                                    <b>{{$corona['NewRecovered']}}</b>
                                </h3>
                            </div>
                            <div class="col-lg-6 text-right">
                                <h4 class="live-update-box-body-two-h4">
                                    মোট</h4>
                                <h3 class="live-update-box-wrap-h1">
                                    <b> {{$corona['TotalRecovered']}} </b>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h5 class="color222 text-center">
                                তারিখঃ <?php
                                $date = $corona['Date'];

                                echo $fixed = date('d-F-Y', strtotime($date));
                                ?>
                            </h5>
                        </div>
                    </div>
                </div>

            </div>
            <hr/>
            @endforeach



        </div>
    </div>

@endsection


