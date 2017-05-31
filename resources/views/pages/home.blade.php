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
                {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
                <div class="col-md-6">
                    <div class="row banner_content">
                        <h1 style="color:#00a3de; font-family: AvantGarde Md BT;"><b>PEDIATECH<sup>TM</sup></b></h1>
                        <label style="color:#ed3337; margin-top: 41px; margin-left: -239px;">INNOVATIVE SOLUTIONS IN CHILDCARE</label>
                        <p style="color:#696969;">PediaTech aims to make pediatric medicines better</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="banner_img" src="/img/packaging.png">
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="intro">
            <div class="row">
                <div class="col-md-6 container-fluid">
                    <div class="col-md">
                        <h1 class="banner1_content"><b>WHAT DO WE DO?</b></h1>
                    </div>

                    <div class="col-md content">
                        <label style="color:#8d8b8b;">Address Children’s Needs</label>
                        <p>Our formulations aim to address gaps in pediatric medications to <br/> improve children’s compliance and ease of administration.</p>

                        <label style="color:#8d8b8b;">Improve products</label>
                        <p>Using various technologies that we’ve developed, our products<br/> improve on existing formulations in order to cater to children’s specific <br/>needs such as taste and simpler dosing formats.</p>

                        <label style="color:#8d8b8b;">Easier for Everyone</label>
                        <p>Our products aim to make the lives of children, parents and healthcare <br/>providers easier.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive banner_logo1" src="/img/kid.png">
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section2">
        <div class="intro">
            <div class="row" style="margin-top: 100px;">
                <div class="col-xs-6 col-sm-3">
                    <img class="" style="margin-left: 97px;" src="/img/eztab.png">
                    <label style="margin-left: 110px;">EZTAB</label>
                    <p style="margin-left: 110px;">Many school aged children, 3 to 6 years old,
                        often have to take medicine away from home
                        such as medicines used for the maintenance
                        treatment of asthma and to relieve th...</p>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <img class="" style="margin-left: 32px;" src="/img/suredose.png">
                    <label style="margin-left: 38px;">SUREDOSE</label>
                    <p style="margin-left: 38px;">Most of the drugs in ready-to-use oral
                        pharmaceutical suspensions exist as
                        undissolved particles, requiring adequate
                        shaking of the container to resuspend the drug
                        uniformly before dosing.</p>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <img class="" style="margin-left: -32px;" src="/img/zincplus.png">
                    <label style="margin-left: 31px;">ZINPLUS</label>
                    <p>Ensures stable and good-tasting liquid
                        compositions containing vitamin C and minerals.
                        ZincPlus® provides an aqueous oral liquid
                        composition that combines vitamin C with zinc,
                        wherein the vitamin C has improved stability. </p>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <img class="" style="margin-left: -92px;" src="/img/tasterite-kid.png">
                    <label style="margin-left: 30px;">TASTERITE</label>
                    <p>The TasteRite® technology significantly reduces
                        the bitterness of medicine so that children taste
                        the flavor and not the medicine. It is a unique
                        tastemasking system developed specifically
                        for liquid dosage forms.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection