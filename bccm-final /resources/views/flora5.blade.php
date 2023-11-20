@extends('components.layout')
@section('body_class', 'the-flora5')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section class="story-section">
    <div class="gallery-container">
        <div class="options">
            <div class="option active"  style="background:  #524266; opacity: 0.8;">
                <div class="image active-image" style="background-image:url('../images/backgrounds/ctree.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">National Tree</div>
                        <div class="sub">Cypress</div>
                    </div>
                </div>
                
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">The Himalayan cypress (Cupressus torolusa) is the national tree of Bhutan. They are associated with religion, and may often be found near the religious structures and in the temperate zone between altitudes of 1800m and 3500m.</div>
                </div>
            </div>

            <div class="option"  style="background:  #524266; opacity: 0.8;">
                <div class="image" style="background-image: url('../images/backgrounds/m1.png');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Botanical name: </div>
                            <div class="sub">Aquilaria malaccensis</div>
                        </div>
                    </div>
                
                </div>
                <div class="description">
                    <ul class="image-content scroll text-white">
                        <div>Bhutan is home to around 300 medicinal plants, the majority of which are harnessed for the production of traditional medicines and herbal teas.</div>
                        <li>Local name: Agaru(Dzongkha) and Akuru(Kheng)</li>
                        <li>Description: Evergreen tree which grows up to 30-40 meters tall</li>
                        <li>Distribution: Samdrup Jongkhar, Chhukha, Sarpang, Zhemgang</li>
                        <li>Part used: Wood and Resinous heartwood</li>
                        <li>Medicinal value: Nervine and refrigerant for nying-rog(tendons and other connective tissues that connect to the heart)</li>
                    </ul>   
                    
                </div>
            </div>

            

            <div class="option"  style="background:  #524266; opacity: 0.8;">
                <div class="image" style="background-image: url('../images/backgrounds/m2.png');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Botanical name: </div>
                            <div class="sub">Piper pedicellatum</div>
                        </div>
                    </div>
                
                </div>
                <div class="description">
                    <ul class="image-content scroll text-white">
                        <li>Pipiling(Dzongkha) and Bordamzalu(Kheng)</li>
                        <li>Description: Shrub that grows to 1-2 meters tall. Leaves are simple and oval with white flowers.Fruits areround and green which become blackish when ripe.</li>
                        <li>Distribution: Samtse, Chhukha, Sarpang, Trongsa, Trashigang, Zhemgang</li>
                        <li>Part used: Fruit</li>
                        <li>Medicinal value: Aphrodisiac, blood purifier and haematinic. Allays indigestion, flatulence, and    asthma. Expectorant and alleviates dry cough. Heals grang-nad(disorder associated with coldness with symptoms such as backache, abdominal pain, difficulty passing urine) and bad-rlung(complicated disorder arising due to defect in two of the three humors: Phlegm and Air)</li>
                    </ul>
                </div>
            </div>

            <div class="option"  style="background:  #524266; opacity: 0.8;">
                <div class="image" style="background-image: url('../images/backgrounds/m3.png');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Botanical name: </div>
                            <div class="sub">Cassia fistula</div>
                        </div>
                    </div>
                
                </div>
                <div class="description">
                    <ul class="image-content scroll text-white">
                        <li> Local name: Donga(Dzongkha) and Dongkashing(Sha)</li>
                        <li> Description: Deciduous tree which grows up to 20 meters tall, leaves are opposite and flowers are yellow.Pods are woody and black. Seeds are ovate and in line</li>
                        <li> Distribution: Samdrup Jongkhar, Chhukha, Sarpang, Trashigang</li>
                        <li> Part used: Seed</li>
                        <li> Medicinal value: Purgative, laxative, demulcent and allays liver disorders </li>
                    </ul>    

                </div>
            </div>

            <div class="option"  style="background:  #524266; opacity: 0.8;">
                <div class="image" style="background-image: url('../images/backgrounds/m4.png');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Botanical name: </div>
                            <div class="sub">Coriandrum sativum</div>
                        </div>
                    </div>
                
                </div>
                <div class="description">
                    <ul class="image-content scroll text-white">
                        <li> Local name: Husu(Dzongkha and Kheng)</li>
                        <li> Description: Herb growing up to 60 centimeters tall. Leaves pinnately lobed with white/pinkish flowers.</li>
                        <li> Distribution: Almost all parts of Bhutan</li>
                        <li> Part used: Seed</li>
                        <li> Medicinal value: Lithontriptic and disintegrates small masses in stomach due to defect in bad-kan(Phlegm)</li>
                    </ul>
                </div>
            </div>

            <div class="option"  style="background:  #524266; opacity: 0.8;">
                <div class="image" style="background-image: url('../images/backgrounds/m5.png');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Botanical name: </div>
                            <div class="sub">Cordyceps sinensis</div>
                        </div>
                    </div>
                
                </div>
                <div class="description">
                    <ul class="image-content scroll text-white">
                        <li> Local name: Jyar-tsa-guen-bu(Dzongkha)</li>
                        <li> Description: Caterpillar shaped roots which is dark brown or black, but can be a yellow color when fresh usually 4–10 centimeters</li>
                        <li> Distribution: Thimphu, Bumthang, Trashi Yangtse</li>
                        <li> Part used: Whole plant</li>
                        <li> Medicinal value: Useful for kidney disorders, general tonic, antipyretic, spermatogenesis</li>
                    </ul>
                </div>
            </div>

            <div class="option"  style="background:  #524266; opacity: 0.8;">
                <div class="image" style="background-image: url('../images/backgrounds/m6.png');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Botanical name:</div>
                            <div class="sub"> Panax pseudo ginseng</div>
                        </div>
                    </div>
                
                </div>
                <div class="description" style="display: none;">
                    <ul class="image-content scroll text-white">

                        <li > Local name: Bingiraza(Dzongkha)</li>
                        <li> Description: Short Herb with oval leaves and bright red/blackish fruit</li>
                        <li > Distribution: Thimphu, Bumthang, Trashigang, Paro, Gasa, Haa</li>
                        <li > Part used: Rhizomes</li>
                        <li > Medicinal value: Provides nourishment, improves immune system, stop or slow down bleeding</li>
                    </ul>
                </div>
            </div>
            <div class="option"  style="background:  #524266; opacity: 0.8;" >
                <div class="image" style="background-image: url('../images/backgrounds/orc8.png');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Botanical name: </div>
                            <div class="sub"> Neopicrorhiza scrophulariiflora</div>
                        
                        </div>
                    </div>
                
                </div>
                <div class="description" style="display: none;">
                    <ul class="image-content scroll text-white">
                        <li>Local name: Hong-len(Dzongkha) </li>
                        <li> Description: Herb with short leaf blade spatulate to ovate, hairy spike with purplish/black flower</li>
                        <li> Distribution: Thimphu, Bumthang</li>
                        <li> Part used: Rhizomes</li>
                        <li> Medicinal value: Anticoagulant, antidiarrheal, hematinic, depurative and febrifuge</li>
                    </ul>
                </div>
            </div> 
        </div>

    </div>

    <h1 class="text-white">the NATIONAL TREE & the HERBS</h1>
    <x-story-control :links="$links" :next-link="$nextLink" :dark=$darkThemeFlag/>
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection