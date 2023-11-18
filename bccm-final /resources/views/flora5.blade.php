@extends('components.layout')
@section('body_class', 'the-flora5')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section>
    <div class="gallery-container">
        <div class="options">
            <div class="option active">
                <div class="image" style="background-image:url('../images/backgrounds/ctree.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">National Tree</div>
                        <div class="sub">Cypress</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
            <div class="image-content scroll">The Himalayan cypress (Cupressus torolusa) is the national tree of Bhutan. They are associated with religion, and may often be found near the religious structures and in the temperate zone between altitudes of 1800m and 3500m.</div>
         </div>
        </div>

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/m1.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Botanical name: </div>
                        <div class="sub">Aquilaria malaccensis</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll">
                    <div>Bhutan is home to around 300 medicinal plants, the majority of which are harnessed for the production of traditional medicines and herbal teas.</div>
                    <li>Local name: Agaru(Dzongkha) and Akuru(Kheng)</li>
                    <li>Description: Evergreen tree which grows up to 30-40 meters tall</li>
                    <li>Distribution: Samdrup Jongkhar, Chhukha, Sarpang, Zhemgang</li>
                    <li>Part used: Wood and Resinous heartwood</li>
                    <li>Medicinal value: Nervine and refrigerant for nying-rog(tendons and other connective tissues that connect to the heart)</li>
                </ul>   
                
            </div>
        </div>

        

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/m2.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Botanical name: </div>
                        <div class="sub">Piper pedicellatum</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll">
                    <li>Pipiling(Dzongkha) and Bordamzalu(Kheng)</li>
                    <li>Description: Shrub that grows to 1-2 meters tall. Leaves are simple and oval with white flowers.Fruits areround and green which become blackish when ripe.</li>
                    <li>Distribution: Samtse, Chhukha, Sarpang, Trongsa, Trashigang, Zhemgang</li>
                    <li>Part used: Fruit</li>
                    <li>Medicinal value: Aphrodisiac, blood purifier and haematinic. Allays indigestion, flatulence, and    asthma. Expectorant and alleviates dry cough. Heals grang-nad(disorder associated with coldness with symptoms such as backache, abdominal pain, difficulty passing urine) and bad-rlung(complicated disorder arising due to defect in two of the three humors: Phlegm and Air)</li>
                </ul>
            </div>
        </div>

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/m3.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Botanical name: </div>
                        <div class="sub">Cassia fistula</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll">
                    <li> Local name: Donga(Dzongkha) and Dongkashing(Sha)</li>
                    <li> Description: Deciduous tree which grows up to 20 meters tall, leaves are opposite and flowers are yellow.Pods are woody and black. Seeds are ovate and in line</li>
                    <li> Distribution: Samdrup Jongkhar, Chhukha, Sarpang, Trashigang</li>
                    <li> Part used: Seed</li>
                    <li> Medicinal value: Purgative, laxative, demulcent and allays liver disorders </li>
                </ul>    

            </div>
        </div>

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/m4.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Botanical name: </div>
                        <div class="sub">Coriandrum sativum</div>
                    </div>
                </div>
              
            </div>
            <div class="description">
                <ul class="image-content scroll">
                    <li> Local name: Husu(Dzongkha and Kheng)</li>
                    <li> Description: Herb growing up to 60 centimeters tall. Leaves pinnately lobed with white/pinkish flowers.</li>
                    <li> Distribution: Almost all parts of Bhutan</li>
                    <li> Part used: Seed</li>
                    <li> Medicinal value: Lithontriptic and disintegrates small masses in stomach due to defect in bad-kan(Phlegm)</li>
                </ul>
            </div>
        </div>

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/m5.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Botanical name: </div>
                        <div class="sub">Cordyceps sinensis</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll">
                    <li> Local name: Jyar-tsa-guen-bu(Dzongkha)</li>
                    <li> Description: Caterpillar shaped roots which is dark brown or black, but can be a yellow color when fresh usually 4–10 centimeters</li>
                    <li> Distribution: Thimphu, Bumthang, Trashi Yangtse</li>
                    <li> Part used: Whole plant</li>
                    <li> Medicinal value: Useful for kidney disorders, general tonic, antipyretic, spermatogenesis</li>
                </ul>
            </div>
        </div>

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/m6.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Botanical name:</div>
                        <div class="sub"> Panax pseudo ginseng</div>
                    </div>
                </div>
               
            </div>
            <div class="description" style="display: none;">
                <ul class="image-content scroll">

                    <li > Local name: Bingiraza(Dzongkha)</li>
                    <li> Description: Short Herb with oval leaves and bright red/blackish fruit</li>
                    <li > Distribution: Thimphu, Bumthang, Trashigang, Paro, Gasa, Haa</li>
                    <li > Part used: Rhizomes</li>
                    <li > Medicinal value: Provides nourishment, improves immune system, stop or slow down bleeding</li>
                </ul>
            </div>
        </div>
        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/orc8.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Botanical name: </div>
                        <div class="sub"> Neopicrorhiza scrophulariiflora</div>
                       
                    </div>
                </div>
               
            </div>
            <div class="description" style="display: none;">
                <ul class="image-content scroll">
                    <li>Local name: Hong-len(Dzongkha) </li>
                    <li> Description: Herb with short leaf blade spatulate to ovate, hairy spike with purplish/black flower</li>
                    <li> Distribution: Thimphu, Bumthang</li>
                    <li> Part used: Rhizomes</li>
                    <li> Medicinal value: Anticoagulant, antidiarrheal, hematinic, depurative and febrifuge</li>
                </ul>
            </div>
        </div>
           
            <!-- <div class="option" style="--optionBackground: url('../images/backgrounds/king.jpeg');">
            </div>
            <div class="option" style="--optionBackground: url('../images/backgrounds/queen2.jpeg') center/cover no-repeat;">
            </div> -->
          
            
        </div>

        <div>
            <h1 class="text-white">the National Tree & the Madicinal Herbs</h1>
        </div>

        <!-- <div class="d-flex align-items-center justify-content-between mt-46">
            <ul class="d-flex align-items-center justify-content-between list-none p-0 m-0">
                <li><a href="#" class="no-underline circle-xm d-flex justify-content-center align-items-center mr-10 border-0">1</a></li>
                <li class="only-border"><a href="#" class="no-underline circle-xm d-flex justify-content-center align-items-center border-0 circle-fill">2</a></li>
            </ul>

            <div class="d-flex align-items-center">
                <p class="p-0 m-0 fw-400 lh-norma">Next story</p>
                <div class="circle-xm d-flex justify-content-center align-items-center ml-9">
                    <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M38 17.0001C38 17.5636 37.7776 18.1042 37.3817 18.5026L22.6039 33.3777C21.7795 34.2075 20.4427 34.2075 19.6183 33.3777C18.794 32.5479 18.794 31.2023 19.6183 30.3725L30.7922 19.1251H2.11111C0.945145 19.1251 0 18.1737 0 17.0001C0 15.8264 0.945145 14.875 2.11111 14.875L30.7922 14.875L19.6183 3.62762C18.794 2.79774 18.794 1.45227 19.6183 0.622393C20.4427 -0.207464 21.7795 -0.207464 22.6039 0.622393L37.3817 15.4975C37.7776 15.8959 38 16.4365 38 17.0001Z" fill="black"/>
                        <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.704783 -0.709422 0.704783 -0.709422 25.3333 17.0001)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                        <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(0.704783 -0.709422 -0.704783 -0.709422 10.9778 25.5001)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
        </div>         -->
    </div>

    <x-story-control :links="$links" :next-link="$nextLink"/>

 
    
    <script>
        // $(".option").click(function () {
        //     $(".option").removeClass("active");
        //     $(this).addClass("active");
        // });
        $(document).ready(function () {
            $(".option").click(function () {
                $(".option").removeClass("active");
                $(this).addClass("active");
                $(".description").hide(); // Hide all descriptions
                $(this).find(".description").show(); // Show description of clicked image
            });
        });
    </script>
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection