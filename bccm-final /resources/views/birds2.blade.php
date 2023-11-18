@extends('components.layout')
@section('body_class', 'the-birds2')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section>
    <div class="gallery-container">
        <div class="options">
            <div class="option active" style="background: white">
                <div class="image" style="background-image:url('../images/backgrounds/raven.png');">
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
                <ul class="image-content scroll">
                    <div></div>
  
                </ul>
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
                <ul class="image-content scroll">
                    <div></div>
                </ul>
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
                <ul class="image-content scroll">
                    <div></div>
                </ul>    

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
                <ul class="image-content scroll">
                    <div></div>
                </ul>
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
                <ul class="image-content scroll">
                   <div></div>
                </ul>
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
                <ul class="image-content scroll">
                    <div></div>
                </ul>
            </div>
        </div>
        
        <div class="option" style="background: white">
            <div class="image" style="background-image: url('../images/backgrounds/bird7.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">       Great Hornbill  </div>
                        <div class="sub">Buceros bicornis</div>
                    </div>
                </div>
            </div>
            <div class="description">
                <ul class="image-content scroll">
                    <div></div>
                </ul>
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
                <ul class="image-content scroll">
                    <div></div>
                </ul>
            </div>
        </div>
    

        <div class="option" style="background: white">
            <div class="image" style="background-image: url('../images/backgrounds/bird9.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Black-necked Stork </div>
                        <div class="sub">Apus acuticauda</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll">
                    <div></div>
                </ul>
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
                <ul class="image-content scroll">
                    <div></div>
                </ul>
            </div>
        </div> 
</div>

        <div>
            <h1 class="text-black">the BIRDS</h1>
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