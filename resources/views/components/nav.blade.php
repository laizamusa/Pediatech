<div class="container bdb">

    <!-- Static navbar -->
    <nav class="navbar navbar-toggleable-md navbar-light">
        <button class="navbar-toggler navbar-toggler-right navbtn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/"><img style="height: 80px; /*margin-left: 120px;*/"  src="{{ url('/') }}/img/logo.png"></a>
        {{--<div class="collapse navbar-collapse row" id="navbarCollapse">--}}
        <div class="collapse navbar-collapse row" id="navbarSupportedContent">
            <ul class="navbar-nav col-4">
                </ul>
            <ul class="nav navbar-nav col-lg-8 col-md-12 text-center">
                <li class="nav-item col-lg-3 col-md-12">
                    <a class="nav-link {{ request()->is('about') ? 'activeMenus' : '' }}" href="{{ URL::to('/about') }}">About Us</a>
                </li>
                <li class="nav-item col-lg-3 col-md-12 dropdown">
                    {{--{{Request::fullUrl()}}--}}
                <a class="nav-link dropdown {{ request()->is('tech') ? 'activeMenus' : '' }}" data-toggle="dropdown"  href="/tech">Technologies</a>
                    <ul class="dropdown-menu text-center" data-hover="dropdown" >
                        <li class="nav2"><a class="nav-link {{ request()->fullUrl() == Request::root().'/tech/#eztab' ? 'activeMenus' : '' }}" href="/tech#eztab">EZTab</a></li>
                        <li class="nav2"><a class="nav-link {{ request()->is('suredose') ? 'activeMenus' : '' }}" href="/tech#suredose">SureDose</a></li>
                        <li class="nav2"><a class="nav-link {{ request()->is('tasterite') ? 'activeMenus' : '' }}" href="/tech#tasterite">TasteRite</a></li>
                        <li class="nav2"><a class="nav-link {{ request()->is('toothfriendly') ? 'activeMenus' : '' }}" href="/tech#toothfriendly">ToothFriendly</a></li>
                        <li class="nav2"><a class="nav-link {{ request()->is('zincplus') ? 'activeMenus' : '' }}" href="/tech#zincplus">ZincPlus</a></li>
                    </ul>
                </li>
                <li class="nav-item col-lg-4 col-md-12">
                    <a class="nav-link {{ request()->is('org') ? 'activeMenus' : '' }}" href="{{ url('/org') }}">Our Organization</a>
                </li>
                <li class="nav-item col-lg-2 col-md-12">
                    <a class="nav-link {{ request()->is('contact') ? 'activeMenus' : '' }}" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>