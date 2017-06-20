@extends('layouts.master')

@section('content')

    {{--full page--}}
    <div id="fullpage">
            @include('components.nav')
    </div>

    {{--full page--}}

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $("a.nav-link").on('click', function(event) {
                if (this.hash !== "") {

                    event.preventDefault();
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1500, function(){

                        window.location.hash = hash;
                    });
                }
            });
        });

    </script>
@endsection
