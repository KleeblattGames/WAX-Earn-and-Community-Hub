@extends('layouts.app')
@section('title')
{{ __('PROFILE') }}
@endsection

@section('content')
<link href="{{ asset( 'assets/css/profile.css' ) }}" rel="stylesheet">
<!-- Play Games Area Start -->
<section class="play-games starter_zone_container">
    <div class="profile-page">
        <div class="info-table mt-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 px-[20px]">
                        <div class="main-box">
                            <div class="main-header-area">
                                <ul class="nav" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general_panel" type="button" role="tab" aria-controls="general_panel" aria-selected="true">General</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="withdraw-tab" data-bs-toggle="tab" data-bs-target="#withdraw_panel" type="button" role="tab" aria-controls="withdraw-panel" aria-selected="false">Withdraw</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history_panel" type="button" role="tab" aria-controls="history_panel" aria-selected="false">History</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="stake-tab" data-bs-toggle="tab" data-bs-target="#stake_panel" type="button" role="tab" aria-controls="stake_panel" aria-selected="false">Stake</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="general_panel" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="container !px-0">
                                        <div class="row">
                                            <div class="col-lg-5 py-[24px] md:py-8">
                                                <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl flex justify-center items-center">
                                                    <img class="w-1/2 sm:w-auto" src="assets/images/game/icon1.png" alt="game">
                                                </div>
                                                <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl flex flex-col mt-5 justify-center p-[22px] gap-[22px]">
                                                    <div class="w-full flex flex-col light_ellipse w-full h-full bg-[#131313] rounded-[17px] md:gap-[20px] p-[22px]">
                                                        <div class="h3 text-white text-lg sm:text-xl md:text-[22.75px]">Your Balance:</div>
                                                        <div class="flex flex-col gap-3">
                                                            <div class="flex justify-between border-b-[0.5px] gap-2 pb-2 border-b-[#8BE78B]">
                                                                <div>
                                                                    <span class="subtitle text-white text-base sm:text-lg md:text-xl">Avaliable:</span>
                                                                </div>
                                                                <div>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right"> 100,345 $WAXP</span>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right"> 100,345 $KLEE</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between border-b-[0.5px] gap-2 pb-2 border-b-[#8BE78B]">
                                                                <div>
                                                                    <span class="subtitle text-white text-base sm:text-lg md:text-xl">Locked:</span>
                                                                </div>
                                                                <div>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right"> 100,345 $WAXP</span>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right"> 100,345 $KLEE</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between gap-2 pb-2 ">
                                                                <div>
                                                                    <span class="subtitle text-white text-base sm:text-lg md:text-xl">Staking Level:</span>
                                                                </div>
                                                                <div>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right">A</span>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="text-[#8BE78B] self-end w-max text-decoration-underline underline-offset-4 text-xs sm:text-sm leading-[22px]">Learn how to stake $KLEE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 py-[24px] md:py-8">
                                                <div class="textarea w-100 h-100 border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl">
                                                    <textarea placeholder="Write here..." class="w-100 h-100 placeholder:text-white min-h-[350px] text-sm sm:text-base md:text-lg" name="message"></textarea>
                                                    <button class="mybtn2 text-sm sm:text-base">Edit/Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl my-[24px] md:my-8 p-[22px]" id="withdraw_panel" role="tabpanel" aria-labelledby="withdraw-tab">
                                    <div class="w-full flex flex-col light_ellipse w-full h-full bg-[#131313] rounded-[17px] md:gap-[20px] p-[22px]">
                                        <div class="flex flex-col md:flex-row gap-[15px] md:gap-0 border-b-[0.5px] border-b-[#8be78b] pb-2 md:pb-0 justify-between w-full md:border-b-0">
                                            <div class="p text-white text-sm sm:text-base md:text-lg">Select one of your abliable currencies you want to withdraw.</div>
                                            <div class="w-[244px] flex">
                                                <div class="flex justify-end flex-col">
                                                    <div class="flex">
                                                        <input id="waxp" class="mr-2 accent-[#8BE78B] cursor-pointer" type="radio" name="withdraw-type" value="waxp">
                                                        <label for='waxp' class="value text-white cursor-pointer text-sm sm:text-base md:text-lg">100,234 $WAXP</label>
                                                    </div>
                                                    <div class="flex">
                                                        <input id="klee" class="mr-2 accent-[#8BE78B] cursor-pointer" type="radio" name="withdraw-type" value="klee">
                                                        <label for='klee' class="value text-white cursor-pointer text-sm sm:text-base md:text-lg">100,234 $KLEE</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col md:flex-row gap-[15px] md:gap-0 border-b-[0.5px] border-b-[#8be78b] pb-2 md:pb-0 justify-between w-full mt-[25px] md:mt-5 md:border-b-0">
                                            <div class="p text-white text-sm sm:text-base md:text-lg">Select your withdraw method.</div>
                                            <div class="w-[244px] flex">
                                                <div class="flex justify-end flex-col">
                                                    <div class="flex">
                                                        <input id="wax" class="mr-2 accent-[#8BE78B] cursor-pointer" type="radio" name="withdraw-method" value="wax">
                                                        <label for='wax' class="value text-white cursor-pointer text-sm sm:text-base md:text-lg">WAX</label>
                                                    </div>
                                                    <div class="flex">
                                                        <input id="blockchain" class="mr-2 accent-[#8BE78B] cursor-pointer" type="radio" name="withdraw-method" value="blockchain">
                                                        <label for='blockchain' class="value text-white cursor-pointer text-sm sm:text-base md:text-lg">Blockchain</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col md:flex-row gap-[15px] md:gap-0 justify-between w-full mt-[25px] md:mt-5">
                                            <div class="p text-white text-sm sm:text-base md:text-lg">Provide your Wallet Address.</div>
                                            <div class="w-[244px] flex">
                                                <input class="input-box text-white placeholder:text-[#8BE78B] placeholder:text-sm placeholder:sm:text-base placeholder:md:text-lg text-sm sm:text-base md:text-lg" type="text" name="wallet-address" id="" placeholder="23423423423423">
                                            </div>
                                        </div>
                                        <div class="row mt-[25px] md:mt-5">
                                            <a href="#" class="text-[#8BE78B] self-end w-max text-decoration-underline underline-offset-4 text-xs sm:text-sm">Don't have a WAX wallet? No Problem!</a>
                                        </div>
                                        <div class="row pt-[25px] md:pt-5 justify-between">
                                            <div class="col-md-5">
                                                <a href="#" class="mybtn1 w-[140px] md:w-[183px] text-sm sm:text-base">Withdraw</a>
                                            </div>
                                            <div class="col-lg-4 mt-3 mt-lg-0">
                                                <div class="text-group d-flex justify-content-between">
                                                    <span class="text-white text-sm sm:text-base md:text-lg">You will received:</span>
                                                    <span class="text-white text-sm sm:text-base md:text-lg">XXX</span>
                                                </div>
                                                <div class="p text-white text-sm sm:text-base md:text-lg">WITHDRAW WITH ZERO FEES!</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="history_panel" role="tabpanel" aria-labelledby="history-tab">
                                    <div class="inner-table-content border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl my-[24px] md:my-8 p-[22px]">
                                        <div class="tab-content w-full flex flex-col light_ellipse w-full h-full bg-[#131313] rounded-[17px] md:gap-[20px]">
                                            <div class="tab-pane fade show active" id="leaderboard" role="tabpanel" aria-labelledby="leaderboard-tab">
                                                <div class="inner-table">
                                                    <div class="responsive-table">
                                                        <table class="table history_table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" class="rounded_tl">Title</th>
                                                                    <th scope="col">Datetime</th>
                                                                    <th scope="col">Points</th>
                                                                    <th scope="col" class="rounded_tr">Prize</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="more-info" role="tabpanel" aria-labelledby="more-info-tab">
                                                <div class="info-content border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl my-[24px] md:my-8 p-[22px]">
                                                    <div class="w-full flex flex-col light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px] p-[22px]">
                                                        <div class="flex flex-col gap-2">
                                                            <h4 class="text-lg sm:text-xl md:text-[22.75px] text-white font-extrabold">
                                                                Tournament Duration
                                                            </h4>
                                                            <p class="text-white text-base sm:text-lg md:text-xl">
                                                                7 Days (Monday 01 UTC - Sunday 23:59 UTC)
                                                            </p>
                                                        </div>
                                                        <div class="flex flex-col gap-2">
                                                            <h4 class="text-lg sm:text-xl md:text-[22.75px] text-white font-extrabold">
                                                                Applicable Games
                                                            </h4>
                                                            <p class="text-white text-base sm:text-lg md:text-xl">
                                                                All Games Under 'Slots' Category
                                                            </p>
                                                        </div>
                                                        <div class="flex flex-col gap-2">
                                                            <h4 class="text-lg sm:text-xl md:text-[22.75px] text-white font-extrabold">
                                                                Free Spin Reward Games

                                                            </h4>
                                                            <p class="text-white text-base sm:text-lg md:text-xl">
                                                                Book Of Pyramids, Brave Viking, Desert Treasure, Hawaii
                                                                Cocktails, Lucky Blue, Lucky Lady Clover, Lucky Sweets,
                                                                Princess Of Sky, Princess Royal, Scroll Of Adventure,
                                                                Slotomon Go, West Town Any Softswiss Slots Game | Wager x 40
                                                                times
                                                            </p>
                                                        </div>
                                                        <a href="#" class="text-[#8BE78B] self-end w-max text-decoration-underline underline-offset-4 text-xs sm:text-sm">Terms and Conditions</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade pt-5" id="stake_panel" role="tabpanel" aria-labelledby="stake-tab">
                                    <div class="flex justify-center items-center h-[200px] text-base lg:text-lg comin_soon_card text-white">
                                        <img src="{{ asset('assets/images/coming-soon.png') }}" alt="coming-soon" width="200" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Play Games Area End -->

<script src="{{ asset( 'assets/js/bootstrap.min.js' ) }}"></script>

@endsection