@extends('components.layout')

@section('body_class', 'the-kingdom')

@section('header')
    <x-header :dark=true />
@endsection

@section('content')
<section class="d-flex" style="justify-content: center; gap: 12%; margin-top: 12%;">
    <div class="">
        <div class="d-flex flex-column" style="justify-content: center; align-items: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="54" viewBox="0 0 75 54" fill="none">
                <path d="M9.08333 2H65.75C69.6458 2 72.8333 4.775 72.8333 8.16667V45.1667C72.8333 48.5583 69.6458 51.3333 65.75 51.3333H9.08333C5.1875 51.3333 2 48.5583 2 45.1667V8.16667C2 4.775 5.1875 2 9.08333 2Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M72.8333 8.16675L37.4167 29.7501L2 8.16675" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h3 class="text-white lh-normal font-normal fs-24 fw-70" style="margin-top: 12%;">Email</h3>
        </div>
        <p class="fs-36 font-normal lh-normal fw-700 text-white">email@gmail.com</p>
    </div>
    <div class="">
        <div class="d-flex flex-column" style="justify-content: center; align-items: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="54" viewBox="0 0 67 82" fill="none">
                <path d="M65 33.9091C65 58.7273 33.5 80 33.5 80C33.5 80 2 58.7273 2 33.9091C2 25.4463 5.31874 17.3301 11.2261 11.346C17.1335 5.36184 25.1457 2 33.5 2C41.8543 2 49.8665 5.36184 55.7739 11.346C61.6813 17.3301 65 25.4463 65 33.9091Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M33.5 49.0342C39.299 49.0342 44 44.2721 44 38.3978C44 32.5235 39.299 27.7615 33.5 27.7615C27.701 27.7615 23 32.5235 23 38.3978C23 44.2721 27.701 49.0342 33.5 49.0342Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h3 class="text-white lh-normal font-normal fs-24 fw-70" style="margin-top: 12%;">Location</h3>
        </div>
        <p class="fs-36 font-normal lh-normal fw-700 text-white">Thimphu, Bhutan</p>
    </div>     
    <div class="">
        <div class="d-flex flex-column" style="justify-content: center; align-items: center;">
            <img src="../images/social.png" />
            <h3 class="text-white lh-normal font-normal fs-24 fw-70" style="margin-top: 12%;">Social</h3>
        </div>
    </div>
</section>
@endsection
