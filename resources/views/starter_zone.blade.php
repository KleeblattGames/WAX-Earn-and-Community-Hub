@extends('layouts.app')
@section('title')
{{ __('STARTER ZONE') }}
@endsection

@section('content')
<main class="starter_zone_container px-[8px]">
    <div class="container pt-[120px] pb-[50px] lg:pb-[112px] lg:pt-[150px]">
        <div class="justify-content-center border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-[40px] md:mb-[88px] blurred_back p-3">
            <div class="w-full rounded-[17px] bg-[#131313] elipse_background p-[16px] lg:px-[40px]] lg:py-[33px]">
                <h1 class="text-center text-lg sm:text-[24px] lg:text-[40px] pb-[20px] lg:pb-[68px]">
                    {{ __("Community Hub") }}
                </h1>
                <div class="flex flex-col gap-[28px]">
                    <div class="flex flex-col gap-[28px]">
                        <div class="flex flex-col gap-[28px] md:gap-[33px] justify-center items-center lg:items-end lg:flex-row">
                        <p class="alert alert-success sm:text-sm md:text-base text-black text_shadow !leading-[2rem]">Closed Beta Notification:<br> Some functions are limited during Closed Beta. The Community Hub aims to offer a seamless metaverse exploration experience by providing user-engaging rewards mixed with smart content to reduce friction.<br>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-[0px] lg:gap-[32px]">
                        <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back h-auto sm:h-[254px] p-[14px]">
                            <div class="mini_ellipse w-full h-full  rounded-[17px] px-4 py-3 md:py-[35px] flex flex-col gap-[12px]">
                                <h3 class="text-lg sm:text-[20px] md:text-[24px] font-bold text-center text-white">latest news</h3>
                                <a class="twitter-timeline" data-width="100%" data-height="500" href="https://twitter.com/WAX_io?ref_src=twsrc%5Etfw">Tweets by WAX_io</a>   
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
                        <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back h-auto sm:h-[254px] p-[14px]">
                            <div class="mini_ellipse w-full h-full bg-[#131313] rounded-[17px] px-4 py-3 md:py-[35px] flex flex-col gap-[12px]">
                                <h3 class="text-lg sm:text-[20px] md:text-[24px] font-bold text-center text-white">learn & earn adventure</h3>         


                                <div class="w-full flex justify-evenly flex-col items-start light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px]" style="padding-left: 10px;">
  <p class="text-white text-left text_shadow text-xs sm:text-sm md:text-base leading-[1.2rem] md:leading-[1.7rem]">Complete tasks to progress your hub adventure. Completing all chapters will unlock exclusive rewards on your profile page. </p>
  <p class="text-white text-left text_shadow text-xs sm:text-sm md:text-base leading-[1.2rem] md:leading-[1.7rem]"><strong>Finish CHAPTER 1 and RECEIVE 20.0000 WAXP.</strong></p>
</div>


                                <h3 class="text-lg sm:text-[20px] md:text-[24px] font-bold text-center text-white">start adventure - complete tasks</h3>         
                                            <div class="d-flex  flex-col lists_container"><ul>
                                                <li class="pt-[2px] xl:pt-[6px] text-white  text-left ">
                                                    <img src="assets/images/secret.png" style="vertical-align: middle; display: inline-block;" />
                                                    <a href="https://medium.com/wax-io/what-is-wax-your-gateway-to-the-nft-ecosystem-explained-2ee913372753" style="display: inline-block;">TASK 1: read this medium wax intro</a>
                                               
                                                </li>
                                                <li class="pt-[2px] xl:pt-[6px] text-white  text-left ">
                                                    <img src="assets/images/secret.png" style="vertical-align: middle; display: inline-block;" />
                                                    <a href="https://www.youtube.com/watch?v=D2KRmfNEIM8&t=223s">TASK 2: watch "cloud wallet beginner's guide" video </a>
                                                   
                                                </li>
                                                <li class="pt-[2px] xl:pt-[6px] text-white  text-left ">
                                                    <img src="assets/images/secret.png" style="vertical-align: middle; display: inline-block;" />
                                                    <a href="https://www.mycloudwallet.com/">TASK 3: create your own Wax MyCloudWallet</a>
                                                 
                                                </li>
                                                <li class="pt-[2px] xl:pt-[6px] text-white  text-left ">
                                                    <img src="assets/images/secret.png" style="vertical-align: middle; display: inline-block;" />
                                                    <a href="https://gaming.amazon.com/dp/amzn1.pg.item.63dd94bb-dde7-49a4-b72c-05f2b242aa0a?ingress=amzn">TASK 4: claim your exclusive brawlers.gg NFT</a><
                                                   
                                                </li>
                                                <li class="pt-[2px] xl:pt-[6px] text-white  text-left ">
                                                    <img src="assets/images/secret.png" style="vertical-align: middle; display: inline-block;" />
                                                    <a href="https://medium.com/@taco.wax/taco-nft-start-guide-crypto-aa6ecb6bf877">TASK 5: get to know about the Taco Universe</a>
                                                 
                                                </li>
                                                <li class="pt-[2px] xl:pt-[6px] text-white  text-left ">
                                                    <img src="assets/images/secret.png" style="vertical-align: middle; display: inline-block;" />
                                                    <a href="https://play.google.com/store/apps/details?id=io.tacocrypto.app">TASK 6 Android: install TACO APP & claim free taco</a>
                                         
                                                </li>
                                                <li class="pt-[2px] xl:pt-[6px] text-white  text-left ">
                                                    <img src="assets/images/secret.png" style="vertical-align: middle; display: inline-block;" />
                                                    <a href="https://apps.apple.com/app/taco-wax-utility-tools/id1569255815">TASK 6 IOS: install TACO APP & claim free taco</a>
                                                 
                                                </li>
                                                <li class="pt-[2px] xl:pt-[6px] text-white  text-left ">
                                                    <img src="assets/images/secret.png" style="vertical-align: middle; display: inline-block;" />
                                                    <a href=""><strong>CHAPTER 1 - QUIZ - UNLOCK 20.000 WAXP</strong></a>
                                                  
                                                </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="justify-content-center border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-[40px] md:mb-[88px] blurred_back p-3">
            <div class="w-full rounded-[17px] bg-[#131313] elipse_background p-[16px] lg:px-[40px]] lg:py-[33px]">
                <h1 class="text-center text-lg sm:text-[24px] lg:text-[40px] pb-[20px] lg:pb-[68px]">
                    {{ __("Three dapps you will enjoy ;)") }}
                </h1>
                <div>

                <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back sm:h-[254px] p-[14px]">
                    <div class="w-full flex justify-evenly flex-col sm:flex-row py-[14px] px-[20px] md:px-[40px] lg:px-[70px] lg:py-[22px] items-start light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px]">
                        <a class="ranking_txt flex items-center w-3/4 w-full text-xs sm:text-sm md:text-base text-white text_shadow leading-[1.5rem] sm:!leading-[2rem]">Alcor is a lego of decentralized finance built on multi-chain, and a provider of solutions in one tap. The first place to be if you need to exchange your WAXP to other tokens. We recommend a visit even if you dont need any token exchanged you can buy crypto or use theire token bridge.</a>
                        <div class="ranking_img flex justify-center items-center w-full  sm:max-w-[358px] sm:max-h-[182px]">
                            <a href="https://alcor.exchange/"><img src="{{ asset('assets/images/game/dapp_rank_1.png') }}" class="w-full rounded-[20px] object-cover" alt="rank_dapp"></a>
                        </div>
                    </div>
                </div>








                    <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back sm:h-[254px] p-[14px]">
                        <div class="w-full flex justify-evenly flex-col sm:flex-row py-[14px] px-[20px] md:px-[40px] lg:px-[70px] lg:py-[22px] items-start light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px]">
                            <div class="ranking_img flex justify-center items-center w-full h-full sm:max-w-[358px] sm:max-h-[182px]">
                            <a href="https://atomicmarket.io/"><img src="{{ asset('assets/images/game/dapp_rank_2.png') }}" class="w-full rounded-[20px] object-cover h-full" alt="rank_dapp"></a>
                            </div>
                            <div class="ranking_txt flex items-center w-3/4 w-full text-xs sm:text-sm md:text-base text-white text_shadow leading-[1.5rem] sm:!leading-[2rem]">AtomicHub is the leading Web3 platform for buying, selling, trading and creating NFTs that’s used by millions around the world.</div>
                        </div>
                    </div>
                    <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back sm:h-[254px] p-[14px]">
                    <div class="w-full flex justify-evenly flex-col sm:flex-row py-[14px] px-[20px] md:px-[40px] lg:px-[70px] lg:py-[22px] items-start light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px]">
                        <a class="ranking_txt flex items-center w-3/4 w-full text-xs sm:text-sm md:text-base text-white text_shadow leading-[1.5rem] sm:!leading-[2rem]">Taco Universe is a gaming platform and a game itself! It contains other fun games, services and features, and is built around Venues, Extractors, Collectors & Ingredient NFTs. It is playable on both the Web and Taco Universe App. The main goal in Taco Universe is to upgrade your Venue and unlock Taco Games such as Brigade and Acryptia.</a>
                        <div class="ranking_img flex justify-center items-center w-full  sm:max-w-[358px] sm:max-h-[182px]">
                            <a href="https://app.tacocrypto.io/"><img src="{{ asset('assets/images/game/taco_app_prev.png') }}" class="w-full rounded-[20px] object-cover" alt="rank_dapp"></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="justify-content-center border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-[40px] md:mb-[88px] blurred_back p-3">
            <div class="w-full rounded-[17px] bg-[#131313] elipse_background p-[16px] lg:px-[40px]] lg:py-[33px]">
                <h1 class="text-center text-lg sm:text-[24px] lg:text-[40px] pb-[20px] lg:pb-[68px]">
                    {{ __("Latest News") }}
                </h1>
                <div>


                </div>
            </div>
        </div>
    </div>
</main>
@endsection