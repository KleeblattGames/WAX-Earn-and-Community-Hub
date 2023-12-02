@extends('layouts.app')
@section('title')
{{ __('PROFILE') }}
@endsection

@section('content')
<link href="{{ asset( 'assets/css/profile.css' ) }}" rel="stylesheet">
<script>
function myFunction() {
  var input = document.getElementById("wax_wallet-adress").value;
  var url = "{{ url('/withdraw') }}?wax_address=" + input;
  window.location.href = url;
}
</script>
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
                                 @if(!empty($successMsg))
                                    <div class="alert alert-success"> {{ $successMsg }}</div>
                                @endif
                            <div class="tab-content">
                            <p class="alert alert-success sm:text-sm md:text-base text-black text_shadow !leading-[2rem]">Closed Beta Notification: During the Closed Beta period, some functions are limited. <br><br><strong>withdrawals & missing credits: support@kleeblatt.games <br>feedback/bugs: <a href="https://kleeblatt-games.canny.io/" style="display: inline-block;">canni.io feedback area</a></strong><br>
                        
                                <div class="tab-pane fade show active" id="general_panel" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="container !px-0">
                                        <div class="row">

                                            <div class="col-lg-5 py-[24px] md:py-8">
                                                <div class="border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl flex justify-center items-center">
                                                <div class="mini_ellipse w-full h-full bg-[#131313] rounded-[17px] px-4 py-3 md:py-[35px] flex flex-col gap-[12px]">
                                					    <h3 class="text-lg sm:text-[20px] md:text-[24px] font-bold text-center text-white">Welcome, {{ Auth::user()->name }}!</h3>
                                					    <p class="text-white text-left text_shadow text-xs sm:text-sm md:text-base leading-[0.2rem] md:leading-[0.7rem]">Your support-id: {{ Auth::user()->id }}</p> 
                                                        <p class="text-white text-left text_shadow text-xs sm:text-sm md:text-base leading-[0.2rem] md:leading-[0.7rem]">Your email: {{ Auth::user()->email }}</p>            						
									                </div>
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
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right">{{ Auth::user()->wax_balance}} WAXP</span>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right"> {{ Auth::user()->klee_balance}} $KLEE</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between border-b-[0.5px] gap-2 pb-2 border-b-[#8BE78B]">
                                                                <div>
                                                                    <span class="subtitle text-white text-base sm:text-lg md:text-xl">Locked:</span>
                                                                </div>
                                                                <div>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right"> {{ Auth::user()->wax_balance_locked}} WAXP</span>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right"> 0.0000 $KLEE</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between gap-2 pb-2 ">
                                                                <div>
                                                                    <span class="subtitle text-white text-base sm:text-lg md:text-xl">Staking Level:</span>
                                                                </div>
                                                                <div>
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right">1</span>
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
                                            <div class="p text-white text-sm sm:text-base md:text-lg">Select your abliable currencies:</div>
                                            <div class="w-[244px] flex">
                                                <div class="flex justify-end flex-col">
                                                    <div class="flex">
                                                        <input id="waxp" class="mr-2 accent-[#8BE78B] cursor-pointer" type="radio" name="withdraw-type" value="waxp">
                                                        <label for='waxp' class="value text-white cursor-pointer text-sm sm:text-base md:text-lg">{{ Auth::user()->wax_balance}} WAXP</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                             
                                        <div class="flex flex-col md:flex-row gap-[15px] md:gap-0 justify-between w-full mt-[25px] md:mt-5">
                                            <div class="p text-white text-sm sm:text-base md:text-lg">Provide your Wallet Address.</div>
                                            <div class="w-[244px] flex">
                                            <input class="input-box" type="text" name="new_wallet-adress" id="wax_wallet-adress" placeholder="your wallet address"><br>                                            
                                            </div>
                                            
                                            
                                            
                                            
                                        </div>
                                        <div class="row mt-[25px] md:mt-5">
                                            <a href="#" class="text-[#8BE78B] self-end w-max text-decoration-underline underline-offset-4 text-xs sm:text-sm">Don't have a WAX wallet? No Problem!</a>
                                        </div>
                                        <div class="row pt-[25px] md:pt-5 justify-between">
                                            <div class="col-md-5">
                                            <button onclick="myFunction()">WITHDRAW</button>
                                            </div>
                                            <div class="col-lg-4 mt-3 mt-lg-0">
                                                <div class="text-group d-flex justify-content-between">

                                                </div>
                                                <div class="p text-white text-sm sm:text-base md:text-lg">Please note during beta all withdrawals require manual approval and test-accounts are not allowed to withdraw</div>

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
                                                                <th scope="col">Date</th>
								                                <th scope="col">Partner</th>
                                                                <th scope="col">Offer Name</th>
                                                                <th scope="col">Transaction ID</th>
                                                                <th scope="col">WAXP Reward</th>
								                                <th scope="col">$KLEE Reward</th>
								                                <th scope="col">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
						                                        @php( $offers = \App\Models\Offer::where('user_id',Auth::user()->id)->get())
						                                        @foreach($offers as $offer)
							                                    <tr>
                                                        	        			<td>{{ $offer->created_at}}</td>
								                                 <td>{{ $offer->partner}}</td>
								                                 <td>{{ $offer->offer_name}}</td>
								                                  <td>{{ $offer->tx_id}}</td>
								                                    <td>{{ $offer->wax_reward}}</td>
								                                    <td>{{ $offer->klee_reward}}</td>
								                                    <td>
									                                @if($offer->reward_locked == false)
                                                                    <h1 style="color: #FF0000"> PENDING </h1>
									                                @else
                                                                    <h1 style="color: #00FF00"> CREDITED </h1>
									                                @endif
								                                    </td>
                                                                </tr>
                                                                @endforeach   
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
                                                                    <span class="balance_value text-white text-sm sm:text-base md:text-lg md:text-right">0.0000 WAXP</span>
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

<!-- Play Games Area End -->

<script src="{{ asset( 'assets/js/bootstrap.min.js' ) }}"></script>

@endsection