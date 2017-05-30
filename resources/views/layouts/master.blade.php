<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pediatech</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="/vendor/slick/slick.css" >
    <link rel="stylesheet" href="/vendor/slick/slick-theme.css" >
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">

    <link href="/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
@yield('styles')
@include('components.nav')
@yield('content')
@include('components.footer')
@yield('scripts')
</body>