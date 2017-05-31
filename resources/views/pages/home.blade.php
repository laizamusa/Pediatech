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
            <div class="row">
                <img class="img-responsive banner_bg" src="/img/packaging.png">
                <div class="col-md-6">
                    <h1 style="color:#00a3de;" letter-spacing: 5px;" class="AvantGarde-Md-BT">PEDIATECH<sup>TM</sup></h1>
                    <h3 style="color:#ed3337; letter-spacing: 2px;" class="AvantGarde-Md-BT"><b>INNOVATIVE SOLUTIONS IN CHILDCARE</b></h3>
                    <h4 style="color:#696969; font-size:19px;" class="Avenir-Light">PediaTech aims to make pediatric medicines better</h4>
                </div>
                <div class="col-md-6">
                    {{--<img class="img-re  sponsive banner_logo" src="/img/packaging.png">--}}
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="slide" id="slide1">
            <div class="intro">
                <div class="row">
                    <div class="col-md-6 container-fluid">
                        <img class="img-responsive banner_logo1" src="/img/kid.png">
                    </div>
                    <div class="col-md-6">
                        1 of 3
                    </div>
                </div>
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