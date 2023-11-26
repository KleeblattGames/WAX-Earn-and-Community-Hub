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
                            <div class="flex flex-col gap-[20px]">
                                <h3 class="text-base sm:text-xl lg:text-[30px] font-bold text-center lg:text-start lg:max-w-[400px] !leading-[2.5rem]">Welcome to our Community</h3>
                                <div class="flex flex-col gap-[12px]">
                                    <p class=" text-xs sm:text-sm md:text-base text-white text_shadow !leading-[2rem]">We are currently popolating this area with all kind of information and news for you! Stay tuned. </p>
                                    <p class=""</p>
                                    <p class="text-xs sm:text-sm md:text-base text-white text_shadow">You would like to give us feedback? Visit us at https://kleeblatt-games.canny.io/ In case you want to know more about the project freel free to visit https://github.kleeblatt.games</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-[0px] lg:gap-[32px]">
                        <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back h-auto sm:h-[254px] p-[14px]">
                            <div class="mini_ellipse w-full h-full bg-[#131313] rounded-[17px] px-4 py-3 md:py-[35px] flex flex-col gap-[12px]">
                                <h3 class="text-lg sm:text-[20px] md:text-[24px] font-bold text-center text-white">Guides and Help</h3>
                                <p class="text-white text-center text_shadow text-xs sm:text-sm md:text-base leading-[1.2rem] md:leading-[1.7rem]">Sit Amet Consectetur LaoreetLorem Ipsum Dolor Sit Amet ConsecteturSit Amet Consectetur LaoreetLorem Ipsum Dolor Sit Amet ConsecteturSit Amet Consectetur LaoreetLorem Ipsum Dolor Sit Amet Consectetur</p>
                            </div>
                        </div>
                        <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back h-auto sm:h-[254px] p-[14px]">
                            <div class="mini_ellipse w-full h-full bg-[#131313] rounded-[17px] px-4 py-3 md:py-[35px] flex flex-col gap-[12px]">
                                <h3 class="text-lg sm:text-[20px] md:text-[24px] font-bold text-center text-white">Aggregated News Overview</h3>
                                <p class="text-white text-center text_shadow text-xs sm:text-sm md:text-base leading-[1.2rem] md:leading-[1.7rem]">While we work on the news section - have you already participated at the current Amazon Prime Gaming x Brawlers promotion? Receive an exclusive NFT directly to your wallet!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-content-center border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-[40px] md:mb-[88px] blurred_back p-3">
            <div class="w-full rounded-[17px] bg-[#131313] elipse_background p-[16px] lg:px-[40px]] lg:py-[33px]">
                <h1 class="text-center text-lg sm:text-[24px] lg:text-[40px] pb-[20px] lg:pb-[68px]">
                    {{ __("Ranking WAX Dapps") }}
                </h1>
                <div>
                    <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back sm:h-[254px] p-[14px]">
                        <div class="w-full flex justify-evenly flex-col sm:flex-row py-[14px] px-[20px] md:px-[40px] lg:px-[70px] lg:py-[22px] items-start light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px]"> 
                        <div class="ranking_img flex justify-center items-center w-full h-full sm:max-w-[358px] sm:max-h-[182px]">
                                <img src="{{ asset('assets/images/game/dapp_rank_1.png') }}" class="w-full rounded-[20px] object-cover h-full" alt="rank_dapp">
                            </div>
                            <div class="ranking_txt flex items-center w-3/4 w-full text-xs sm:text-sm md:text-base text-white text_shadow leading-[1.5rem] sm:!leading-[2rem]">Alcor is a lego of decentralized finance built on multi-chain, and a provider of solutions in one tap. The first place to be if you need to exchange your WAXP to other tokens. We recommend a visit even if you dont need any token exchanged you can buy crypto or use theire token bridge.</div>
                        </div>
                    </div>
                    <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back sm:h-[254px] p-[14px]">
                        <div class="w-full flex justify-evenly flex-col sm:flex-row py-[14px] px-[20px] md:px-[40px] lg:px-[70px] lg:py-[22px] items-start light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px]">
                            <div class="ranking_img flex justify-center items-center w-full h-full sm:max-w-[358px] sm:max-h-[182px]">
                                <img src="{{ asset('assets/images/game/dapp_rank_2.png') }}" class="w-full rounded-[20px] object-cover h-full" alt="rank_dapp">
                            </div>
                            <div class="ranking_txt flex items-center w-3/4 w-full text-xs sm:text-sm md:text-base text-white text_shadow leading-[1.5rem] sm:!leading-[2rem]">AtomicHub is the leading Web3 platform for buying, selling, trading and creating NFTs that’s used by millions around the world.</div>
                        </div>
                    </div>
                    <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back sm:h-[254px] p-[14px]">
                        <div class="w-full flex justify-evenly flex-col sm:flex-row py-[14px] px-[20px] md:px-[40px] lg:px-[70px] lg:py-[22px] items-start light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px]">
                            <div class="ranking_img flex justify-center items-center w-full h-full sm:max-w-[358px] sm:max-h-[182px]">
                                <img src="{{ asset('assets/images/game/dapp_rank_3.png') }}" class="w-full rounded-[20px] object-cover h-full" alt="rank_dapp">
                            </div>
                            <div class="ranking_txt flex items-center w-3/4 w-full text-xs sm:text-sm md:text-base text-white text_shadow leading-[1.5rem] sm:!leading-[2rem]">A breeze to use, and totally secure! The Cloud Wallet is your all-inclusive gateway access to multiple blockchains, over 30,000 dApps, premier NFT collections, video games and much more.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-content-center border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-[40px] md:mb-[88px] blurred_back p-3">
            <div class="w-full rounded-[17px] bg-[#131313] elipse_background p-[16px] lg:px-[40px]] lg:py-[33px]">
                <h1 class="text-center text-lg sm:text-[24px] lg:text-[40px] pb-[20px] lg:pb-[68px]">
                    {{ __("Ranking WAX Games") }}
                </h1>
                <div>
                    <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back sm:h-[254px] p-[14px]">
                        <div class="w-full flex justify-evenly flex-col sm:flex-row py-[14px] px-[20px] md:px-[40px] lg:px-[70px] lg:py-[22px] items-start light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px]">
                            <div class="ranking_img flex justify-center items-center w-full h-full sm:max-w-[358px] sm:max-h-[182px]">
                                <img src="{{ asset('assets/images/game/dapp_rank_2.jpg') }}" class="w-full rounded-[20px] object-cover h-full" alt="rank_dapp">
                            </div>
                            <div class="ranking_txt flex items-center w-3/4 w-full text-xs sm:text-sm md:text-base text-white text_shadow leading-[1.5rem] sm:!leading-[2rem]">
                            Lorem Ipsum Dolor Sit Amet Consectetur LaoreetLorem Ipsum Dolor Sit Amet Consectetur LaoreetLorem Ipsum Dolor Sit Amet Consectetur LaoreetLorem Ipsum Dolor Sit Amet Consectetur.
                            </div>
                        </div>
                    </div>
                    <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back sm:h-[254px] p-[14px]">
                        <div class="w-full flex justify-evenly flex-col sm:flex-row py-[14px] px-[20px] md:px-[40px] lg:px-[70px] lg:py-[22px] items-start light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px]">
                            <div class="ranking_img flex justify-center items-center w-full h-full sm:max-w-[358px] sm:max-h-[182px]">
                                <img src="{{ asset('assets/images/game/dapp_rank_2.jpg') }}" class="w-full rounded-[20px] object-cover h-full" alt="rank_dapp">
                            </div>
                            <div class="ranking_txt flex items-center w-3/4 w-full text-xs sm:text-sm md:text-base text-white text_shadow leading-[1.5rem] sm:!leading-[2rem]">
                            Lorem Ipsum Dolor Sit Amet Consectetur LaoreetLorem Ipsum Dolor Sit Amet Consectetur LaoreetLorem Ipsum Dolor Sit Amet Consectetur LaoreetLorem Ipsum Dolor Sit Amet Consectetur Laoree.
                            </div>
                        </div>
                    </div>
                    <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back sm:h-[254px] p-[14px]">
                        <div class="w-full flex justify-evenly flex-col sm:flex-row py-[14px] px-[20px] md:px-[40px] lg:px-[70px] lg:py-[22px] items-start light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px]">
                            <div class="ranking_img flex justify-center items-center w-full h-full sm:max-w-[358px] sm:max-h-[182px]">
                                <img src="{{ asset('assets/images/game/dapp_rank_2.jpg') }}" class="w-full rounded-[20px] object-cover h-full" alt="rank_dapp">
                            </div>
                            <div class="ranking_txt flex items-center w-3/4 w-full text-xs sm:text-sm md:text-base text-white text_shadow leading-[1.5rem] sm:!leading-[2rem]">
                            Lorem Ipsum Dolor Sit Amet Consectetur LaoreetLorem Ipsum Dolor Sit Amet Consectetur LaoreetLorem Ipsum Dolor Sit Amet Consectetur LaoreetLorem Ipsum Dolor Sit Amet Consectetur Laoreet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection