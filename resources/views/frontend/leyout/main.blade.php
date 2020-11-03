<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <title>@yield('title')</title>

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{route('home')}}" style="color: tomato; font-weight: bold;">All Bangladeshi News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ helper::set_active('/') }} ">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    News Head Line
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('headline')}}">All bangla Head Line</a>
                    <a class="dropdown-item" href="{{route('world')}}">World Head Line</a>

                </div>
            </li>

            <li class="nav-item {{ helper::set_active('ucon') }} ">
                <a class="nav-link" href="{{route('ucon')}}"> Bangla Converter <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item {{ helper::set_active('corona') }} ">
            <a class="nav-link" href="{{route('corona')}}"> Corona Update <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item {{ helper::set_active('job') }} ">
                <a class="nav-link" href="{{route('job')}}"> চাকরির খবর <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item {{ helper::set_active('contact') }} ">
                <a class="nav-link" href="{{route('contact')}}">যোগাযোগ করুন <span class="sr-only">(current)</span></a>
            </li>

        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<main role="main" class="flex-shrink-0">
    <div class="container">


    @yield('content')

    </div>
</main>

<footer class="footer mt-auto py-3 text-center">
    <div class="container">
        <span class="text-muted">All rights reserved © {{date('Y')}} allbangladeshinewspaperslink </span>
        <span class="align-right"> Development By <a href="#" style="color: tomato; font-weight: bold">Subrata Sutradhar</a> </span>
    </div>
</footer>


<script src="{{ asset('frontend/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>



@stack('scripts')


</body>
</html>
