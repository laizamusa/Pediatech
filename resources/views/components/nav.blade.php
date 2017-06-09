{{--<div class="container bdb">--}}
    {{--<nav class="navbar navbar-toggleable-md">--}}
        {{--<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">--}}
            {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}
        {{--<a class="navbar-brand" href="/"><img style="height: 80px; /*margin-left: 120px;*/ margin-left: 133px;"  src="/img/logo.png"></a>--}}
        {{--<div class="collapse navbar-collapse row" id="navbarCollapse">--}}
            {{--<ul class="navbar-nav col-4">--}}
            {{--</ul>--}}
            {{--<ul class="nav navbar-nav col-8 text-center">--}}
                {{--<li class="nav-item active col-3">--}}
                    {{--<a class="nav-link" href="/about">About Us</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item col-3 dropdown">--}}
                    {{--<a class="nav-link dropdown" data-toggle="dropdown"  href="/tech">Technologies</a>--}}
                    {{--<ul class="dropdown-menu" data-hover="dropdown" >--}}
                        {{--<li class="nav2"><a class="nav-link" href="/tech/#eztab">EZTab</a></li>--}}
                        {{--<li class="nav2"><a class="nav-link" href="/tech/#suredose">SureDose</a></li>--}}
                        {{--<li class="nav2"><a class="nav-link" href="/tech/#tasterite">TasteRite</a></li>--}}
                        {{--<li class="nav2"><a class="nav-link" href="/tech/#toothfriendly">ToothFriendly</a></li>--}}
                        {{--<li class="nav2"><a class="nav-link" href="/tech/#zincplus">ZincPlus</a></li>--}}
                    {{--</ul>--}}
                    {{--<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/tech">Technologies</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item col-3">--}}
                    {{--<a class="nav-link" href="/org">Our Organization</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item col-3">--}}
                    {{--<a class="nav-link" href="contact">Contact</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</nav>--}}
{{--</div>--}}

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
                <li class="nav-item active col-lg-3 col-md-12">
                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                </li>
                <li class="nav-item active col-lg-3 col-md-12 dropdown">
                <a class="nav-link dropdown" data-toggle="dropdown"  href="/tech">Technologies</a>
                    <ul class="dropdown-menu text-center" data-hover="dropdown" >
                        <li class="nav2"><a class="nav-link" href="{{ url('/tech/#eztab') }}">EZTab</a></li>
                        <li class="nav2"><a class="nav-link" href="{{ url('/tech/#suredose') }}">SureDose</a></li>
                        <li class="nav2"><a class="nav-link" href="{{ url('/tech/#tasterite') }}">TasteRite</a></li>
                        <li class="nav2"><a class="nav-link" href="{{ url('/tech/#toothfriendly') }}">ToothFriendly</a></li>
                        <li class="nav2"><a class="nav-link" href="{{ url('/tech/#zincplus') }}">ZincPlus</a></li>
                    </ul>
                </li>
                <li class="nav-item col-lg-4 col-md-12">
                    <a class="nav-link" href="{{ url('/org') }}">Our Organization</a>
                </li>
                <li class="nav-item col-lg-2 col-md-12">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>