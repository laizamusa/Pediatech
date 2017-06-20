@extends('layouts.master')

@section('content')

    <div class="section " id="eztab">
        @include('components.nav')
        <div class="row" id="eztab">
            {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
            <div class="col-md-12 eztab-content text-center">
                <img class="eztablogo" src="/img/eztab-logo.png">
            </div>
            <div class="col-md-12 eztab-content">
                <h1 class="eztab-title-content"><b>Difficulty of taking medicines away from home</b></h1>
                <p class="eztab-title-content1 pd100">Many school-aged young children have to take medicines away from home. These medicines can include maintenance medication for conditions such as asthma, and seasonal allergies. Currently available formats pose various challenges for young children. Liquid medicines can be messy, and difficult to prepare; while, tablets can be hard to swallow, and can pose a choking hazard.</p>
            </div>
            <div class="col-md-12 eztab-content">
                <h1 class="eztab-title-content"><b>EZTab Technology</b></h1>
                <p class="eztech pd100" style="">EZTab technology makes medicines easy for young children to take away from home. EZTab technology powers tablets that readily disperse in a child’s mouth without the need for water in just a few seconds. The quick dissolving tablets provide immediate release of the active ingredients for absorption. No mess and no risk of choking with EZTab. Easy and safe anywhere.</p>
            </div>
            <div class="iframe embed-responsive embed-responsive-16by9 eztabvid">
                <iframe src="https://www.youtube.com/embed/LEx45L0un8g" frameborder="0" allowfullscreen></iframe></div>
        </div>
        <p style="text-align: center; color:#696969; font-size: 18px;">EZTab in the Real World</br>
            Products using the EZTab Technology</br>
            • Kastair EZTab (Motelukast)
        </p>
    </div>

    @include('components.footer')
@endsection