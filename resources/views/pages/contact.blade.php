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
            <div class="col-md-12" style="margin-top: 85px; margin-bottom: 150px;">
                <h1 style="text-align: center;">SEND US A MESSAGE</h1>
                <p style="text-align: center;">We want to hear from you.</p>
                <p>&nbsp;</p>
                <p style="text-align: center;"></p>
                <form action="" method="post" style="margin-top: -122px;">
                    <div class="row col-md-12" style="margin-top: 85px;">
                        <div class="col-md-6">
                            <span>
                                <input style="margin-top: 35px; height: 77px; width: 500px; margin-left: 60px;" name="your-name" class="form-control" placeholder="Your Name" type="text">
                            </span>
                            <span>
                                <input  style="margin-top: 35px; height: 77px; width: 500px; margin-left: 60px;" name="your-email" class="form-control" placeholder="Email Address" type="email">
                            </span>
                            <span class="your-subject">
                                <input style="margin-top: 35px; height: 77px; width: 500px; margin-left: 60px;" name="your-subject"  class="form-control" placeholder="Subject" type="text">
                            </span>
                            {{--<input style="margin-top: 35px; background-color: #00a3de; color: white; margin-left: 60px; height: 77px; width: 500px;" value="Send Your Message" class="form-control submit form-control" type="submit">--}}
                            <button style="margin-top: 35px; margin-left: 60px; height: 77px; width: 500px;" type="button" class="btn btn-primary btn-lg lmorebtn">Send Your Message</button>
                        </div>
                        <div class="col-md-6 form-captcha" style="margin-top: 31px;">
                             <span class="your-message">
                                <textarea style="height:188px; width: 500px; margin-left: 51px;" name="your-message" class="form-control" placeholder="Your Message"></textarea>
                            </span>
                            <label style="margin-left: 5px; margin-top: 30px; margin-left: 51px;">Please type in the code:</label><br>
                            <input name="your-captcha" value="3594274354" type="hidden">
                            <div class="row" style="margin-left: 5px;">
                                <div class="col-md-6">
                                    <img style="width: 174px; height: 50px; margin-left: 33px;" class="img-responsive form-control" alt="captcha" src="http://beta.pediatech.info/wp-content/uploads/wpcf7_captcha/3594274354.png">
                                </div>
                                <div class="col-md-6">
                                    <span class="your-captcha">
                                        <input style="width: 128px; height: 50px; margin-left: -98px;" name="your-captcha"class="form-control captchar form-control" type="text">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <p></p>
        </div>
    </div>

    </div>

@endsection

