@extends('components.layout')
@section('body_class', $bodyClass)
@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection
@section('content')
<div class="d-flex flex-column">
    <div id="main-section" class="d-flex justify-content-start year-story-wrapper">
        <div class="year-story-header">
            <div class="p-0">
                <h2 class="text-black fw-700 year-story-header-year">{{ $year }}</h2>
                <p class="year-story-header-subtext">{{ $subtext }}</p>
            </div>
        </div>
        
        <ul class="year-story-content">
            {{ $story }}
        </ul>
    </div>

    <ul class="year-nav-list">
        <li class="year-nav-list-item"><a href="/laws/1999" class="spin-button year-nav-link">1999</a></li>
        <li class="year-nav-list-item"><a href="/laws/2000" class="spin-button year-nav-link">2000</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2001</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2002</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2003</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2004</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2005</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2006</a></li>
        <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2007</a></li>
    </ul>

    <x-story-control :links="$links" :next-link="$nextLink"/>
</div>

<img id="prayer-wheel" src="{{ asset('/images/prayer-wheel/1.png') }}" alt="prayer wheel" class="prayer-wheel-position prayer-wheel"  >
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background=$cnavBg :inner-border=$cnavInnerBorder/>
@endsection
