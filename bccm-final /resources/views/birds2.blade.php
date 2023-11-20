@extends('components.layout')
@section('body_class', 'the-birds2')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section class="story-section">
    <div class="gallery-container">
        <div class="options">
            <div class="option active" style="background: white">
                <div class="image active-image" style="background-image:url('../images/backgrounds/raven.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Raven</div>
                        <div class="sub">Corvus Corax Tibetanus</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
            <div class="image-content scroll">The Raven is the Bhutan's national bird. It represents one of the most powerful deities of the country, Jarog Dongchen. At one time, it was a capital crime to kill a Raven in Bhutan. One can still see ravens nesting in monasteries and dzongs throughout Bhutan. We can spot a raven at Damthang, Cherithang, Jagothang, Lingshi and Chebesa in Western Bhutan; Bumthang, Dur and Pegula in Central Bhutan and Singye Dzong and surrounding areas in Eastern Bhutan.</div>
         </div>
        </div>

        <div class="option" style="background: white">
            <div class="image" style="background-image: url('../images/backgrounds/bird1.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Baer’s Pochard </div>
                        <div class="sub">Aythya baeri</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                    <div class="image-content scroll">The Baer’s Pochard is an extremely rare diving duck. Its head has a dark green gloss, but normally appears as dark brown or black. Their sides have boldly patterned chestnut-and-white shades that are unique among ducks. Can usually find them in Sarpang districts(lowlands large open bodies of water during the winter).</div>
            </div>
        </div>

        

        <div class="option" style="background: white">
            <div class="image" style="background-image: url('../images/backgrounds/bird2.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Black-necked Stork </div>
                        <div class="sub">Ephippiorhynchus asiaticus</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                    <div class="image-content scroll">Black-necked storks are large in size and has a white lower breast and belly. Its bill and legs are red in colour. They have a black beak, black head, and black neck. Found in tropical wetlands and ponds. It have been recorded for the first time in Wangchuck Centennial National Park (WCNP) in Bumthang.</div>
            </div>
        </div>

        <div class="option" style="background: white">
            <div class="image" style="background-image: url('../images/backgrounds/bird3.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Black-necked Crane </div>
                        <div class="sub">Grus nigricollis</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                    <div  class="image-content scroll">The black-necked cranes have a pale body and a black neck, as per the name. On their head is a patch of red skin and they have elongated feathers above their tail.In November every year, the Bhutanese celebrate the Black-necked Crane Festival to create awareness on protecting the endangered black-necked cranes. During the festival, they sing folk songs and perform dances with a black-necked crane theme. School children also stage skits on environmental conservation.</div> 

            </div>
        </div>

        <div class="option" style="background: white">
            <div class="image" style="background-image: url('../images/backgrounds/bird4.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">White-bellied Heron </div>
                        <div class="sub">Ardea insignis</div>
                    </div>
                </div>
              
            </div>
            <div class="description">
                    <div class="image-content scroll">This species of herons are extremely rare. They have dark grey wings, a pale throat patch, and a white belly. Listed as critically endangered on the IUCN Red List since 2007, its total global population is estimated to be only 50-249 adult birds, and numbers are declining even further. White-bellied herons were sighted in 10 locations in the 2021 survey by RSPN Bhutan: six of these were in the Punatsangchhu River basin in western Wangduephodrang district, where 14 individuals were recorded in total. The other four locations were in the Mangdechhu River basin in the central Trongsa district, where eight herons were seen. However, for the first time in 19 years, no white-bellied herons were sighted in the Pochu and Mochu river basins in the Punakha district, which once hosted the biggest and oldest known population in Bhutan.</div>
            </div>
        </div>

        <div class="option" style="background: white">
            <div class="image" style="background-image: url('../images/backgrounds/bird5.png');">
                <div class="label">
                    <div class="info">
                        <div class="main"> Wood Snipe </div>
                        <div class="sub">Gallinago nemoricola</div>
                    </div>
                </div>
            </div>
            <div class="description">
                   <div class="image-content scroll">This is a rare snipe, with intricate black, brown, and white patterns all over its body. You may find them in wet alpine meadows where they breed, or pools and marshes where they spend the winter. They were found in Phobjikha Valley. The Wood Snipe (Gallinago Nemoricola), an endangered species, which used to be found in marshy areas around Thimphu are no more seen today according to the Royal Society for the Protection of Nature.</div>

            </div>
        </div> 
        
        <div class="option" style="background: white">
            <div class="image" style="background-image: url('../images/backgrounds/bird6.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Rufous-necked Hornbill  </div>
                        <div class="sub">Aceros nipalensis</div>
                    </div>
                </div>
              
            </div>
            <div class="description">
                    <div class="image-content scroll">The rufous-necked hornbill has broad dark grooves on its upper beak. It is found out that, it can tolerate or survive certain degree of human disturbances provided there are enough resources available such as potential nesting and food trees in the habitat, according to a study. Males of this species have a reddish-brown head, neck and underparts, whereas its females are black in colour. In Bhutan, Rufous-necked Hornbill is reported from Samtse, Chhukha, Trashigang, Zhemgang, Monggar, SamdrupJongkhar, Sarpang Districts, along PunatshangChhu, and mostly from Wildlife Sanctuaries and National Parks.</div>
            </div>
        </div>
        
        <div class="option" style="background: white">
            <div class="image" style="background-image: url('../images/backgrounds/bird7.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Great Hornbill</div>
                        <div class="sub">Buceros bicornis</div>
                    </div>
                </div>
            </div>
            <div class="description">
                    <div class="image-content scroll">The great hornbill has a large, curved yellow beak. Its black face and wings contrast its white tail, belly, and neck. It is found in undisturbed evergreen forest at up to 2,000 metres. It was found in Royal Manas Park.</div>
            </div>
        </div>

        <div class="option" style="background: white">
            <div class="image" style="background-image: url('../images/backgrounds/bird8.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Eurasian Curlew </div>
                        <div class="sub">Numenius arquata</div>
                    </div>
                </div>
              
            </div>
            <div class="description">
                    <div class="image-content scroll">These are large shorebirds with a brown body, a long curved beak, and mostly white underwings. You may find them in grasslands and marshes. It was found around Punatsangchu and Wangdue Phodrang.</div>
            </div>
        </div>
    


        <div class="option" style="background: white">
            <div class="image" style="background-image: url('../images/backgrounds/bird10.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Ferruginous Duck  </div>
                        <div class="sub">Aythya nyroca</div>
                    </div>
                </div>
               
            </div>
                <div class="description">
                    <div class="image-content scroll">The ferruginous duck has a rich rusty-brown appearance with a white triangular patch under its tail. It also has a peaked crown and a long grey beak. The females are duller and browner than the males. The male has a yellow eye and the females have a dark eye. It is one of the endangered species found in Bhutan near Punatsangchu Area.</div>
                </div>
            </div> 
        </div>

    </div>

    <h1 class="text-black">the BIRDS</h1>
    <x-story-control :links="$links" :next-link="$nextLink" :dark=$darkThemeFlag/>
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection