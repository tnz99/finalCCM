@extends('components.layout')

@section('header')
    <x-header :dark="$darkThemeFlag" />

@endsection

@section('body_class', 'register-background')

@section('content')
<section class="d-flex justify-content-between register-form-wrapper">
    <div class="register-form-container">
        <h4 class="{{ $darkThemeFlag ? 'text-white' : 'text-black' }} fw-400 ">Dont miss the latest updates!</h4>

        <form class="d-flex flex-column align-items-start register-form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <div class="col-md-6">
                    <input id="name" type="text" class="registration-input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <input id="country" type="text" class="registration-input form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus placeholder="Country">

                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <input id="email" type="email" class="registration-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            
            <div class="d-flex justify-content-center align-item-center form-check form-check-inline">
                <input class="form-check-input form-check-input-box" type="checkbox" id="inlineCheckbox2" value="option2" required>
                <span class="form-check-label check-label-text" for="inlineCheckbox2">
                    I agree with the <span class="terms-condition">terms & conditions </span>
                </span>
            </div>

            <button type="submit" class="register-btn no-underline text-dark register-text">
                {{ __('Register') }}
                <svg class="register-icon" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0001 0C17.5636 0 18.1042 0.222427 18.5026 0.618324L33.3777 15.3961C34.2075 16.2205 34.2075 17.5573 33.3777 18.3817C32.5479 19.206 31.2023 19.206 30.3725 18.3817L19.1251 7.20778V35.8889C19.1251 37.0549 18.1737 38 17.0001 38C15.8264 38 14.875 37.0549 14.875 35.8889V7.20778L3.62762 18.3817C2.79774 19.206 1.45227 19.206 0.622393 18.3817C-0.207464 17.5573 -0.207464 16.2205 0.622393 15.3961L15.4975 0.618324C15.8959 0.222427 16.4365 0 17.0001 0Z" fill="black"/>
                    <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.709422 0.704783 -0.709422 -0.704783 17 12.6667)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                    <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.709422 -0.704783 -0.709422 0.704783 25.5001 27.0222)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                </svg>
            </button>
        </form>

        @if(session('success'))
            <div class="register-success-wrapper">
                <h2 class="register-success-text">Success</h2>
                <p class="register-success-subtext">We will redirect you back to home</p>
            </div>
        @endif
    </div>
</section>
@endsection

@section('nav')
    <x-circular_nav background="the-spring-cnav-bg" inner-border="border-white"/>


@endsection