@extends('components.layout')
@section('body_class', 'the-mammals2')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section>
    <div class="gallery-container">
        <div class="options">
            <div class="option active" style="background: #eab676">
                <div class="image" style="background-image:url('../images/backgrounds/takin.png');">
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
                <ul class="image-content scroll">
                    <div>Geei's Golden Langur or simply the Golden Langur is a species of primate and an endangered mammal endemic to the Assam and central valleys in Bhutan.</div>
                </ul>
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
                <ul class="image-content scroll">
                    <div></div>
                </ul>    

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
                <ul class="image-content scroll">
                    <div></div>
                </ul>
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
                <ul class="image-content scroll">
                   <div>Bhutan is one of the 12 countries in Asia that harbor endangered Snow leopard population in its natural habitat. The presence of 134 snow leopards has been confirmed in Bhutan by the National Snow Leopard Survey 2022-2023</div>
                </ul>
            </div>
        </div>

       
           
            <!-- <div class="option" style="--optionBackground: url('../images/backgrounds/king.jpeg');">
            </div>
            <div class="option" style="--optionBackground: url('../images/backgrounds/queen2.jpeg') center/cover no-repeat;">
            </div> -->
          
            
        </div>

        <div>
            <h1 class="text-white">the MAMMALS</h1>
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