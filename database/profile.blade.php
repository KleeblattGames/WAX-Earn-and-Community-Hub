@extends('layouts.app')
@extends('layouts.app')

@section('title')
{{ __('PROFILE') }}
@endsection

@section('content')
<link href="{{ asset( 'assets/css/profile.css' ) }}" rel="stylesheet">

<section class="play-games">
    <div class="profile-page">
        <div class="info-table mt-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-box">
                            <div class="main-header-area">
                                <ul class="nav" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general_panel" type="button"
                                            role="tab" aria-controls="general_panel" aria-selected="true">General</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="withdraw-tab" data-bs-toggle="tab" data-bs-target="#withdraw_panel" type="button"
                                            role="tab" aria-controls="withdraw-panel" aria-selected="false">Withdraw</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history_panel" type="button"
                                            role="tab" aria-controls="history_panel" aria-selected="false">History</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="stake-tab" data-bs-toggle="tab" data-bs-target="#stake_panel" type="button"
                                            role="tab" aria-controls="stake_panel" aria-selected="false">Stake</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="general_panel" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="container !px-0">
                                        <div class="row">
                                            <div class="col-lg-5 py-[24px] md:py-8">
                                                <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back h-auto sm:h-[254px] p-[14px]">
                                                    <div class="mini_ellipse w-full h-full bg-[#131313] rounded-[17px] px-4 py-3 md:py-[35px] flex flex-col gap-[12px]">
                                                        <h3 class="text-lg sm:text-[20px] md:text-[24px] font-bold text-center text-white">Welcome, {{ Auth::user()->name }}!</h3>
                                                        <p class="text-white text-center text_shadow text-xs sm:text-sm md:text-base leading-[1.2rem] md:leading-[1.7rem]">Manage your staking, withdrawal and view your history. Please be aware of current limitations due to Closed Beta Testing.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 py-[24px] md:py-8">
                                                <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl flex flex-col mt-5 justify-center p-[22px] gap-[22px]">
                                                    <div class="w-full flex flex-col light_ellipse w-full h-full bg-[#131313] rounded-[17px] md:gap-[20px] p-[22px]">
                                                        <div class="h3 text-white text-lg sm:text-xl md:text-[22.75px]">Your Balance:</div>
                                                        <div class="flex flex-col gap-3">
                                                            <div class="flex justify-between border-b-[0.5px] gap-2 pb-2 border-b-[#8BE78B]">
                                                                <div>
                                                                    <span class="subtitle text-white text-base sm:text-lg md:text-xl">Available:</span>
                                                                </div>
                                                                <div>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right">{{ Auth::user()->wax_balance}} WAXP</span>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right"> {{ Auth::user()->klee_balance}} $KLEE</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between border-b-[0.5px] gap-2 pb-2 border-b-[#8BE78B]">
                                                                <div>
                                                                    <span class="subtitle text-white text-base sm:text-lg md:text-xl">Locked:</span>
                                                                </div>
                                                                <div>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right"> 0.0000 WAXP</span>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right"> 0.0000 $KLEE</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between gap-2 pb-2 ">
                                                                <div>
                                                                    <span class="subtitle text-white text-base sm:text-lg md:text-xl">Staking Level:</span>
                                                                </div>
                                                                <div>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right">0</span>
                                                                </div>
                                                                <a href="#" class="text-[#8BE78B] self-end w-max text-decoration-underline underline-offset-4 text-xs sm:text-sm leading-[22px]">Visit the stake tab for more information</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade p-5" id="withdraw_panel" role="tabpanel" aria-labelledby="withdraw-tab">
                                    <div class="w-full flex flex-col light_ellipse w-full h-full bg-[#131313] rounded-[17px] md:gap-[20px] p-[22px]">
                                        <div class="flex flex-col md:flex-row gap-[15px] md:gap-0 border-b-[0.5px] border-b-[#8be78b] pb-2 md:pb-0 justify-between w-full md:border-b-0">
                                            <div class="p text-white text-sm sm:text-base md:text-lg">Available currencies to withdraw:</div>
                                            <div class="w-[244px] flex">
                                                <div class="flex justify-end flex-col">
                                                    <div class="flex">
                                                        <input id="waxp" class="mr-2 accent-[#8BE78B] cursor-pointer" type="radio" name="withdraw-type" value="waxp">
                                                        <label for='waxp' class="value text-white cursor-pointer text-sm sm:text-base md:text-lg">{{ Auth::user()->wax_balance}} $WAXP</label>
                                                    </div>
                                                    <div class="flex">
                                                        <input id="klee" class="mr-2 accent-[#8BE78B] cursor-pointer" type="radio" name="withdraw-type" value="klee">
                                                        <label for='klee' class="value text-white cursor-pointer text-sm sm:text-base md:text-lg">{{ Auth::user()->klee_balance}} $KLEE</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="history_panel" role="tabpanel" aria-labelledby="history-tab">
                                    <!-- Add your history content here -->
                                </div>
                                <div class="tab-pane fade" id="stake_panel" role="tabpanel" aria-labelledby="stake-tab">
                                    <!-- Add your stake content here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                                                        <label for='klee' class="value text-white cursor-pointer text-sm sm:text-base md:text-lg">{{ Auth::user()->klee_balance}} $KLEE</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                             
                                        <div class="flex flex-col md:flex-row gap-[15px] md:gap-0 justify-between w-full mt-[25px] md:mt-5">
                                             <div class="p text-white text-sm sm:text-base md:text-lg">Provide your Wallet Address:</div>
                                            <div class="w-[244px] flex">
                                             
                                            <input class="input-box" type="text" name="new_wallet-adress" id="new_wallet-adress" placeholder="wax wallet address"><br>                                            
                                            </div>
                                        </div>
                                        <div class="row mt-[25px] md:mt-5">
                                            <a href="https://www.mycloudwallet.com/" class="text-[#8BE78B] self-end w-max text-decoration-underline underline-offset-4 text-xs sm:text-sm">Don't have a WAX wallet? Learn How!</a>
                                        </div>
                                        <div class="row pt-[25px] md:pt-5 justify-between">
                                            <div class="col-md-5">
                                                <a href="#" class="mybtn1 w-[140px] md:w-[183px] text-sm sm:text-base">Withdraw</a>
                                            </div>
                                            <div class="col-lg-4 mt-3 mt-lg-0">
                                                <div class="text-group d-flex justify-content-between">
                                                    <div class="p text-white text-sm sm:text-base md:text-lg">Note: During Closed Beta all withdrawals require manual approval my an admin.</div>
                                                </div>
                                               

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="history_panel" role="tabpanel" aria-labelledby="history-tab">
                                    <div class="inner-table-content border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl my-[24px] md:my-8 p-[22px]">
                                        <div class="tab-content w-full flex flex-col light_ellipse w-full h-full bg-[#131313] rounded-[17px] md:gap-[20px]">    
                                            <div class="inner-table">
                                                <div class="responsive-table">
                                                    <table class="table history_table">
					                                    <thead>
                                                            <tr>
                                                                <th scope="col">ID</th>
								                                <th scope="col">Timestamp</th>
                                                                <th scope="col">Partner</th>
                                                                <th scope="col">Offerwall ID</th>
                                                                <th scope="col">WAXP Reward</th>
								                                <th scope="col">$KLEE Reward</th>
								                                <th scope="col">Status</th>
                                                            </tr>
                                                        </thead>
						                                    <tbody>
						                                        @php( $offers = \App\Models\Offer::where('user_id',Auth::user()->id)->get())
						                                        @foreach($offers as $offer)
							                                    <tr>
                                                        	        <td>{{ $offer->id}}</td>
								                                    <td>{{ $offer->created_at}}</td>
								                                    <td>{{ $offer->partner}}</td>
								                                    <td>{{ $offer->offer_id}}</td>
								                                    <td>{{ $offer->wax_reward}}</td>
								                                    <td>{{ $offer->klee_reward}}</td>
								                                    <td>
									                                @if($offer->reward_locked == false)
   									                                NOT COMPLETED
									                                @else
    									                            COMPLETED
									                                @endif
								                                    </td>
                                                                </tr>
                                                                @endforeach   
						                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="stake_panel" role="tabpanel" aria-labelledby="stake-tab">
                                   <div class="container !px-0">
                                        <div class="row">
                                            <div class="col-lg-5 py-[24px] md:py-8">
                                                <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl flex justify-center items-center">
                                                    <img src="{{ asset('assets/images/coming-soon.png') }}" alt="coming-soon" width="200" />
                                                </div>
                                                <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl flex flex-col mt-5 justify-center p-[22px] gap-[22px]">
                                                    <div class="w-full flex flex-col light_ellipse w-full h-full bg-[#131313] rounded-[17px] md:gap-[20px] p-[22px]">
                                                        <div class="h3 text-white text-lg sm:text-xl md:text-[22.75px]">STAKING $KLEE:</div>
                                                            <div class="flex flex-col gap-3">
                                                                <div class="flex justify-between border-b-[0.5px] gap-2 pb-2 border-b-[#8BE78B]">
                                                                    <div>
                                                                        <span class="subtitle text-white text-base sm:text-lg md:text-xl">available balance:</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right"> {{ Auth::user()->klee_balance}} $KLEE</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex justify-between ">
                                                                    <div>
                                                                        <span class="subtitle text-white text-base sm:text-lg md:text-xl">Mine staked:</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right">0.0000 $KLEE</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex justify-between ">
                                                                    <div>
                                                                        <span class="subtitle text-white text-base sm:text-lg md:text-xl">Pool Share:</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right">0.00%</span>
                                                                    </div>
                                                                </div>
							                                    <div class="flex justify-between  border-b-[0.5px] gap-2 pb-2 border-b-[#8BE78B]">
                                                                <div>
                                                                    <span class="subtitle text-white text-base sm:text-lg md:text-xl">My estimated weekly reward:</span>
                                                                </div>
                                                                <div>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right">0.0000 $KLEE</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between gap-2 pb-2 border-b-[0.5px] gap-2 pb-2 border-b-[#8BE78B]">
                                                                <div>
                                                                    <span class="subtitle text-white text-base sm:text-lg md:text-xl">Staking Level:</span>
                                                                </div>
                                                                <div>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right">0</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 py-[24px] md:py-8">
                                                <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back h-auto sm:h-[254px] p-[14px]">
                            						<div class="mini_ellipse w-full h-full bg-[#131313] rounded-[17px] px-4 py-3 md:py-[35px] flex flex-col gap-[12px]">
                                					    <h3 class="text-lg sm:text-[20px] md:text-[24px] font-bold text-center text-white">$KLEE Token & Staking</h3>
                                					    <p class="text-white text-center text_shadow text-xs sm:text-sm md:text-base leading-[1.2rem] md:leading-[1.7rem]">Introducing $KLEE as additional reward for offers completed on our platform Receive additional $KLEE token for completing tasks and surveys while earning WAXP. Staking $KLEE will unlock additional reward perks.</p>
                            						    <p class="text-white text-center text_shadow text-xs sm:text-sm md:text-base leading-[1.2rem] md:leading-[1.7rem]">Unlock the highest tier to receive a profit-share from our platform. Every week we will distribute net-profit of our offerwall earnings back to the community members who are actively staking inour pool. Reward distribution will be in WAXP and directly sent to your WAX Wallet</p>				
									                </div>
                        					    </div>
                                            </div>
                                        </div>     
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



<script src="{{ asset( 'assets/js/bootstrap.min.js' ) }}"></script>

@endsection