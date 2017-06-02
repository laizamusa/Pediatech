@extends('layouts.master')

@section('content')
{{--<div id="fullpage">--}}
    {{--<div class="section " id="section0">--}}
    <div class="container bdb">
        <nav class="navbar navbar-toggleable-md">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/"><img style="height: 80px; /*margin-left: 120px;*/margin-left: 133px;"  src="/img/logo.png"></a>
            <div class="collapse navbar-collapse row" id="navbarCollapse">
                <ul class="navbar-nav col-4">
                </ul>
                <ul class="navbar-nav col-8 text-center">
                    <li class="nav-item active col-3">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" href="/tech">Technologies</a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" href="/org">Our Organization</a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="intro">
        <div class="row">
            {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
            <img class="" style="height: 561px; margin-left: -118px;" src="/img/testtubes.png">
            <div style="position: absolute; margin-left: 121px; margin-top: 100px;">
                <h1 style="color:#696969; font-size: 80px; font-family: AvantGarde Md BT;"><b>PEDIATECH</b></h1>
                <p style="color:#696969; font-size: 18px;">PediaTech is a research and development organization dedicated to the advancement of pediatric healthcare by developing technologies and </br> designing products specifically catering to children, and children’s medicine taking habits. We aim to undertake common issues with children’s </br> medicine from bad taste to difficult dosing instructions because the best medicines in the world could not work unless the medicines are taken </br> by the kids at the prescribed dosage level at all times.</p>
            </div>
        </div>
    </div>

    <div class="section" id="section1">
        <div class="intro">
            <div class="row" style="background-color: #d5d5d5;">
                <div class="row" style="margin-left: 121px; height: 500px; margin-top: 86px;">
                    <h1 style="color:#696969; font-size: 80px; font-family: AvantGarde Md BT;"><b>Products</b></h1>
                    <p style="color:#696969; font-size: 18px; margin-top: -179px;">PediaTech products have been developed using several patented technologies that aim to improve on currently available pediatric medicines.</br> Our technologies address various gaps in pediatric medicines including bad taste (through TasteRite technology), and proper dosing (through </br>SureDose technology). These technologies not only address children’s medicine compliance and ease of administration, but also make the lives </br> of parents and healthcare professionals easier.</p>
                </div>
            </div>
        </div>
    </div>
    {{--</div>--}}
{{--</div>--}}
@endsection