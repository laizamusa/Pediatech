@extends('layouts.master')

@section('content')

    {{--<div id="fullpage">--}}
        {{--<div class="section " id="section0">--}}
            <div class="container bdb">
                <nav class="navbar navbar-toggleable-md">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img style="height: 80px; /*margin-left: 120px;*/"  src="/img/logo.png"></a>
                    <div class="collapse navbar-collapse row" id="navbarCollapse">
                        <ul class="navbar-nav col-4">
                        </ul>
                        <ul class="navbar-nav col-8 text-center">
                            <li class="nav-item active col-3">
                                <a class="nav-link" href="/about">About Us</a>
                            </li>
                            <li class="nav-item col-3">
                                <a class="nav-link" href="/tech">Technologies</a>
                            </li>
                            <li class="nav-item col-3">
                                <a class="nav-link" href="/org">Our Organization</a>
                            </li>
                            <li class="nav-item col-3">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="intro">
                <div class="row">
                    {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
                    <img class="eztablogo" src="/img/eztab-logo.png">
                        <div style="margin-left: 264px; margin-top: 100px;">
                            <h1 class="eztab-title-content"><b>Difficulty of taking medicines away from home</b></h1>
                            <p style="text-align: center; color:#696969; font-size: 18px;">Many school-aged young children have to take medicines away from home. These medicines can include maintenance </br> medication for conditions such as asthma, and seasonal allergies. Currently available formats pose various challenges </br> for young children. Liquid medicines can be messy, and difficult to prepare; while, tablets can be hard to swallow, and </br>can pose a choking hazard.</p>
                        </div>
                        <div style="margin-left: 264px; margin-top: 100px;">
                            <h1 class="eztab-title-content"><b>EZTab Technology</b></h1>
                            <p style="text-align: center; color:#696969; font-size: 18px;">EZTab technology makes medicines easy for young children to take away from home. EZTab technology powers tablets </br> that readily disperse in a child’s mouth without the need for water in just a few seconds. The quick dissolving tablets </br>provide immediate release of the active ingredients for absorption. No mess and no risk of choking with EZTab. Easy </br> and safe anywhere.</p>
                        </div>
                        <div class="iframe embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/LEx45L0un8g" frameborder="0" allowfullscreen></iframe></div>
                        </div>
                        <p style="text-align: center; color:#696969; font-size: 18px;">EZTab in the Real World</br>
                            Products using the EZTab Technology</br>
                            • Kastair EZTab (Motelukast)
                        </p>
                </div>

                <div class="row">
                    {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
                    <img class="suredose-logo" src="/img/soredose-logo.png">
                        <div style="margin-left: 264px; margin-top: 100px;">
                            <h1 class="eztab-title-content"><b>The Problem with Suspensions</b></h1>
                            <p style="text-align: center; color:#696969; font-size: 18px;">Pediatric medicines in suspension format need to be shaken to ensure uniform drug distribution. A good suspension </br> should (a) be easily redispersed from shaking, (b) remain suspended long enough to administer the dose, and (c) have </br> the desired flow properties.</p>
                            <p style="text-align: center; color:#696969; font-size: 18px;">Some suspensions do not satisfy all of these properties, and are physically unstable. These can manifest in rapid </br> settling and caking of drug particles that are difficult to redisperse. This leads to dose uniformity problems.</p>
                        </div>
                        <div style="margin-left: 264px; margin-top: 100px;">
                            <h1 class="eztab-title-content"><b>SureDose Technology</b></h1>
                            <p style="text-align: center; color:#696969; font-size: 18px;">SureDose patented technology is the world’s only no-shake liquid suspension format that ensures no settling, no </br> packing, and no caking of drug particles in suspension. SureDose combines 3 elements to achieve a stable suspension with </br> excellent drug uniformity – liquid of the right density, polymer with an increased yield value, and micronized drug.</br>
                                SureDose ensures that each dose of medicine is correct and complete every time.</p>
                            <p style="text-align: center; color:#696969; font-size: 18px;">US patent: 7,300,670 B2</br>
                                Philippines patent: 1-2002-080820</br>
                                SureDose in the Real World</br>
                                Drug uniformity analysis after centrifugation of 2 hours at 500 g’s</p>
                        </div>
                        <div>
                            <img class="" style="height: 561px; margin-left: 30%;" src="/img/tech/suredose.png">
                        </div>
                    <p style="margin-left: 583px; text-align: center; color:#696969; font-size: 18px;">Products using the SureDose Technology</br>
                        • Rimaped (Rifampicin) Suspension
                    </p>
                </div>

                <div class="row">
                    {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
                    <img class="tasterite-logo" src="/img/tasterite-logo.png">
                    <div style="margin-left: 264px; margin-top: 100px;">
                        <h1 class="eztab-title-content"><b>The Problem of Bad Taste</b></h1>
                        <p style="text-align: center; color:#696969; font-size: 18px;">Pediatric medications are most commonly formulated in liquid preparations such as syrups and suspensions. </br>Liquid medicines are ideal for children because dose can be adjusted according to the weight of the child. Liquid medicines </br>are also easier to drink for kids who may have trouble swallowing tablets or capsules. However, liquid medicines often </br>taste bad.</p>
                        <p style="text-align: center; color:#696969; font-size: 18px;">Bad taste is a big reason why children resist taking medicines, leading to incomplete or worse, missed doses. 73% of </br>US parents (1998 US survey, among 500 parents), 77% of Philippine mothers (2002 Philippine survey, among 110 </br>mothers), and 9/10 doctors (American Academy of Pediatric Periodic survey #44, Jan-May 2000, among 803 </br>pediatricians) say that bad taste is a major cause of poor compliance.</p>
                    </div>
                    <div style="margin-left: 264px; margin-top: 100px;">
                        <h1 class="eztab-title-content"><b>TasteRite Technology</b></h1>
                        <p style="text-align: center; color:#696969; font-size: 18px;">TasteRite is the world’s only non-flavor based pediatric taste-masking patented technology. It is a unique taste-</br>masking system that can be applied to various liquid medicine formats in order to significantly reduce the bitterness of </br>medicine. Thus, making the lives of children and parents easier.</p>
                        <p style="text-align: center; color:#696969; font-size: 18px;">TasteRite utilizes a polymer system that prevents the interaction of the bad-tasting drug particles and the taste </br>receptors on the tongue, resulting in a better tasting liquid medicine. This polymer system rapidly releases the drug in </br>the stomach, allowing the drug to rapidly dissolve for easy absorption.<p>
                        <p style="text-align: center; color:#696969; font-size: 18px;">US patent: US 7,107,572 B2</br>
                            TasteRite in the Real World</p>
                    </div>
                    <div style="margin-left: 264px; margin-top: 100px;">
                        <h1 class="eztab-title-content"><b>Taste Taste</b></h1>
                        <p style="text-align: center; color:#696969; font-size: 18px;">We conducted several taste tests to show the superiority of medications that use TasteRite technologoy. In these </br>trials, paracetamol was the active ingredient and subjects were asked to taste and compare TasteRite paracetamol and </br>regular paracetamol.</p>
                        <p style="text-align: center; color:#696969; font-size: 18px;">• 95% of children liked the taste of TasteRite paracetamol</br>
                            • 93% of parents will use TasteRite paracetamol again</br>
                            • 87% of parents did not force their child to take the succeeding doses of TasteRite paracetamol</br>
                            Taste tests were also conducted on parents and pediatricians, and the results are as follows:</p>
                    </div>

                    <div>
                        <img class="" style="height: 561px; margin-left: 21%;" src="/img/tech/taste-rite.png">
                        <img class="" style="height: 561px; margin-left: 21%;" src="/img/tech/taste-rite2.png">
                    </div>
                    <p style="margin-left: 474px; text-align: center; color:#696969; font-size: 18px;">Products using the TasteRite Technology</br>
                        • Biogesic (Paracetamol) TasteRite</br>
                        • Solmux (Carbocisteine) TasteRite</br>
                        • Dolan (Ibuprofen) TasteRite</br>
                        • Asmalin (Salbutamol) TasteRite</br>
                        • Allerkid (Cetirizine) TasteRite</br>
                        • Alnix Plus (Cetrizine + Phenylephrine) TasteRite</br>
                        • Nutrilin TasteRite</br>
                        • Growee TasteRite
                    </p>
                </div>

                <div class="row">
                    {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
                    <img class="tftech-logo" src="/img/tftech.png">
                    <div style="margin-left: 264px; margin-top: 100px;">
                        <h1 class="eztab-title-content"><b>Children’s Medicines, Dental Caries (Cavities), and Dental Erosion</b></h1>
                        <p style="text-align: center; color:#696969; font-size: 18px;">Pediatric medicines are usually in liquid formats, so they need to be palatable for children. A widely used strategy to </br>enhance the palatability of children’s medicines is to add sugar and formulate in acidic pH. What is often overlooked is </br>that sugar and acid in children’s medicines are just as harmful to the teeth as the sugar and acid in candies, soda, </br>and fruit juices.</p>
                        <p style="text-align: center; color:#696969; font-size: 18px;">Dental caries and dental erosion can lead to various complications from difficulty eating to disability in extreme cases. </br>Therefore, efforts to reduce their incidence are imperative. Reduction of teeth exposure to sugary and acidic food, </br>beverage, and medicines is a crucial step to lessen dental caries and dental erosion.</p>
                        <p style="text-align: center; color:#696969; font-size: 18px;">Insert video 1 on dental caries/ erosion</p>
                    </div>
                    <div style="margin-left: 264px; margin-top: 100px;">
                        <h1 class="eztab-title-content"><b>TFTech</b></h1>
                        <p style="text-align: center; color:#696969; font-size: 18px;">TFTech combines formulation strategies and a deep understanding of oral physiology in order to develop tooth friendly </br>children’s medicines. Tooth friendly medicines are sugar-free, acid-free or acid mitigated. They are tested through pH </br>telemetry or in vitro enamel dissolution test to demonstrate that they are non-cariogenic, and do not cause dental </br>erosion. Tooth friendly medicines are good for a child’s health and oral health.</p>
                        <p style="text-align: center; color:#696969; font-size: 18px;">TFTech in the Real World</br>
                            ToothFriendly Test Results</br>
                            Pending upon patent filing</br>
                            Products using the ToothFriendly Technology</br>
                            • Paracetamol TF</p>
                    </div>
                </div>

                <div class="row">
                    {{--<img class="img-responsive banner_bg" src="/img/packaging.png">--}}
                    <img class="zinc-plus-logo" src="/img/zinc-plus-logo.png">
                    <div style="margin-left: 264px; margin-top: 100px;">
                        <h1 class="eztab-title-content"><b>Vitamin C and Zinc Immunity Combination </b></h1>
                        <p style="text-align: center; color:#696969; font-size: 18p x;">The immune system effectively defends the body against attacks by “foreign” invaders. However, there are moments </br>when the immune system weakens and fails to keep disease-causing microorganisms out. In light of this, the immune </br>system can always use a boost.</p>
                        <p style="text-align: center; color:#696969; font-size: 18px;">Vitamin C and zinc is the ideal combination to enhance and balance innate immunity and adaptive immunity for optimal </br>immune protection. Studies have shown that they significantly reduce the symptoms of the common cold.</p>
                        <p style="text-align: center; color:#696969; font-size: 18px;">dual immune defenses of vitamin C and zinc, watch the video below.</p>
                    </div>
                    <div class="iframe embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/vIGDNWaY5Ec" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                    <p style="text-align: center; color:#696969; font-size: 18px;">The Problem with Combining Vitamin C and Zinc</br>
                        There are a lot of challenges in combining vitamin C and zinc in pediatric liquid medications such as syrup and drops. </br>Stability of the formulation is the biggest issue. Vitamin C degrades rapidly in the presence of divalent metal ions such </br>as zinc. In one experiment, zinc doubled the rate of vitamin C degradation (Fig. 1). Further, zinc also gives the liquid </br>medication an astringent, metallic and unpleasant taste.</p>
                    <p style="text-align: center; color:#696969; font-size: 18px;">Fig. 1. Assay of Vitamin C with and without Zinc in a liquid format</p>
                    <img class="" style="height: 561px; margin-left: 30%;" src="/img/tech/zinc-plus.png">

                    <div style="margin-left: 264px; margin-top: 100px;">
                        <h1 class="eztab-title-content"><b>ZincPlus Technology</b></h1>
                        <p style="text-align: center; color:#696969; font-size: 18px;">ZincPlus is a patented technology that powers world’s only stable formulation of Vitamin C and Zinc in liquid format. It uses unique polymer strands that prevent the degradation of vitamin C (Fig. 2). It also reduces the metallic taste and astringency of zinc (Fig. 3). Watch the video below for more on PediaTech’s ZincPlus technology.</p>
                        <p style="text-align: center; color:#696969; font-size: 18px;">Fig. 2. Assay of Vitamin C</p>
                        <img class="" style="height: 561px; margin-left: 30%;" src="/img/tech/zinc-plus2.png">
                        <p style="text-align: center; color:#696969; font-size: 18px;">Fig. 3 Astringency Test</p>
                        <img class="" style="height: 561px; margin-left: 30%;" src="/img/tech/zinc-plus3.png">
                    </div>

                    <div>
                        <div class="iframe embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/LEx45L0un8g" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <p style="text-align: center; color:#696969; font-size: 18px;">ZincPlus in the Real World</br>
                        Products using the ZincPlus Technology</br>
                        • Immunped syrup</br>
                        • Ceelin Plus syrup and drops</br>
                        • Ceelin Plus chewables</p>
                </div>


            </div>
        {{--</div>--}}
    {{--</div>--}}

    @endsection