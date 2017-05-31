@extends('layouts.master')

@section('content')

<div id="fullpage">
    <div class="section " id="section0">

        <div class="container bdb">
            <nav class="navbar navbar-toggleable-md">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><img style="height: 80px; /*margin-left: 120px;*/"  src="/img/logo.png"></a>
                <div class="collapse navbar-collapse row" id="navbarCollapse">
                    <ul class="navbar-nav col-4">
                    </ul>
                    <ul class="navbar-nav col-8 text-center">
                        <li class="nav-item active col-3">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item hide">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item col-3">
                            <a class="nav-link" href="#">Technologies</a>
                        </li>
                        <li class="nav-item col-3">
                            <a class="nav-link" href="#">Our Organization</a>
                        </li>
                        <li class="nav-item col-3">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="intro">
            <h1>Enable Your Scroll Bar!</h1>
            <p>The perfect combination!</p>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="slide" id="slide1">
            <div class="intro">
                <h1>Free scroll</h1>
                <p>
                    User can still using the scroll bar and fullPage.js will do the rest!
                </p>
            </div>
        </div>

        <div class="slide" id="slide2">
            <h1>Slide 2</h1>
        </div>

    </div>
    <div class="section" id="section2">
        <div class="intro">
            <h1>Great User Experience!</h1>
        </div>
    </div>
</div>

@endsection