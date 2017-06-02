@extends('layouts.master')

@section('content')
    <div class="section " id="section0">
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
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="intro">
            <div class="col-xs-12">
                <h1 style="text-align: center;">SEND US A MESSAGE</h1>
                <p style="text-align: center;">We want to hear from you.</p>
                <p>&nbsp;</p>
                <p style="text-align: center;"></p>
                    <form action="" method="post" class="">
                        <div class="">
                            <div class="row col-xs-12 ">
                                <div class="col-xs-6">
                                    <span class="">
                                        <input name="your-name" class="form-control" placeholder="Your Name" type="text">
                                    </span>
                                </div>
                                <div class="col-xs-6">
                                    <span class="">
                                        <input name="your-email" class="form-control" placeholder="Email Address" type="email">
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <span class="your-message">
                                    <textarea name="your-message" class="form-control" placeholder="Your Message"></textarea>
                                </span>
                            </div>
                            <div class="col-xs-6 ">
                                <span class="your-subject">
                                    <input name="your-subject"  class="form-control" placeholder="Subject" type="text"></span>
                            </div>
                            <div class="col-xs-6 form-captcha">
                                <label>Please type in the code:</label><br>
                                <input name="your-captcha" value="3594274354" type="hidden">
                                <img class="img-responsive form-control" alt="captcha" src="http://beta.pediatech.info/wp-content/uploads/wpcf7_captcha/3594274354.png">
                                <span class="your-captcha">
                                    <input name="your-captcha"class="form-control captchar form-control" type="text">
                                </span>
                            </div>
                            <div class="col-xs-6">
                                <input value="Send Your Message" class="form-control submit form-control" type="submit">
                                <span class="ajax-loader">

                                </span>
                            </div>
                        </div>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
                <p></p>
            </div>
        </div>

    </div>
@endsection