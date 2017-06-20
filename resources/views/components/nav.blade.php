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
                        <li class="nav2" data-menuanchor="firstPage"><a class="nav-link {{ request()->fullUrl() == Request::root().'/technologies/eztab' ? 'activeMenus' : '' }}" href="/tech/technologies/eztab">EZTab</a></li>
                        <li class="nav2" data-menuanchor="secondPage"><a class="nav-link {{ request()->is('suredose') ? 'activeMenus' : '' }}" href="/tech/technologies/suredose">SureDose</a></li>
                        <li class="nav2" data-menuanchor="3rdPage"><a class="nav-link {{ request()->is('tasterite') ? 'activeMenus' : '' }}" href="/tech/technologies/tasterite">TasteRite</a></li>
                        <li class="nav2" data-menuanchor="4thpage"><a class="nav-link {{ request()->is('toothfriendly') ? 'activeMenus' : '' }}" href="/tech/technologies/toothfriendly">ToothFriendly</a></li>
                        <li class="nav2" data-menuanchor="lastPage"><a class="nav-link {{ request()->is('zincplus') ? 'activeMenus' : '' }}" href="/tech/technologies/zincplus">ZincPlus</a></li>
                    </ul>
                </li>
                <li class="nav-item col-lg-4 col-md-12">
                    <a class="nav-link fp {{ request()->is('org') ? 'activeMenus' : '' }}" href="{{ url('/org') }}">Featured Products</a>
                </li>
                <li class="nav-item col-lg-2 col-md-12">
                    <a class="nav-link {{ request()->is('contact') ? 'activeMenus' : '' }}" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>