<header class="header">
    <nav class="header-nav">
        <div class="d-flex align-items-center logo">
            <svg  class="svg-logo" viewBox="0 0 85 58" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_94)">
                    <path fill="{{ $dark ? 'white' : 'black' }}" d="M29.2282 7.70825C28.2489 10.4646 27.2717 13.2209 26.2924 15.9752C24.2354 17.3409 22.1848 18.7149 20.1174 20.0618C14.6413 23.6813 9.88708 29.8216 6.34445 34.8088C3.87319 38.2887 1.36427 50.0438 9.52716 49.5163C12.689 49.2411 15.8466 48.9221 19.0063 48.6093C19.3578 51.5408 19.8077 54.4014 20.7075 57.2266C17.7382 57.2557 14.7689 57.2912 11.7996 57.2808C7.84269 56.991 4.457 53.5945 2.42936 50.4379C-0.93959 45.192 -0.857982 39.3166 3.01317 34.8276C9.34511 27.4864 17.2046 20.0096 24.3317 12.6497C25.9639 11.0025 27.596 9.35539 29.2303 7.70825H29.2282Z" fill="white"/>
                    <path fill="{{ $dark ? 'white' : 'black' }}" d="M43.336 0.0125276C43.359 3.2088 43.382 6.40508 43.4072 9.60136C40.848 9.68267 38.7722 9.95163 36.278 10.5333C30.5612 12.4286 28.9918 24.7633 28.1276 29.2752C27.3199 33.4911 25.7631 47.8774 33.9197 47.3645C37.138 47.2332 40.35 47.1623 43.5704 47.1519C43.562 50.4649 43.5432 53.7779 43.516 57.091C40.5592 57.091 37.6025 57.0993 34.6458 57.1097C22.5343 57.2995 22.3795 37.6402 24.2795 30.3719C26.0079 23.7646 28.5336 16.9905 31.2476 10.5104C32.5324 7.4434 34.0201 2.71675 37.274 1.13425C39.061 0.346125 41.3837 -0.0833815 43.336 0.0125276Z" fill="white"/>
                    <path fill="{{ $dark ? 'white' : 'black' }}" d="M52.2793 57.118C50.6764 57.1097 49.875 57.1055 48.27 57.1013C49.2911 41.7746 48.3704 26.6543 47.3451 11.361C47.2949 10.0767 47.2049 -0.469169 49.8227 0.867304C52.6957 2.33513 53.9219 9.08838 55.0016 12.6454C58.8079 24.3129 64.4744 35.1986 66.0103 47.4875C66.1715 48.8761 66.5272 49.7684 67.1759 49.8247C67.8957 49.8873 68.603 48.7968 68.7055 46.9913C68.9608 36.3912 64.918 27.5842 61.1348 17.8995C60.3668 15.8041 58.3099 12.1742 59.2222 10.0975C59.4503 10.2872 59.7119 10.4749 59.9086 10.6646C62.7983 13.4543 65.1922 17.6702 67.7848 21.1646C72.1916 26.9421 77.9921 32.0836 81.9176 38.1551C84.709 42.4731 86.653 49.047 82.9681 53.4693C81.836 54.5472 81.1832 55.0205 79.7435 55.7586C86.2784 43.551 71.5534 29.7172 65.619 20.5349C64.8574 19.3486 64.1522 18.3707 63.7379 18.0809C63.2796 17.7577 63.4324 18.5146 64.194 20.0867C68.6427 29.2752 73.3383 37.3586 72.9575 47.8628C72.3611 51.8784 70.4569 57.9582 65.4056 57.9999C61.3922 58.0354 61.8086 50.9694 61.6307 48.5091C60.3417 35.9909 55.7131 24.5631 52.4006 12.5161C52.0114 11.1171 51.5532 10.0329 51.1263 9.86191C50.6011 9.64924 50.3876 10.7168 50.6178 12.6162C52.4362 27.578 54.0286 42.0436 52.273 57.1159L52.2793 57.118Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_1_94">
                    <rect width="85" height="58" fill="white"/>
                    </clipPath>
                </defs>
            </svg>

            <div class="{{ $dark ? 'text-white' : 'text-black' }} logo-text-wrapper">
                <p class="text-uppercase logo-text">bhutan</p>
                <p class="text-uppercase logo-text">climate change</p>
                <p class="text-uppercase logo-text">museum</p>
            </div>
        </div>

        <ul class="header-nav-list">
            <li class="text-uppercase"><a class="no-underline {{ $dark ? 'text-white' : 'text-black' }} nav-list-link" href="/">home</a></li>
            <li class="text-uppercase"><a class="no-underline {{ $dark ? 'text-white' : 'text-black' }} nav-list-link" href="/about">about</a></li>
            <li class="text-uppercase"><a class="no-underline {{ $dark ? 'text-white' : 'text-black' }} nav-list-link" href="/the-newsE">news & events</a></li>
            <li class="text-uppercase"><a class="no-underline {{ $dark ? 'text-white' : 'text-black' }} nav-list-link" href="/contact">contact</a></li>
            
            <button id="close-nav" type="button" class="close menu-icon close-nav-icon" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <li class="mt-n10">
                <div class="custom-audio">
                    <audio id="audio" src="{{ asset('audios/a1.m4a') }}" preload="auto"></audio>
                    <button id="play-pause-button" class="play"></button>
                </div>
            </li>
        </ul>
    </nav>

    <div id="open-menu" class="menu-icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="menu-icon-svg" viewBox="0 0 40 40">
            <path d="M6.875 12.5H33.125" stroke="{{ $dark ? 'white' : 'black' }}" stroke-opacity="0.8" stroke-width="4"/>
            <path d="M6.875 20H33.125" stroke="{{ $dark ? 'white' : 'black' }}" stroke-opacity="0.8" stroke-width="4"/>
            <path d="M6.875 27.5H33.125" stroke="{{ $dark ? 'white' : 'black' }}" stroke-opacity="0.8" stroke-width="4"/>
        </svg>
    <div>
</header>
