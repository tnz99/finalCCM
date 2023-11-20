@extends('components.layout')
@section('body_class', 'the-mammals2')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section class="story-section">
    <div class="gallery-container">
        <div class="options">
            <div class="option active" style="background: #eab676">
                <div class="image active-image" style="background-image:url('../images/backgrounds/takin.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Takin</div>
                        <div class="sub">Burdorcas Taxicolor</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
            <div class="image-content scroll">the Takin (Burdorcas Taxicolor) holds the esteemed position of being Bhutan's national animal, thanks to its deep-rooted connection with Bhutanese religious history and mythology. According to legend, in the 15th century, the Tibetan saint Drukpa Kunley, famously known as "Divine Madman," is said to have created this extraordinary creature. The Takin is a robust and fur-covered animal, possessing a unique appearance that combines elements of both a cow and a goat. It is cherished by the Bhutanese people as one of the country's national symbols, owing to its distinctive characteristics and its significant role in Bhutanese culture and heritage.</div>
         </div>
        </div>

        <div class="option" style="background: #eab676">
            <div class="image" style="background-image: url('../images/backgrounds/tiger.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Tiger </div>
                        <div class="sub">Panthera Tigris Tigris</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll">
                    <div>Bhutan is among the 13 countries that still harbor tiger populations. A recent survey conducted in 2021 and 2022 revealed an estimated 131 tigers in this eastern Himalayan nation. These tigers are classified as endangered and have been spotted at elevations ranging from 150 meters to an impressive 4,200 meters above sea level.</div>
  
                </ul>
            </div>
        </div>

        

        <div class="option" style="background: #eab676">
            <div class="image" style="background-image: url('../images/backgrounds/golden.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Golden Langur </div>
                        <div class="sub">Trachypithecus geei</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                    <div class="image-content scroll">Geei's Golden Langur or simply the Golden Langur is a species of primate and an endangered mammal endemic to the Assam and central valleys in Bhutan.</div>
            </div>
        </div>

        <div class="option" style="background: #eab676">
            <div class="image" style="background-image: url('../images/backgrounds/langur.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Hanuman Langur</div>
                        <div class="sub">Semnopithecus entellus</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                    <div class="image-content scroll">Largest of all the langurs of Bhutan, the Grey or Hanuman Langur is found only west of the Sunkosh River and west of the Pelela range in Bhutan. The subspecies in the Himalayas have been called the Himalayan Langur with their distinctive white heads, thick grey coats, and large body size. Their feet, hands, face, and ears are black, and their face is framed with white fur. Their tail is usually longer than the body, with a white tip. Infants are born with fine, dark brown or black fur. Their skin is pale, but darkens to black by three months old. They are sexually dimorphic, with males being slightly larger than females. Males weigh about 13 kg and females weigh about 9.9 kg. Excluding their tail, males are about 64 cm long, and females are about 58.5 cm long. Male Hanuman langur tails average 91.0 cm and those of females average 86 cm. They have 32 teeth. Hanuman langurs are found in a wide variety of habitats, ranging from arid to tropical evergreen rainforests.</div>
            </div>
        </div>

        <div class="option" style="background: #eab676">
            <div class="image" style="background-image: url('../images/backgrounds/langur2.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Capped langur</div>
                        <div class="sub">Trachypithecus pileatus</div>
                    </div>
                </div>
              
            </div>
            <div class="description">
                    <div class="image-content scroll">The capped langur has been recorded in eight of the 20 dzongkhags of Bhutan. A common primate of eastern Bhutan, recorded it between 100 and a little more than 2,600 m above sea level. Capped Langurs are predominantly arboreal and usually found leaping through the forest canopy where they also forage, rest, feed and play. They are a vocal species and have several different calls within their repertoire. These primates are diurnal and mostly folivorous – they are most active during the day and their diet mainly consists of leaves. They live in groups made up of roughly seven females and one male, and females often share the responsibility of looking after each other’s infants.</div>
            </div>
        </div>

        <div class="option" style="background: #eab676">
            <div class="image" style="background-image: url('../images/backgrounds/leopard.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Snow Leopard </div>
                        <div class="sub">Panthera uncia</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                   <div class="image-content scroll">Bhutan is one of the 12 countries in Asia that harbor endangered Snow leopard population in its natural habitat. The presence of 134 snow leopards has been confirmed in Bhutan by the National Snow Leopard Survey 2022-2023</div>
            </div>
        </div>
          
            
        </div>

    </div>

    <h1 class="text-white">the MAMMALS</h1>
    <x-story-control :links="$links" :next-link="$nextLink" :dark=$darkThemeFlag/>
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection