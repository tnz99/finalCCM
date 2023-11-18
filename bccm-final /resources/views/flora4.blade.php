@extends('components.layout')
@section('body_class', 'the-flora4')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section>
    <div class="gallery-container">
        <div class="options">
            <div class="option active">
                <div class="image" style="background-image:url('../images/backgrounds/orc1.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Scientific name</div>
                        <div class="sub">Bulbophyllum punakhaense.</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
            <div class="image-content scroll">In Bhutan, there are 487 species of (recorded) orchids, one of the richest orchid habitats in the world. Out of this large number, 82 species of orchids are endemic to the country.</div>
         </div>
        </div>

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/orc2.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Scientific name</div>
                        <div class="sub">Bulbophyllum gurungianum</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <div class="image-content scroll">In Bhutan, there are 487 species of (recorded) orchids, one of the richest orchid habitats in the world. Out of this large number, 82 species of orchids are endemic to the country.</div>
            </div>
        </div>

        

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/orc3.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Scientific name</div>
                        <div class="sub">Chiloschista densiflora</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <div class="image-content scroll">In Bhutan, there are 487 species of (recorded) orchids, one of the richest orchid habitats in the world. Out of this large number, 82 species of orchids are endemic to the country.</div>
            </div>
        </div>

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/orc4.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Scientific name</div>
                        <div class="sub">Paphiopedilum fairrieanum</div>
                    </div>
                </div>
              
            </div>
            <div class="description">
                <div class="image-content scroll">In Bhutan, there are 487 species of (recorded) orchids, one of the richest orchid habitats in the world. Out of this large number, 82 species of orchids are endemic to the country.</div>
            </div>
        </div>

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/orc5.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Scientific name</div>
                        <div class="sub">Pleione praecox (Sm.) D.Don</div>
                    </div>
                </div>
               
            </div>
            <div class="description" >
                <div class="image-content scroll">In Bhutan, there are 487 species of (recorded) orchids, one of the richest orchid habitats in the world. Out of this large number, 82 species of orchids are endemic to the country.</div>
            </div>
        </div>

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/orc6.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Scientific name</div>
                        <div class="sub">Acampe rigida (Buch.-Ham. ex Sm.) P.F.Hunt</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <div class="image-content scroll">In Bhutan, there are 487 species of (recorded) orchids, one of the richest orchid habitats in the world. Out of this large number, 82 species of orchids are endemic to the country.</div>
            </div>
        </div>

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/orc7.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Scientific name</div>
                        <div class="sub">Calanthe plantaginea Lindl. 1833</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <div class="image-content scroll">In Bhutan, there are 487 species of (recorded) orchids, one of the richest orchid habitats in the world. Out of this large number, 82 species of orchids are endemic to the country.</div>
            </div>
        </div>
        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/orc8.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Scientific name
                        </div>
                        <div class="sub"> vanda striata Rchb.f.</div>
                       
                    </div>
                </div>
                
            </div>
            <div class="description">
                <div class="image-content scroll">In Bhutan, there are 487 species of (recorded) orchids, one of the richest orchid habitats in the world. Out of this large number, 82 species of orchids are endemic to the country.</div>
            </div>
        </div>
           
            <!-- <div class="option" style="--optionBackground: url('../images/backgrounds/king.jpeg');">
            </div>
            <div class="option" style="--optionBackground: url('../images/backgrounds/queen2.jpeg') center/cover no-repeat;">
            </div> -->
          
            
        </div>

        <div>
            <h1 class="text-white">the Orchid</h1>
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