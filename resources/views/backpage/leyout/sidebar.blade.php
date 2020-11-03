<div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
           Admin Dasboard
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ helper::set_active('dashboard') }}  ">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ helper::set_active('top10bangla') }} ">
                <a class="nav-link" href="{{route('top10bangla')}}">
                    <i class="material-icons">content_paste</i>
                    <p>top 10 bangla</p>
                </a>
            </li>
            <li class="nav-item {{ helper::set_active('top10tv') }} ">
                <a class="nav-link" href="{{route('top10tv')}}">
                    <i class="material-icons">content_paste</i>
                    <p>top 10 Tv</p>
                </a>
            </li>
            <li class="nav-item {{ helper::set_active('top10portal') }}">
                <a class="nav-link" href="{{route('top10portal')}}">
                    <i class="material-icons">content_paste</i>
                    <p>top 10 bangla News Portal</p>
                </a>
            </li>
            <li class="nav-item {{ helper::set_active('top10english') }}">
                <a class="nav-link" href="{{route('top10english')}}">
                    <i class="material-icons">content_paste</i>
                    <p>top 10 English News Portal</p>
                </a>
            </li>

            <li class="nav-item {{ helper::set_active('allbanglanews') }}">
                <a class="nav-link" href="{{route('allbanglanews')}}">
                    <i class="material-icons">view_agenda</i>
                    <p>Bangla Daily Newspapers Link</p>
                </a>
            </li>

            <li class="nav-item {{ helper::set_active('banglaonlin') }}">
                <a class="nav-link" href="{{route('banglaonlin')}}">
                    <i class="material-icons">view_agenda</i>
                    <p>Bangal Online news Portal Link</p>
                </a>
            </li>

            <li class="nav-item {{ helper::set_active('allonlinetv') }}">
                <a class="nav-link" href="{{route('allonlinetv')}}">
                    <i class="material-icons">view_agenda</i>
                    <p> Bangla TV Channel Link </p>
                </a>
            </li>

            <li class="nav-item {{ helper::set_active('banglaenglish') }}">
                <a class="nav-link" href="{{route('banglaenglish')}}">
                    <i class="material-icons">view_agenda</i>
                    <p>Bangladeshi English News Papers Link</p>
                </a>
            </li>

            <li class="nav-item {{ helper::set_active('shearbazar') }}">
                <a class="nav-link" href="{{route('shearbazar')}}">
                    <i class="material-icons">view_agenda</i>
                    <p>Share Bazar News papers Link</p>
                </a>
            </li>

            <li class="nav-item {{ helper::set_active('alllocalnews') }}">
                <a class="nav-link" href="{{route('alllocalnews')}}">
                    <i class="material-icons">view_agenda</i>
                    <p>Local News Papers Link</p>
                </a>
            </li>

            <li class="nav-item {{ helper::set_active('westbengal') }}">
                <a class="nav-link" href="{{route('westbengal')}}">
                    <i class="material-icons">view_agenda</i>
                    <p>West-Bengal News papers Link</p>
                </a>
            </li>

            <li class="nav-item {{ helper::set_active('allenglishnews') }}">
                <a class="nav-link" href="{{route('allenglishnews')}}">
                    <i class="material-icons">view_agenda</i>
                    <p>World News papers Link</p>
                </a>
            </li>

            <li class="nav-item {{ helper::set_active('banglamagazin') }}">
                <a class="nav-link" href="{{route('banglamagazin')}}">
                    <i class="material-icons">view_agenda</i>
                    <p>Bangla Magazine Link</p>
                </a>
            </li>

            <li class="nav-item {{ helper::set_active('banglajob') }}">
                <a class="nav-link" href="{{route('banglajob')}}">
                    <i class="material-icons">view_agenda</i>
                    <p>Bangla Job site Link</p>
                </a>
            </li>

            <li class="nav-item {{ helper::set_active('banglatech') }}">
                <a class="nav-link" href="{{route('banglatech')}}">
                    <i class="material-icons">view_agenda</i>
                    <p>Bangla Tech Site Link</p>
                </a>
            </li>

            <li class="nav-item {{ helper::set_active('banglafm') }}">
                <a class="nav-link" href="{{route('banglafm')}}">
                    <i class="material-icons">view_agenda</i>
                    <p>Bangla FM Radio</p>
                </a>
            </li>

        </ul>
    </div>
</div>
