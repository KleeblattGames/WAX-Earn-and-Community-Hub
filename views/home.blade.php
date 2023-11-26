@extends('layouts.app')
@section('title')
{{ __('HOME') }}
@endsection

@section('content')
<script defer src="{{ asset('assets/js/pagination.js') }}"></script>
<script defer src="{{ asset('assets/js/home.js') }}"></script>
<main class="mt-[75px] pt-[100px] main_container px-[8px] pb-[65px]">
    <div class="header_container container">
        <h1 class="heading xl:!leading-[5rem]">
            Complete tasks, experience the ​metaverse and cashout!
        </h1>
        <div class="d-flex gap-3 flex-col lists_container">
            <ul>
                <li class="pt-[2px] xl:pt-[6px]">Highest offerwall payouts - we operate non-profit</li>
                <li class="pt-[2px] xl:pt-[6px]">Go fast and save with instant Wax Blockchain withdrawals</li>
                <li class="pt-[2px] xl:pt-[6px]">A truly active and diverse community</li>
            </ul>
            <div class="flex gap-[25px]  sm:gap-[22px] pt-[20px] xl:pt-[42px]">
                <a class="mybtnLearnMore" href="/earn">visit offerwalls</a>
                <a class="mybtnMore" href="#paragraph_vision">our vision</a>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-between align-items-center video_container gap-10">
        <div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/YOKvfhwmy8c?si=8s41LWDXKvbPVxZh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
        <div class="d-flex flex-column video_text align-items-left gap-3">
            <h1>Lets have fun!</h1>
            <p id="paragraph_vision">Welcome to our Community Earn Hub, the ideal gateway to the Wax multiverse. Whether you are a novice to the WAX blockchain or seeking to earn free WAXP by completing surveys and tasks, everything you need is available in one convenient location. Our platform has been designed by active members of the WAX community who prioritize a fair ecosystem and empower the community with the highest possible rewards for completing surveys, while offering instant withdrawals. </p>
        </div>
    </div>
    <div class="container d-flex flex-column justify-content-center motivation_container">
        <h2>The vision</h2>
        <p id="paragraph3">WAX Hub is a non-profit project funded by labs.wax.io in order to bridge the gap between your desire to explore new and exciting opportunities and regular portals that keep most of the profits from your work. Our concept is twofold: Your Work - Your Profit, with maximum viable payout possible. We will need to keep a small portion of the profits to cover the platform's operational costs. </p>
    </div>
    <div class="container d-flex justify-content-between align-items-center mt-[100px] earth_container">
        <div class="d-flex gap-3 flex-col lists_container">
            <h2 class="xl:!leading-[3rem]">Althrough this is the end of the first page your ourney ust started!</h2>
            <ul>
                <li class="pt-[2px] xl:pt-[6px]">You decide whats next! How about a stylish crypto game? </li>
                <li class="pt-[2px] xl:pt-[6px]">Or some high reward offers?</li>
                <li class="pt-[2px] xl:pt-[6px]">Whatever you decide to do you are always welcome to join us!</li>
            </ul>
            <div class="flex gap-[15px]  sm:gap-[22px] pt-[20px] xl:pt-[42px]">
                <a class="mybtnMore" href="/starter_zone">guide section</a>
            </div>
        </div>
        <div>
            <img src="{{ asset('assets/images/earth.png') }}" alt="earth" />
        </div>
    </div>
</main>
@endsection