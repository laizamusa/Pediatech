@extends('layouts.master')

@section('content')

<div class="section" id="zincplus">
    @include('components.nav')
    <div class="intro">
        <div class="col-md-12 eztab-content text-center">
            <img class="zinc-plus-logo" src="/img/zinc-plus-logo.png">
        </div>
        <div class="col-md-12 eztab-content">
            <h1 class="eztab-title-content"><b>Vitamin C and Zinc Immunity Combination </b></h1>
            <p class="tftech_content1 pd100">The immune system effectively defends the body against attacks by “foreign” invaders. However, there are moments when the immune system weakens and fails to keep disease-causing microorganisms out. In light of this, the immune system can always use a boost.</p>
            <p class="tftech_content1 pd100">Vitamin C and zinc is the ideal combination to enhance and balance innate immunity and adaptive immunity for optimal immune protection. Studies have shown that they significantly reduce the symptoms of the common cold.</p>
            <p class="tftech_content1 pd100">dual immune defenses of vitamin C and zinc, watch the video below.</p>
        </div>
        <div class="iframe embed-responsive embed-responsive-16by9 zincplus_vid">
            <iframe src="https://www.youtube.com/embed/vIGDNWaY5Ec" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div>
        <p class="eztab-title-content1 pd100">The Problem with Combining Vitamin C and Zinc
            There are a lot of challenges in combining vitamin C and zinc in pediatric liquid medications such as syrup and drops. Stability of the formulation is the biggest issue. Vitamin C degrades rapidly in the presence of divalent metal ions such as zinc. In one experiment, zinc doubled the rate of vitamin C degradation (Fig. 1). Further, zinc also gives the liquid medication an astringent, metallic and unpleasant taste.</p>
        <p class="eztab-title-content1 pd100">
            Fig. 1. Assay of Vitamin C with and without Zinc in a liquid format <br>
        </p>
        <img id="zincplus2_img" class="fig1" src="/img/tech/zinc-plus.png">

        <div id="zincplus_tech" class="zincplus_tech" style="">
            <h1 class="eztab-title-content"><b>ZincPlus Technology</b></h1>
            <p class="eztab-title-content1 pd100">ZincPlus is a patented technology that powers world’s only stable formulation of Vitamin C and Zinc in liquid format. It uses unique polymer strands that prevent the degradation of vitamin C (Fig. 2). It also reduces the metallic taste and astringency of zinc (Fig. 3). Watch the video below for more on PediaTech’s ZincPlus technology.</p>
            <p class="eztab-title-content1 pd100">
                Fig. 2. Assay of Vitamin C
            </p>
            <img class="zincplus1_img" id="zincplus_img" src="/img/tech/zinc-plus2.png">
            <p class="eztab-title-content1 pd100">
                Fig. 3 Astringency Test
            </p>
            <img class="zincplus1_img" id="zincplus_img" src="/img/tech/zinc-plus3.png">
        </div>

        <div>
            <div class="iframe embed-responsive embed-responsive-16by9" style="width: 50%; margin-left: 25%;">
                <iframe src="https://www.youtube.com/embed/LEx45L0un8g" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <p class="col-md-12 eztab-title-content1 pd100">
            ZincPlus in the Real World</br>
            Products using the ZincPlus Technology</br>
            • Immunped syrup</br>
            • Ceelin Plus syrup and drops</br>
            • Ceelin Plus chewables</p>
    </div>

    @include('components.footer')
</div>

    @endsection