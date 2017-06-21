@extends('layouts.master')

@section('content')

<div class="section" id="toothfriendly">
    @include('components.nav')
    <div class="intro">
        <div class="col-md-12 eztab-content text-center">
            <img class="tftech-logo" src="/img/tftech.png">
        </div>

        <div class="col-md-12 eztab-content">
            <h1 class="eztab-title-content"><b>Children’s Medicines, Dental Caries (Cavities), and Dental Erosion</b></h1>
            <p class="tftech_content1 pd100">Pediatric medicines are usually in liquid formats, so they need to be palatable for children. A widely used strategy to enhance the palatability of children’s medicines is to add sugar and formulate in acidic pH. What is often overlooked is that sugar and acid in children’s medicines are just as harmful to the teeth as the sugar and acid in candies, soda, and fruit juices.</p>
            <p class="tftech_content1 pd100">Dental caries and dental erosion can lead to various complications from difficulty eating to disability in extreme cases. Therefore, efforts to reduce their incidence are imperative. Reduction of teeth exposure to sugary and acidic food, beverage, and medicines is a crucial step to lessen dental caries and dental erosion.</p>
            <p class="tftech_content1 pd100">Insert video 1 on dental caries/ erosion</p>
        </div>
        <div class="col-md-12 eztab-content">
            <h1 class="eztab-title-content"><b>TFTech</b></h1>
            <p class="tftech_content1 pd100">TFTech combines formulation strategies and a deep understanding of oral physiology in order to develop tooth friendly children’s medicines. Tooth friendly medicines are sugar-free, acid-free or acid mitigated. They are tested through pH telemetry or in vitro enamel dissolution test to demonstrate that they are non-cariogenic, and do not cause dental erosion. Tooth friendly medicines are good for a child’s health and oral health.</p>
            <h1 class="eztab-title-content"><b>TFTech in the Real World</b></h1>
                <p class="tftechrworld">ToothFriendly Test Results</br>
                Pending upon patent filing</br>
                Products using the ToothFriendly Technology</br>
                • Paracetamol TF</p>
        </div>
    </div>
    @include('components.footer')
</div>

    @endsection