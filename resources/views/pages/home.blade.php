@extends('layouts.master')

@section('content')

    <div id="fullpage">
        <div class="section" id="section">
        @include('components.nav')
            <div class="intro">
                <div class="row">
                    {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
                    <div class="col-md-6">
                        <div class="row banner_content">
                            <font class="AvantGarde-Md-BT homepage_banner_content1">PEDIATECH<sup style="font-size: 17px; top: -3.5em;">TM</sup></font>
                            <font class="AvantGarde-Md-BT homepage_banner_content2"><b>INNOVATIVE SOLUTIONS IN CHILDCARE</b></font>
                            <font class="Avenir-Light homepage_banner_content3">PediaTech aims to make pediatric medicines better</font>
                            <button type="button" class="btn btn-primary btn-lg lmorebtn">LEARN MORE</button>
                            {{--<font style="font-size: 111px; margin-left: -145px; color:#00a3de; font-family: AvantGarde Md BT;"><b>PEDIATECH<sup>TM</sup></b></font>--}}
                            {{--<label style="margin-top: 125px; margin-left: -634px; color:#ed3337;">INNOVATIVE SOLUTIONS IN CHILDCARE</label>--}}
                            {{--<p style="color:#696969; margin-left: -287px; margin-top: 158px;">PediaTech aims to make pediatric medicines better</p>--}}
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
                    <div class="col-md-6" style="padding: 46px;">
                        <div class="col-md">
                            <h1 class="banner1_content"><b>WHAT DO WE DO?</b></h1>
                        </div>

                        <div class="col-md content">
                            <label style="color:#8d8b8b; font-size: 20px;"><b>Address Children’s Needs</b></label>
                            {{--<h4 style="color:#8d8b8b;font-size:3vh;line-height: 8vh;" class="AVENIR.TTC;"><b>Address Children’s Needs</b></h4>--}}
                            <p style="color:#aeaeae;">Our formulations aim to address gaps in pediatric medications to improve children’s compliance and ease of administration.</p>

                            <label style="color:#8d8b8b; font-size: 20px; margin-top: 10px;"><b>Improve products</b></label>
                            <p style="color:#aeaeae;">Using various technologies that we’ve developed, our products improve on existing formulations in order to cater to children’s specific needs such as taste and simpler dosing formats.</p>

                            <label style="color:#8d8b8b; font-size: 20px; margin-top: 10px;"><b>Easier for Everyone</b></label>
                            <p style="color:#aeaeae;">Our products aim to make the lives of children, parents and healthcare providers easier.</p>
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
                    <div class="row" >
                        <div class="col-md content hidden-md-up">
                            <label style="color:#8d8b8b; font-size: 20px; margin-top: 10px;"><b>EZTab</b></label>
                            <img class="carousel-image" src="/img/eztab.png">
                            <p style="color:#aeaeae;">Ensures stable and good-tasting liquid compositions containing vitamin C and minerals. ZincPlus® provides an aqueous oral liquid composition that combines vitamin C with zinc, wherein the vitamin C has improved stability.</p>

                            <label style="color:#8d8b8b; font-size: 20px; margin-top: 10px;"><b>Suredose</b></label>
                            <img class="carousel-image" src="/img/suredose.png">
                            <p style="color:#aeaeae;">Most of the drugs in ready-to-use oral pharmaceutical suspensions exist as undissolved particles, requiring adequate shaking of the container to resuspend the drug uniformly before dosing.</p>

                            <label style="color:#8d8b8b; font-size: 20px; margin-top: 10px;"><b>ZincPlus</b></label>
                            <img class="carousel-image" src="/img/zincplus.png">
                            <p style="color:#aeaeae;">Ensures stable and good-tasting liquid compositions containing vitamin C and minerals. ZincPlus® provides an aqueous oral liquid composition that combines vitamin C with zinc, wherein the vitamin C has improved stability.</p>

                            <label style="color:#8d8b8b; font-size: 20px; margin-top: 10px;"><b>Tasterite Kid</b></label>
                            <img class="carousel-image" src="/img/tasterite-kid.png">
                            <p style="color:#aeaeae;">The world's leading drugs in various fields such as cancer therapy, hypertension and neurology were all derived from nature. We believe that nature has more to offer us.</p>
                        </div>

                        <div id="showcase" class="noselect hidden-sm-down">
                            <div class="card">
                                <img class="carousel-image" src="/img/eztab.png">
                                <h4 class="carousel-logos">
                                    <img class="carousel-image" src="/img/eztab-logo.png" alt="">
                                </h4>
                                <p class="carousel-p">
                                    Ensures stable and good-tasting liquid compositions containing vitamin C and minerals. ZincPlus® provides an aqueous oral liquid composition that combines vitamin C with zinc, wherein the vitamin C has improved stability.
                                </p>
                                <div class="slide-indicator"></div>
                            </div>
                            <div class="card">
                                <img class="carousel-image" src="/img/suredose.png">
                                <h4 class="carousel-logos">
                                    <img class="carousel-image" src="/img/suredose-logo.png" alt="">
                                </h4>
                                <p class="carousel-p">
                                    Most of the drugs in ready-to-use oral pharmaceutical suspensions exist as undissolved particles, requiring adequate shaking of the container to resuspend the drug uniformly before dosing.
                                </p>
                                <div class="slide-indicator"></div>
                            </div>
                            <div class="card">
                                <img class="carousel-image" src="/img/zincplus.png">
                                <h4 class="carousel-logos">
                                    <img class="carousel-image" src="/img/zinc-plus-logo.png" alt="">
                                </h4>
                                <p class="carousel-p">
                                    Ensures stable and good-tasting liquid compositions containing vitamin C and minerals. ZincPlus® provides an aqueous oral liquid composition that combines vitamin C with zinc, wherein the vitamin C has improved stability.
                                </p>
                                <div class="slide-indicator"></div>
                            </div>
                            <div class="card">
                                <img class="carousel-image" src="/img/tasterite-kid.png">
                                <h4 class="carousel-logos">
                                    <img class="carousel-image" src="/img/tasterite-logo.png" alt="">
                                </h4>
                                <p class="carousel-p">
                                    The world's leading drugs in various fields such as cancer therapy, hypertension and neurology were all derived from nature. We believe that nature has more to offer us.
                                </p>
                                <div class="slide-indicator"></div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('carousel/jquery.cloud9carousel.js') }}"></script>
    <script>
        $(function() {
            var showcase = $("#showcase")

            showcase.Cloud9Carousel( {
                yPos: 42,
                yRadius: 48,
                itemClass: "card",
                autoPlay: true,
                bringToFront: true,
                onLoaded: function() {
                    showcase.css( 'visibility', 'visible' )
                    showcase.css( 'display', 'none' )
                    showcase.fadeIn( 1500 )
                }
            } )
        })
    </script>
@endsection
