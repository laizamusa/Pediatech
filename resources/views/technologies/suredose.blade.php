@extends('layouts.master')

@section('content')

<div class="section" id="suredose">
    @include('components.nav')
    <div class="slide">
        {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
        <div class="col-md-12 eztab-content text-center">
            <img class="suredose-logo" src="/img/suredose-logo.png">
        </div>
        <div class="col-md-12 eztab-content">
            <h1 class="eztab-title-content"><b>The Problem with Suspensions</b></h1>
            <p class="suredosesus pd100">Pediatric medicines in suspension format need to be shaken to ensure uniform drug distribution. A good suspension should (a) be easily redispersed from shaking, (b) remain suspended long enough to administer the dose, and (c) have the desired flow properties.</p>
            <p class="suredosesus1 pd100">Some suspensions do not satisfy all of these properties, and are physically unstable. These can manifest in rapid settling and caking of drug particles that are difficult to redisperse. This leads to dose uniformity problems.</p>
        </div>
        <div class="col-md-12 eztab-content">
            <h1 class="eztab-title-content"><b>SureDose Technology</b></h1>
            <p class="suredosetech pd100">SureDose patented technology is the world’s only no-shake liquid suspension format that ensures no settling, no packing, and no caking of drug particles in suspension. SureDose combines 3 elements to achieve a stable suspension with excellent drug uniformity – liquid of the right density, polymer with an increased yield value, and micronized drug.
                SureDose ensures that each dose of medicine is correct and complete every time.(US patent: 7,300,670 B2;
                Philippines patent: 1-2002-080820)</p>
                <h1 class="eztab-title-content"><b>SureDose in the Real World</b></h1>
                <h1 class="img-title">Drug uniformity analysis after centrifugation of 2 hours at 500 g’s</h1>
                <img class="suredosetech_img" src="/img/tech/suredose.png">
            <div>
                <div class="iframe embed-responsive embed-responsive-16by9" style="width: 50%; margin-left: 25%;">
                    <iframe src="https://www.youtube.com/embed/6OvQVVfOHCA" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
                <p class="img-bottom-tittle">Products using the SureDose Technology</br>
                • Rimaped (Rifampicin) Suspension</p>
        </div>

    </div>
    @include('components.footer')
</div>

@endsection