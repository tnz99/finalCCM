@extends('components.layout')
@section('body_class', 'home')
@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection
@section('content')
<div id="fog">
<section class="d-flex justify-content-between home-wrapper">
    <div class="home-main-content">
        <h2 class="home-header-text">Bhutan Believe:</h2>
        <h1 class="home-header-subtext">A Climate</h1>
        <h1 class="home-header-subtext">Change Odyssey</h1>

        <button id='rotate-icon'class="register-btn" type="submit">
            <a href="/register" class="no-underline text-dark register-text">Register</a>
            <svg class="register-icon" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0001 0C17.5636 0 18.1042 0.222427 18.5026 0.618324L33.3777 15.3961C34.2075 16.2205 34.2075 17.5573 33.3777 18.3817C32.5479 19.206 31.2023 19.206 30.3725 18.3817L19.1251 7.20778V35.8889C19.1251 37.0549 18.1737 38 17.0001 38C15.8264 38 14.875 37.0549 14.875 35.8889V7.20778L3.62762 18.3817C2.79774 19.206 1.45227 19.206 0.622393 18.3817C-0.207464 17.5573 -0.207464 16.2205 0.622393 15.3961L15.4975 0.618324C15.8959 0.222427 16.4365 0 17.0001 0Z" fill="black"/>
                <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.709422 0.704783 -0.709422 -0.704783 17 12.6667)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.709422 -0.704783 -0.709422 0.704783 25.5001 27.0222)" stroke="black" stroke-width="4" stroke-linecap="round"/>
            </svg>
        </button>
    </div>
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <!-- <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/> -->
    <x-circular_nav background="the-climate-cnav-bg" inner-border="border-white"/>
@endsection
</div>