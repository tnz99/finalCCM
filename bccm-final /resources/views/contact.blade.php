@extends('components.layout')
@section('body_class',$bodyClass,)
@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section class="d-flex flex-column z-3 story-section">
    <div class="{{ $darkThemeFlag ? 'text-white' : 'text-black' }} story-header">
        <h2 class="story-header-text">we are</h2>
        <h2 class="story-header-text">{{ $name }}</h2>
        <p class="story-header-description">{{ $description }}</p>
        <div class= "containerfb">
        
        <div class= "fb-div"><img class= "fb" src="../images/backgrounds/fb.png" alt="img"/></div>
        <div class= "fb-div"><img class= "ig" src="../images/backgrounds/ig.png" alt="img"/></div>
        <div class= "fb-div"><img class= "email" src="../images/backgrounds/email.png" alt="img"/></div>

    </div>
</div>

   
   
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
   
@endsection