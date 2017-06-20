@extends('layouts.master')

@section('content')

<div class="section" id="tasterite">
    @include('components.nav')
    <div class="slide">
        <div class="col-md-12 eztab-content text-center">
            <img class="tasterite-logo" src="/img/tasterite-logo.png">
        </div>
        <div class="col-md-12 eztab-content">
            <h1 class="eztab-title-content"><b>The Problem of Bad Taste</b></h1>
            <p class="tasterite_problem">Pediatric medications are most commonly formulated in liquid preparations such as syrups and suspensions. Liquid medicines are ideal for children because dose can be adjusted according to the weight of the child. Liquid medicines are also easier to drink for kids who may have trouble swallowing tablets or capsules. However, liquid medicines often taste bad.</p>
            <p class="tasterite_problem1">Bad taste is a big reason why children resist taking medicines, leading to incomplete or worse, missed doses. 73% of US parents (1998 US survey, among 500 parents), 77% of Philippine mothers (2002 Philippine survey, among 110 mothers), and 9/10 doctors (American Academy of Pediatric Periodic survey #44, Jan-May 2000, among 803 pediatricians) say that bad taste is a major cause of poor compliance.</p>
        </div>
        <div class="col-md-12 eztab-content">
            <h1 class="eztab-title-content"><b>TasteRite Technology</b></h1>
            <p class="tasterite_tech">TasteRite is the world’s only non-flavor based pediatric taste-masking patented technology. It is a unique taste-masking system that can be applied to various liquid medicine formats in order to significantly reduce the bitterness of medicine. Thus, making the lives of children and parents easier.</p>
            <p class="tasterite_tech">TasteRite utilizes a polymer system that prevents the interaction of the bad-tasting drug particles and the taste receptors on the tongue, resulting in a better tasting liquid medicine. This polymer system rapidly releases the drug in </br>the stomach, allowing the drug to rapidly dissolve for easy absorption.<p>
            <p class="tasterite_tech">US patent: US 7,107,572 B2</br>
                TasteRite in the Real World</p>
        </div>
        <div class="col-md-12 eztab-content">
            <h1 class="eztab-title-content"><b>Taste Taste</b></h1>
            <p class="tasterite_tech">We conducted several taste tests to show the superiority of medications that use TasteRite technologoy. In these trials, paracetamol was the active ingredient and subjects were asked to taste and compare TasteRite paracetamol and regular paracetamol.</p>
            <p class="tasterite_tech">• 95% of children liked the taste of TasteRite paracetamol
                • 93% of parents will use TasteRite paracetamol again
                • 87% of parents did not force their child to take the succeeding doses of TasteRite paracetamol
                Taste tests were also conducted on parents and pediatricians, and the results are as follows:
                <img class="taste_img" src="/img/tech/taste-rite.png">
                <img class="taste_img" src="/img/tech/taste-rite2.png"><br>

                Products using the TasteRite Technology</br>
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

    </div>
    @include('components.footer')
</div>

    @endsection