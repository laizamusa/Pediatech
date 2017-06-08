<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pediatech</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/320-480.css') }}" rel="stylesheet">
    <link href="{{ asset('css/480-800.css') }}" rel="stylesheet">
    <link href="{{ asset('carousel/carousel.css') }}" rel="stylesheet">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('fullpage/css/jquery.fullPage.css') }}" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
    <link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
</head>
<body>

    {{--@include('components.nav')--}}
    @yield('content')
    @include('components.footer')

    {{--<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/jquery-ui.js') }}"></script>--}}

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('fullpage/vendors/scrolloverflow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fullpage/js/jquery.fullPage.js') }}"></script>




    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                scrollBar: true
            });
        });

        $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });

    </script>

    @yield('scripts')

    {{--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>