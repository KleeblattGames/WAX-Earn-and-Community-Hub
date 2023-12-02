@extends('layouts.app')
@section('title')
{{ __('HOME') }}
@endsection

@section('content')


<main class="mt-[75px] pt-[100px] main_container px-[8px] pb-[65px]">
    <div class="header_container container">
@mobile
<p class="alert alert-success sm:text-sm md:text-base text-black text_shadow !leading-[2rem]"><strong>Attention: mobile device detected!</strong><br>Please expect mobile compatibility issues with our portal during closed beta. It is recommended to use a desktop browser.  However you can still visit our Hub with your mobile device.<br>                     
@endmobile
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
        <div class="d-flex flex-column video_text  gap-3">
            <h1>Lets have fun!</h1>
            <div class="text-left" style="display: inline-block;" >
                <p id="paragraph_vision text-left ">Welcome to our Community Earn Hub, the ideal gateway to the Wax multiverse. Whether you are a novice to the WAX blockchain or seeking to earn free WAXP by completing surveys and tasks.</p>
            </div>
        </div>
    </div>
    <div class="container d-flex flex-column justify-content-center motivation_container">
        <h2>Our vision</h2>
        <p id="paragraph3">“Our platform <strong>prioritizes a fair ecosystem</strong> and empowers the community with the highest possible payouts. All <strong>profits generated are returned to the community</strong>, with only a small portion kept to cover operational costs. Any <strong>additional earnings</strong> not directly awarded to users are <strong>distributed once a week among all active $KLEE stakers</strong> on the Hub.”</p>
    </div>
    <div class="container d-flex justify-content-between align-items-center mt-[100px] earth_container">
        <div class="d-flex gap-3 flex-col lists_container">
            <h2 class="xl:!leading-[3rem]">Althrough this is the end of the first page your ourney ust started!</h2>
            <ul>
                <li class="pt-[2px] xl:pt-[6px]">You decide whats next! How about a small crypto adventure?</li>
                <li class="pt-[2px] xl:pt-[6px]">Or some high reward tasks?</li>
                <li class="pt-[2px] xl:pt-[6px]">Whatever you decide to do you are always welcome to join us!</li>
            </ul>
            <div class="flex gap-[15px]  sm:gap-[22px] pt-[20px] xl:pt-[42px]">
                <a class="mybtnMore" href="/starter_zone">start your adventure...</a>
            </div>
        </div>
        <div>
            <img src="{{ asset('assets/images/earth.png') }}" alt="earth" />
        </div>
    </div>
</main>
@endsection