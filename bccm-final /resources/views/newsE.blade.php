@extends('components.layout')
@section('body_class', 'the-newsE')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section class="story-section">
    <div class="gallery-container">
        <div class="options">
            <div class="option active" style="background:   #DA8495; opacity: 0.7;">
                <div class="image active-image" style="background-image:url('../images/backgrounds/about.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">ClimateAction360</div>
                        <div class="sub">Empowering Change for a Sustainable Tomorrow</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
            <div class="image-content scroll text-white">Join us for 'ClimateAction360,' an event dedicated to raising awareness about climate change. Engage with expert speakers, discussions, and presentations to inspire change for a sustainable future. Let's make a difference together!</div>
         </div>
        </div>

        <div class="option" style="background:   #DA8495; opacity: 0.7;">
            <div class="image" style="background-image: url('../images/backgrounds/about.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">GreenImpact Summit </div>
                        <div class="sub">Shaping a Sustainable Future!</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>Explore climate change challenges and solutions with experts. Join us for an impactful event inspiring positive environmental action!</div>
  
                </ul>
            </div>
        </div>
        <div class="option" style="background:   #DA8495; opacity: 0.7;">
            <div class="image" style="background-image: url('../images/backgrounds/about.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">GreenImpact Summit </div>
                        <div class="sub">Shaping a Sustainable Future!</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>Explore climate change challenges and solutions with experts. Join us for an impactful event inspiring positive environmental action!</div>
  
                </ul>
            </div>
        </div>
        <div class="option" style="background:   #DA8495; opacity: 0.7;">
            <div class="image" style="background-image: url('../images/backgrounds/about.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">GreenImpact Summit </div>
                        <div class="sub">Shaping a Sustainable Future!</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>Explore climate change challenges and solutions with experts. Join us for an impactful event inspiring positive environmental action!</div>
  
                </ul>
            </div>
        </div>

        

       
          
            
        </div>

    </div>

    <h1 class="text-white">the NEWS & EVENTS</h1>
    
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection