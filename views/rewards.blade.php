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
                        Staking Zone - staking $KLEE will unlock weekly profit shares
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
                            GolemBoooster
                            </span>
                            <span class="inline-block xl:w-1/3 text-[#8be78b] text-sm lg:text-base">
                            78.0000 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                            Reward: 90.0000 KLEE
                            </span>
                        </p>
                    </div>
                    <div class="mt-1 pl-4">
                        <p class="user_ranking flex justify-between">
                            <span class="inline-block xl:w-1/6 font-blod text-slate-50 text-base">
                            Sophe
                            </span>
                            <span class="inline-block xl:w-1/3 text-[#8be78b] text-sm lg:text-base">
                            78.0000 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                            Reward: 80.0000 KLEE
                            </span>
                        </p>
                    </div>
                    <div class="mt-1 pl-4">
                        <p class="user_ranking flex justify-between">
                            <span class="inline-block xl:w-1/6 font-blod text-slate-50 text-base">
                            Kingping34
                            </span>
                            <span class="inline-block xl:w-1/3 text-[#8be78b] text-sm lg:text-base">
                            78.0000 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                            Reward: 60.0000 KLEE
                            </span>
                        </p>
                    </div>
                    <div class="mt-1 pl-4">
                        <p class="user_ranking flex justify-between">
                            <span class="inline-block xl:w-1/6 font-blod text-slate-50 text-base">
                            Timo82
                            </span>
                            <span class="inline-block xl:w-1/3 text-[#8be78b] text-sm lg:text-base">
                            8.0000 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                            Reward: 50.0000 KLEE
                            </span>
                        </p>
                    </div>
                    <div class="mt-1 pl-4">
                        <p class="user_ranking flex justify-between">
                            <span class="inline-block xl:w-1/6 font-blod text-slate-50 text-base">
                            n/a
                            </span>
                            <span class="inline-block xl:w-1/3 text-[#8be78b] text-sm lg:text-base">
                            0.0000 WAXP
                            </span>
                            <span class="inline-block text-end text-[#939393] text-sm lg:text-base">
                            Reward: 40.0000 KLEE
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full border-1 rounded-[20px] border-[#8BE78B]">
                <p class="w-full text-center py-2 text-xs sm:text-sm md:text-base lg:text-lg text-white">Aside the weekly ranking $KLEE is rewarded to users for completing tasks, chatting, playing, and more.</p>
            </div>
        </div>
    </div>
</div>
@endsection