@extends('layouts.app')
@section('title')
{{ __('REWARDS') }}
@endsection

@section('content')
<div class="container pt-[120px] pb-[50px] lg:pb-[112px] lg:pt-[150px] px-[20px]">
    <div class="w-full">
        <div class="md:mr-4 d-grid gap-5">
            <div class="w-full flex justify-between gap-5 flex-col items-center lg:flex-row lg:gap-3">
                <div class="w-full md:w-1/2 border-1 rounded-[20px] border-[#8BE78B]">
                    <p class="w-full text-center py-4 text-xs sm:text-sm md:text-base lg:text-base lg:text-lg text-white">
                        Mini Game, play with $KLEE
                    </p>
                    <div class="flex justify-center items-center h-[200px] text-base lg:text-lg comin_soon_card text-white">
                        <img src="{{ asset('assets/images/coming-soon.png') }}" alt="coming-soon" width="120" />
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <h1 class="text-xl md:text-[24px] text-center mb-3">
                        Weekly Ranking
                    </h1>
                    <div class="mt-1 pl-4">
                        <p class="user_ranking flex justify-between">
                            <span class="inline-block xl:w-1/6 font-blod text-slate-50 text-base">
                                USER1
                            </span>
                            <span class="inline-block xl:w-1/6 text-[#8be78b] text-sm lg:text-base">
                                3,250 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                                Reward: $500KLEE
                            </span>
                        </p>
                    </div>
                    <div class="mt-1 pl-4">
                        <p class="user_ranking flex justify-between">
                            <span class="inline-block xl:w-1/6 font-blod text-slate-50 text-base">
                                USER2
                            </span>
                            <span class="inline-block xl:w-1/6 text-[#8be78b] text-sm lg:text-base">
                                2,250 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                                Reward: $500KLEE
                            </span>
                        </p>
                    </div>
                    <div class="mt-1 pl-4">
                        <p class="user_ranking flex justify-between">
                            <span class="inline-block xl:w-1/6 font-blod text-slate-50 text-base">
                                USER3
                            </span>
                            <span class="inline-block xl:w-1/6 text-[#8be78b] text-sm lg:text-base">
                                2,000 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                                Reward: $500KLEE
                            </span>
                        </p>
                    </div>
                    <div class="mt-1 pl-4">
                        <p class="user_ranking flex justify-between">
                            <span class="inline-block xl:w-1/6 font-blod text-slate-50 text-base">
                                USER4
                            </span>
                            <span class="inline-block xl:w-1/6 text-[#8be78b] text-sm lg:text-base">
                                1,150 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                                Reward: $500KLEE
                            </span>
                        </p>
                    </div>
                    <div class="mt-1 pl-4">
                        <p class="user_ranking flex justify-between">
                            <span class="inline-block xl:w-1/6 font-blod text-slate-50 text-base">
                                USER5
                            </span>
                            <span class="inline-block xl:w-1/6 text-[#8be78b] text-sm lg:text-base">
                                1,050 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                                Reward: $500KLEE
                            </span>
                        </p>
                    </div>
                    <div class="mt-1 pl-4">
                        <p class="user_ranking flex justify-between">
                            <span class="inline-block xl:w-1/6 font-blod text-slate-50 text-base">
                                USER6
                            </span>
                            <span class="inline-block xl:w-1/6 text-[#8be78b] text-sm lg:text-base">
                                1,000 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                                Reward: $500KLEE
                            </span>
                        </p>
                    </div>
                    <div class="mt-1 pl-4">
                        <p class="user_ranking flex justify-between">
                            <span class="inline-block xl:w-1/6 font-blod text-slate-50 text-base">
                                USER7
                            </span>
                            <span class="inline-block xl:w-1/6 text-[#8be78b] text-sm lg:text-base">
                                500 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                                Reward: $500KLEE
                            </span>
                        </p>
                    </div>
                    <div class="mt-1 pl-4">
                        <p class="user_ranking flex justify-between">
                            <span class="inline-block xl:w-1/6 font-blod text-slate-50 text-base">
                                USER8
                            </span>
                            <span class="inline-block xl:w-1/6 text-[#8be78b] text-sm lg:text-base">
                                30 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                                Reward: $500KLEE
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full border-1 rounded-[20px] border-[#8BE78B]">
                <p class="w-full text-center py-4 text-xs sm:text-sm md:text-base lg:text-lg text-white">
                    STAKING - STAKE $KLEE and receive a profit share from all offers completed by Users
                </p>
                <div class="flex justify-center items-center h-[200px]">
                    <img src="{{ asset('assets/images/coming-soon.png') }}" alt="coming-soon" width="120" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection