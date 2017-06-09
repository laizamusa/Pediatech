@extends('layouts.master')

@section('content')
    <div id="fullpage">
    <div class="section " id="section0">
        @include('components.nav')

            <div class="intro">
                <div class="row col-md-12 contactview" style="margin-top: 85px; margin-bottom: 150px;">
                    <h1 class="smessage"><b>SEND US A MESSAGE</b></h1>
                    <p class="smcontents">We want to hear from you.</p>
                    <p>&nbsp;</p>
                    <p style="text-align: center;"></p>
                    <form id="contact_form" method="post">
                        {{ csrf_field() }}
                        <div class="row col-md-12" style="margin-top: 85px;">
                            <div class="col-md-6 form-div">
                                <span>
                                    <input name="your-name" class="form-control form-inputs" placeholder="Your Name" type="text">
                                </span>
                                <span>
                                    <input name="your-email" class="form-control form-inputs" placeholder="Email Address" type="email">
                                </span>
                                <span class="your-subject">
                                    <input name="your-subject"  class="form-control form-inputs" placeholder="Subject" type="text">
                                </span>
                                {{--<input style="margin-top: 35px; background-color: #00a3de; color: white; margin-left: 60px; height: 77px; width: 500px;" value="Send Your Message" class="form-control submit form-control" type="submit">--}}
                            </div>


                            {{--<div class="col-md-6">--}}
                            {{--<span>--}}
                                {{--<input style="margin-top: 35px; height: 77px; width: 500px; margin-left: 60px;" name="your-name" class="form-control" placeholder="Your Name" type="text">--}}
                            {{--</span>--}}
                            {{--<span>--}}
                                {{--<input  style="margin-top: 35px; height: 77px; width: 500px; margin-left: 60px;" name="your-email" class="form-control" placeholder="Email Address" type="email">--}}
                            {{--</span>--}}
                            {{--<span class="your-subject">--}}
                                {{--<input style="margin-top: 35px; height: 77px; width: 500px; margin-left: 60px;" name="your-subject"  class="form-control" placeholder="Subject" type="text">--}}
                            {{--</span>--}}
                                {{--<input style="margin-top: 35px; background-color: #00a3de; color: white; margin-left: 60px; height: 77px; width: 500px;" value="Send Your Message" class="form-control submit form-control" type="submit">--}}
                                {{--<button id="mSend" style="margin-top: 35px; margin-left: 60px; height: 77px; width: 500px;" type="button" class="btn btn-primary btn-lg lmorebtn">Send Your Message</button>--}}
                            {{--</div>--}}


                            {{--<div class="col-md-6 form-div form-captcha" style="margin-top: 31px;">--}}
                                 {{--<span class="your-message">--}}
                                    {{--<textarea name="your-message" class="form-control form-textextra" placeholder="Your Message"></textarea>--}}
                                {{--</span>--}}
                                {{--<label style="margin-left: 125px; margin-top: 30px; margin-left: 125px; color: #585858;">Please type in the code:</label><br>--}}
                                {{--<input name="your-captcha" value="3594274354" type="hidden">--}}
                                {{--<div class="row" style="margin-left: 5px;">--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<img style="width: 174px; height: 50px; margin-left: 105px;" class="img-responsive form-control" alt="captcha" src="http://beta.pediatech.info/wp-content/uploads/wpcf7_captcha/3594274354.png">--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<span class="your-captcha">--}}
                                            {{--<input style="" name="your-captcha"class="form-control captchar form-control" type="text">--}}
                                        {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="col-md-6 form-captcha" style="margin-top: 31px;">
                                <span class="your-message">
                                    <textarea name="your-message" class="form-control form-textarea" placeholder="Your Message"></textarea>
                                </span>
                                <label style="margin-left: 5px; margin-top: 30px; margin-left: 51px; color: #585858;">Please type in the code:</label><br>
                                <input name="your-captcha" value="3594274354" type="hidden">
                                <div class="row" style="margin-left: 5px;">
                                    <div class="col-md-6">
                                        <img style="width: 174px; height: 50px; margin-left: 33px;" class="img-responsive form-control" alt="captcha" src="http://beta.pediatech.info/wp-content/uploads/wpcf7_captcha/3594274354.png">
                                    </div>
                                    <div class="col-md-6">
                                    <span class="your-captcha">
                                        <input name="your-captcha"class="form-control captchar form-control" type="text">
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <button id="mSend" type="button" class="btn btn-primary btn-lg lmorebtn">Send Your Message</button>
                        </div>

                    </form>
                </div>
                <p></p>
            </div>
            </div>
        @endsection
    </div>


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js" integrity="sha384-tIwI8+qJdZBtYYCKwRkjxBGQVZS3gGozr3CtI+5JF/oL1JmPEHzCEnIKbDbLTCer" crossorigin="anonymous"></script>
    <script>
        $('#mSend').on('click', function (e) {
            e.preventDefault();
            $('#contact_form').ajaxSubmit({
                type : 'post',
                url : '/mailsender',
                beforeSubmit: function(){

                },
                success:  function(data){
                    console.log(data);
                }
            })
        });
    </script>
@endsection