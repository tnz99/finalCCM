@extends('components.layout')
@section('body_class', 'the-people2')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')
<section class="story-section">
    <div class="gallery-container">
        <div class="options">
            <div class="option active" style="background: #0E4A47; opacity: 0.7; ">
                <div class="image active-image" style="background-image:url('../images/backgrounds/plantation.webp');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Bhutan Celebrates Newborn Prince by Planting 108,000 Trees</div>
                        
                        </div>
                    </div>

                </div>
                <div class="description">
                    <div class="image-content scroll text-white">Tens of thousands of citizens in Bhutan celebrated Prince Jigme Namgyel Wangchuck's birth by planting 108,000 tree saplings, each symbolizing longevity, health, beauty, and compassion in Buddhism. The initiative, known as Tendrel, involved all 82,000 households in the country and 26,000 trees planted by volunteers. Each sapling carries a prayer and wish for the prince's health and wisdom. Bhutan's deep connection with trees is rooted in Buddhism, where trees are seen as providers of life. In 2015, Bhutan set a Guinness World Record by planting nearly 50,000 trees in just one hour.</div>
                </div>
            </div>

            <div class="option" style="background: #0E4A47; opacity: 0.7;">
                <div class="image" style="background-image: url('../images/backgrounds/flower.jpeg');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Royal Bhutan Flower Exhibition</div>
                           
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">The Royal Bhutan Flower Exhibition is an annual event initiated by the Ministry of Agriculture and Forests, following a Royal Command, aimed at fostering appreciation for beautiful spaces and promoting horticulture and floriculture-based economy. It was first held in 2015 and is of national significance, aligned with the vision of making Bhutan a clean, safe, well-organized, and beautiful place. The exhibition showcases Bhutan's rich flora and fauna through creative flower installations and models of historic Bhutanese structures like Taktshang monastery and Punakha dzong.</div>
                </div>
            </div>

            <div class="option" style="background: #0E4A47; opacity: 0.7;">
                <div class="image" style="background-image: url('../images/backgrounds/ozon.jpeg');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Ozone layer celebration </div>
                            
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">On September 16, 2019, Bhutan marked World Ozone Day with the theme "32 Years and Healing." The celebration took place nationwide in collaboration with Dzongkhag Officials, 
                        Scouts Associations, and Students. The main objectives were to raise mass awareness about this important issue, especially in remote areas, and to emphasize the involvement 
                        of students in spreading the message. The National Ozone Unit and National Environment Commission Secretariat provided technical and financial support for the event, including 
                        information materials and training for Scout Students to develop awareness materials in the week leading up to World Ozone Day.</div>
                </div>
            </div>

            <div class="option" style="background: #0E4A47; opacity: 0.7;">
                <div class="image" style="background-image: url('../images/backgrounds/forestry.jpeg');">
                    <div class="label">
                        <div class="info">
                            <div class="main">June 2 Social Forestry Day</div>
                        
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">
                    Every year on June 2nd, Bhutan celebrates Social Forestry Day, a nationwide event dedicated to environmental protection and fighting climate change. Communities come together to plant trees, symbolizing their commitment to preserving nature. This event involves the government, local organizations, schools, and individuals, highlighting Bhutan's dedication to environmental stewardship. Through tree planting and related activities, Bhutan emphasizes environmental responsibility, emphasizing trees' role in carbon sequestration, biodiversity promotion, and ecological balance maintenance. This annual celebration showcases Bhutan's commitment to leading in environmental conservation for a sustainable future.
                    </div>
                </div>
            </div>

            <div class="option"  style="background: #0E4A47; opacity: 0.7;">>
                <div class="image" style="background-image: url('../images/backgrounds/earthhour.jpeg');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Bhutan celebrating earth hour</div>
                           
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">Bhutan participated in Earth Hour, a global event promoting nature conservation, in 2012, with various groups, schools, and residents participating. The event, organized by the National Environment Commission and the World Wildlife Fund, aimed to raise awareness about waste reduction and environmental issues. Bhutan's participation in this hour of darkness demonstrates its commitment to fostering a more sustainable</div>
                </div>
            </div>

            
 
        </div>

       
    </div>
    <h1 class="text-white">the PEOPLE</h1>


    <x-story-control :links="$links" :next-link="$nextLink" :dark=$darkThemeFlag/>
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection