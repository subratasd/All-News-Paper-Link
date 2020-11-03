<div class="container-fluid">
    <div class="header-title mb-3">
        <h3 class="">Bangla Magazine Link</h3>
    </div>
    <div class="col-md-12">
        <div class="row">
            @foreach($banglamagazin as $alltv)

                <div class="mb-3 col-md-2">
                    <a href="{{$alltv->link}}" target="_blank">
                        <div class="img-bor mb-4">

                            <img src="{{asset('images/'.$alltv->image)}}" width="100%" height="47px">
                            <div class="img-link">
                                <span>{{$alltv->name}}</span>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
</div>
