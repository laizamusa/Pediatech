@extends('layouts.master')

@section('content')
<div id="fullpage">
    <div class="section " id="section0">
@include('components.nav')


    <div class="intro">
        <div class="row">
            {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
            <img class="bg_ttubes" src="/img/testtubes.png">
            <div class="pediatech_content">
                <h1 class="pediatech_content1"><b>PEDIATECH</b></h1>
                <p class="pediatech_content2">PediaTech is a research and development organization dedicated to the advancement of pediatric healthcare by developing technologies and designing products specifically catering to children, and children’s medicine taking habits. We aim to undertake common issues with children’s medicine from bad taste to difficult dosing instructions because the best medicines in the world could not work unless the medicines are taken by the kids at the prescribed dosage level at all times.</p>
            </div>
        </div>
    </div>
    </div>

    <div class="section" id="section1" style="background-color: #d5d5d5;">
        <div class="intro">
            <div class="row">
                <div class="row products_content">
                    <h1 class="products_content1"><b>Products</b></h1>
                    <p class="products_content2">PediaTech products have been developed using several patented technologies that aim to improve on currently available pediatric medicines. Our technologies address various gaps in pediatric medicines including bad taste (through TasteRite technology), and proper dosing (through SureDose technology). These technologies not only address children’s medicine compliance and ease of administration, but also make the lives of parents and healthcare professionals easier.</p>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
</div>
@endsection