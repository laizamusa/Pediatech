@extends('layouts.master')

@section('content')

    {{--full page--}}
    <div id="fullpage">
        {{--<div class="section " id="eztab">--}}
            @include('components.nav')
            {{--<div class="row" id="eztab">--}}
                {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
                {{--<div class="col-md-12 eztab-content text-center">--}}
                    {{--<img class="eztablogo" src="/img/eztab-logo.png">--}}
                {{--</div>--}}
                {{--<div class="col-md-12 eztab-content">--}}
                    {{--<h1 class="eztab-title-content"><b>Difficulty of taking medicines away from home</b></h1>--}}
                    {{--<p class="eztab-title-content1 pd100">Many school-aged young children have to take medicines away from home. These medicines can include maintenance medication for conditions such as asthma, and seasonal allergies. Currently available formats pose various challenges for young children. Liquid medicines can be messy, and difficult to prepare; while, tablets can be hard to swallow, and can pose a choking hazard.</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-12 eztab-content">--}}
                    {{--<h1 class="eztab-title-content"><b>EZTab Technology</b></h1>--}}
                    {{--<p class="eztech pd100" style="">EZTab technology makes medicines easy for young children to take away from home. EZTab technology powers tablets that readily disperse in a child’s mouth without the need for water in just a few seconds. The quick dissolving tablets provide immediate release of the active ingredients for absorption. No mess and no risk of choking with EZTab. Easy and safe anywhere.</p>--}}
                {{--</div>--}}
                {{--<div class="iframe embed-responsive embed-responsive-16by9 eztabvid">--}}
                    {{--<iframe src="https://www.youtube.com/embed/LEx45L0un8g" frameborder="0" allowfullscreen></iframe></div>--}}
            {{--</div>--}}
            {{--<p style="text-align: center; color:#696969; font-size: 18px;">EZTab in the Real World</br>--}}
                {{--Products using the EZTab Technology</br>--}}
                {{--• Kastair EZTab (Motelukast)--}}
            {{--</p>--}}
        {{--</div>--}}

        {{--<hr class="hr">--}}

        {{--<div class="section" id="suredose">--}}
            {{--<div class="slide">--}}
                {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
                {{--<div class="col-md-12 eztab-content text-center">--}}
                    {{--<img class="suredose-logo" src="/img/suredose-logo.png">--}}
                {{--</div>--}}
                {{--<div class="col-md-12 eztab-content">--}}
                    {{--<h1 class="eztab-title-content"><b>The Problem with Suspensions</b></h1>--}}
                    {{--<p class="suredosesus pd100">Pediatric medicines in suspension format need to be shaken to ensure uniform drug distribution. A good suspension should (a) be easily redispersed from shaking, (b) remain suspended long enough to administer the dose, and (c) have the desired flow properties.</p>--}}
                    {{--<p class="suredosesus1 pd100">Some suspensions do not satisfy all of these properties, and are physically unstable. These can manifest in rapid settling and caking of drug particles that are difficult to redisperse. This leads to dose uniformity problems.</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-12 eztab-content">--}}
                    {{--<h1 class="eztab-title-content"><b>SureDose Technology</b></h1>--}}
                    {{--<p class="suredosetech pd100">SureDose patented technology is the world’s only no-shake liquid suspension format that ensures no settling, no packing, and no caking of drug particles in suspension. SureDose combines 3 elements to achieve a stable suspension with excellent drug uniformity – liquid of the right density, polymer with an increased yield value, and micronized drug.--}}
                    {{--SureDose ensures that each dose of medicine is correct and complete every time.</p>--}}
                    {{--<p class="suredosetech1">US patent: 7,300,670 B2</br>--}}
                    {{--Philippines patent: 1-2002-080820</br>--}}
                    {{--SureDose in the Real World</br>--}}
                    {{--Drug uniformity analysis after centrifugation of 2 hours at 500 g’s--}}
                    {{--<br>--}}
                    {{--<img class="suredosetech_img" src="/img/tech/suredose.png">--}}
                    {{--<br>--}}
                    {{--Products using the SureDose Technology</br>--}}
                    {{--• Rimaped (Rifampicin) Suspension--}}
                    {{--</p>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}

        {{--<hr class="hr">--}}

        {{--<div class="section" id="tasterite">--}}
            {{--<div class="slide">--}}
                {{--<div class="col-md-12 eztab-content text-center">--}}
                    {{--<img class="tasterite-logo" src="/img/tasterite-logo.png">--}}
                {{--</div>--}}
                {{--<div class="col-md-12 eztab-content">--}}
                    {{--<h1 class="eztab-title-content"><b>The Problem of Bad Taste</b></h1>--}}
                    {{--<p class="tasterite_problem">Pediatric medications are most commonly formulated in liquid preparations such as syrups and suspensions. Liquid medicines are ideal for children because dose can be adjusted according to the weight of the child. Liquid medicines are also easier to drink for kids who may have trouble swallowing tablets or capsules. However, liquid medicines often taste bad.</p>--}}
                    {{--<p class="tasterite_problem1">Bad taste is a big reason why children resist taking medicines, leading to incomplete or worse, missed doses. 73% of US parents (1998 US survey, among 500 parents), 77% of Philippine mothers (2002 Philippine survey, among 110 mothers), and 9/10 doctors (American Academy of Pediatric Periodic survey #44, Jan-May 2000, among 803 pediatricians) say that bad taste is a major cause of poor compliance.</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-12 eztab-content">--}}
                    {{--<h1 class="eztab-title-content"><b>TasteRite Technology</b></h1>--}}
                    {{--<p class="tasterite_tech">TasteRite is the world’s only non-flavor based pediatric taste-masking patented technology. It is a unique taste-masking system that can be applied to various liquid medicine formats in order to significantly reduce the bitterness of medicine. Thus, making the lives of children and parents easier.</p>--}}
                    {{--<p class="tasterite_tech">TasteRite utilizes a polymer system that prevents the interaction of the bad-tasting drug particles and the taste receptors on the tongue, resulting in a better tasting liquid medicine. This polymer system rapidly releases the drug in </br>the stomach, allowing the drug to rapidly dissolve for easy absorption.<p>--}}
                    {{--<p class="tasterite_tech">US patent: US 7,107,572 B2</br>--}}
                        {{--TasteRite in the Real World</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-12 eztab-content">--}}
                    {{--<h1 class="eztab-title-content"><b>Taste Taste</b></h1>--}}
                    {{--<p class="tasterite_tech">We conducted several taste tests to show the superiority of medications that use TasteRite technologoy. In these trials, paracetamol was the active ingredient and subjects were asked to taste and compare TasteRite paracetamol and regular paracetamol.</p>--}}
                    {{--<p class="tasterite_tech">• 95% of children liked the taste of TasteRite paracetamol--}}
                        {{--• 93% of parents will use TasteRite paracetamol again--}}
                        {{--• 87% of parents did not force their child to take the succeeding doses of TasteRite paracetamol--}}
                        {{--Taste tests were also conducted on parents and pediatricians, and the results are as follows:--}}
                        {{--<img class="taste_img" src="/img/tech/taste-rite.png">--}}
                        {{--<img class="taste_img" src="/img/tech/taste-rite2.png"><br>--}}

                        {{--Products using the TasteRite Technology</br>--}}
                        {{--• Biogesic (Paracetamol) TasteRite</br>--}}
                        {{--• Solmux (Carbocisteine) TasteRite</br>--}}
                        {{--• Dolan (Ibuprofen) TasteRite</br>--}}
                        {{--• Asmalin (Salbutamol) TasteRite</br>--}}
                        {{--• Allerkid (Cetirizine) TasteRite</br>--}}
                        {{--• Alnix Plus (Cetrizine + Phenylephrine) TasteRite</br>--}}
                        {{--• Nutrilin TasteRite</br>--}}
                        {{--• Growee TasteRite--}}
                    {{--</p>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}

        {{--<hr class="hr">--}}

        {{--<div class="section" id="toothfriendly">--}}
            {{--<div class="intro">--}}
                {{--<div class="col-md-12 eztab-content text-center">--}}
                    {{--<img class="tftech-logo" src="/img/tftech.png">--}}
                {{--</div>--}}

                {{--<div class="col-md-12 eztab-content text-center">--}}
                    {{--<h1 class="eztab-title-content"><b>Children’s Medicines, Dental Caries (Cavities), and Dental Erosion</b></h1>--}}
                    {{--<p class="tftech_content1 pd100">Pediatric medicines are usually in liquid formats, so they need to be palatable for children. A widely used strategy to enhance the palatability of children’s medicines is to add sugar and formulate in acidic pH. What is often overlooked is that sugar and acid in children’s medicines are just as harmful to the teeth as the sugar and acid in candies, soda, and fruit juices.</p>--}}
                    {{--<p class="tftech_content1 pd100">Dental caries and dental erosion can lead to various complications from difficulty eating to disability in extreme cases. Therefore, efforts to reduce their incidence are imperative. Reduction of teeth exposure to sugary and acidic food, beverage, and medicines is a crucial step to lessen dental caries and dental erosion.</p>--}}
                    {{--<p class="tftech_content1 pd100">Insert video 1 on dental caries/ erosion</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-12 eztab-content text-center">--}}
                    {{--<h1 class="eztab-title-content"><b>TFTech</b></h1>--}}
                    {{--<p class="tftech_content1 pd100">TFTech combines formulation strategies and a deep understanding of oral physiology in order to develop tooth friendly children’s medicines. Tooth friendly medicines are sugar-free, acid-free or acid mitigated. They are tested through pH telemetry or in vitro enamel dissolution test to demonstrate that they are non-cariogenic, and do not cause dental erosion. Tooth friendly medicines are good for a child’s health and oral health.</p>--}}
                    {{--<p class="tftech_content1 pd100">TFTech in the Real World</br>--}}
                        {{--ToothFriendly Test Results</br>--}}
                        {{--Pending upon patent filing</br>--}}
                        {{--Products using the ToothFriendly Technology</br>--}}
                        {{--• Paracetamol TF</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<hr class="hr">--}}

        <div class="section" id="zincplus">
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
