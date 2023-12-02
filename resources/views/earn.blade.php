@extends('layouts.app')
@section('title')
{{ __('WAXP EARN') }}
@endsection

@section('content')
<script>
var pollfishConfig = {
  api_key: "bf548f7a-399e-4a1a-9afe-c0d04612b645",
  user_id: "{{ Auth::user()->id}}" ,
  placement_key: "a6c3298e-4c74-423f-947d-cc589f3aeea1",
  debug: true,
  offerwall: false,
  request_uuid: "{{ Auth::user()->id}}",
  

};
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://storage.googleapis.com/pollfish_production/sdk/webplugin/pollfish.min.js"></script>
    <link href="{{ asset('assets/css/earn.css') }}" rel="stylesheet" type="text/css" />

    <main class="earn_container px-[8px]">

      <div class="container pt-[120px] pb-[50px] lg:pb-[112px] lg:pt-[150px]">
        <div class="row">
        <div class="flex flex-col gap-[28px]">
                        <div class="flex flex-col gap-[28px] md:gap-[33px] justify-center items-center lg:items-end lg:flex-row">
                        <p class="alert alert-success sm:text-sm md:text-base text-black text_shadow !leading-[2rem]">Closed Beta Notification:<br>During the Closed Beta period, some functions are limited. You can earn WAXP by completing surveys and offers. Please note that some providers may impose restrictions on certain regions or devices. Withdrawals require manual approval during Closed Beta.<br>
                        </div>
                    </div>
          <div class="col-sm-8">
          <div class="mb-[20px] md:mb-[40px]">
                  <p class="text-white text-xl lg:text-[42px] font-extrabold">Survey Partners</p>
                </div>
              </div>
              <div class="row">
                <div id="ecards-container">          
                  <div class="grid gap-[20px] md:gap-0 md:flex">
                  <div class="pcard" id="pt_bitlabs" onclick="show_offerwall('bitlabs')">
                        <img class="pcard-img object-cover" src="{{ asset('assets/images/offer_partners/bitlabs.jpg') }}" alt="Animals">
                        <div class="flex justify-between items-center pt-[16px] px-[8px]">
                          <div>
                            <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Bitlabs</p>
                          </div>
                          <div class="flex gap-1 justify-center items-center">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/star.png') }}" alt="star">
                          </div>
                        </div>
                      </div>
                      <div class="pcard" id="pt_bitlabs" onclick="Pollfish.showFullSurvey()">
                        <img class="pcard-img object-cover" src="{{ asset('assets/images/offer_partners/pollfish_logo.jpg') }}" alt="Animals">
                        <div class="flex justify-between items-center pt-[16px] px-[8px]">
                          <div>
                            <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Pollfish</p>
                          </div>
                          <div class="flex gap-1 justify-center items-center">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                          </div>
                        </div>
                      </div>




                  </div>
                </div>
              </div>
</div>
        <div class="row pt-[60px] md:pt-[15px]">
          <div>
            <div class="row">
              <div>
                <div class="mb-[20px] md:mb-[40px]">
                  <p class="text-white text-xl lg:text-[42px] font-extrabold">Offer Partners</p>
                </div>
                <div class="row">
                <div id="ecards-container">
                    <div class="grid gap-[20px] md:gap-0 md:flex">
                    <div class="pcard" id="pt_lootably" onclick="show_offerwall('lootably')">
                        <img class="pcard-img object-cover" src="{{ asset('assets/images/offer_partners/lootably.png') }}" alt="Animals">
                        <div class="flex justify-between items-center pt-[16px] px-[8px]">
                          <div>
                            <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Lootably</p>
                          </div>
                        <div class="flex gap-1 justify-center items-center">
                          <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                          <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                          <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                          <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                          <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                        </div>
                      </div>
                   
</div>
                      <div class="pcard" id="pt_notik" onclick="show_offerwall('notik')">
                        <img class="pcard-img object-cover" src="{{ asset('assets/images/offer_partners/notik.png') }}" alt="Animals">
                        <div class="flex justify-between items-center pt-[16px] px-[8px]">
                          <div>
                            <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Notik</p>
                          </div>
                          <div class="flex gap-1 justify-center items-center">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/star.png') }}" alt="star">
                          </div>
                        </div>
                      </div>

                      <div class="pcard" id="pt_ayet" onclick="show_offerwall('ayet')">
                        <img class="pcard-img object-cover" src="{{ asset('assets/images/offer_partners/ayet.jpg') }}" alt="Animals">
                        <div class="flex justify-between items-center pt-[16px] px-[8px]">
                          <div>
                            <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">AyeT</p>
                          </div>
                          <div class="flex gap-1 justify-center items-center">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                            <img src="{{ asset('assets/images/related_star.png') }}" alt="star">
                          </div>
                        </div>
                      </div>
 
    <!--modal-->
    <div class="bg-[#000000C4] fixed h-full w-full left-0 top-0 z-10" id="offerwall_modal">
      <div class="offerwall_modal_info">
        <div class="offerwall_header">
          <p id="offerwall_title">Modal Heading</p>
          <button type="button" onclick="hide_offerwall()">×</button>
        </div>
        <div class="offerwall_body">
          <iframe src="" id="iframe"></iframe>
        </div>
      </div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script>
        function updateSliderArrowsStatus(
            ecardsContainer,
            containerWidth,
            ecardCount,
            ecardWidth
        ) {
            if (
                $(ecardsContainer).scrollLeft() + containerWidth <
                ecardCount * ecardWidth + 15
            ) {
                $("#slide-right-container").addClass("active");
            } else {
                $("#slide-right-container").removeClass("active");
            }
            if ($(ecardsContainer).scrollLeft() > 0) {
                $("#slide-left-container").addClass("active");
            } else {
                $("#slide-left-container").removeClass("active");
            }
        }
        $(function() {
            // Scroll products' slider left/right
            let div = $("#ecards-container");
            let ecardCount = $(div)
                .find(".ecards")
                .children(".ecard").length;
            let speed = 500;
            let containerWidth = $(".container").width();
            let ecardWidth = 250;

            updateSliderArrowsStatus(div, containerWidth, ecardCount, ecardWidth);

            //Remove scrollbars
            $("#slide-right-container").click(function(e) {
                if ($(div).scrollLeft() + containerWidth < ecardCount * ecardWidth) {
                    $(div).animate({
                        scrollLeft: $(div).scrollLeft() + ecardWidth
                    }, {
                        duration: speed,
                        complete: function() {
                            setTimeout(
                                updateSliderArrowsStatus(
                                    div,
                                    containerWidth,
                                    ecardCount,
                                    ecardWidth
                                ),
                                1005
                            );
                        }
                    });
                }
                updateSliderArrowsStatus(div, containerWidth, ecardCount, ecardWidth);
            });
            $("#slide-left-container").click(function(e) {
                if ($(div).scrollLeft() + containerWidth > containerWidth) {
                    $(div).animate({
                        scrollLeft: "-=" + ecardWidth
                    }, {
                        duration: speed,
                        complete: function() {
                            setTimeout(
                                updateSliderArrowsStatus(
                                    div,
                                    containerWidth,
                                    ecardCount,
                                    ecardWidth
                                ),
                                1005
                            );
                        }
                    });
                }
                updateSliderArrowsStatus(div, containerWidth, ecardCount, ecardWidth);
            });

            // If resize action ocurred then update the container width value
            $(window).resize(function() {
                try {
                    containerWidth = $("#ecards-container").width();
                    updateSliderArrowsStatus(div, containerWidth, ecardCount, ecardWidth);
                } catch (error) {
                    console.log(
                        `Error occured while trying to get updated slider container width: 
                ${error}`
                    );
                }
            });
        });

        var offer_modal = document.getElementById("offerwall_modal");
        var iframe = document.getElementById("iframe");
        var offerwall_title = document.getElementById("offerwall_title");

        /* function show_offerwall(partner) {
            offer_modal.style.visibility = "visible";
            offerwall_title.innerHTML = partner + " Offer Wall";
            $.post("get_iframe", {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    partner: partner
                },
                function(data, status) {
                    iframe.srcdoc = data;
                }
            );
        } */
        function show_offerwall(partner)
        {
          offer_modal.style.visibility = "visible";
          offerwall_title.innerHTML = partner+" Offer Wall";
          let url = "";
          if(partner == "lootably")
          {
            url = "https://wall.lootably.com/?placementID=clhedla0e0oh101uy7xwj55vz&sid=";     
            
          }
          else if(partner == "notik")
          {
            url = "https://notik.me/coins?api_key=tM9z2VjFRUGQ2iBdVZy43suBlzVl4a3t&pub_id=pO8AAu&app_id=ENRGtwfmUd&user_id=";
          }
          else if (partner == "bitlabs")
          {
            url = "https://web.bitlabs.ai/?token=a836f098-ecd2-403a-9954-6155da12c366&uid=";
          }
          else if (partner == "ayet")
          {
            url = "https://www.ayetstudios.com/offers/web_offerwall/15072?external_identifier=";
          }
          else if (partner == "pollfish")
          {
           

            url = "https://www.ayetstudios.com/offers/web_offerwall/15072?external_identifier=";
          }
          url += {{ $user_id }};
          iframe.src = url; 
          iframe.src += ''; 
        }
        function hide_offerwall() {
            iframe.src = 'about:blank';
            iframe.src += '';
            offer_modal.style.visibility = "hidden";
        }


        $(document).ready(function() {
            /* $.post("get_notik_offers", {
                _token : $('meta[name="csrf-token"]').attr('content'),
              },
              function(data, status){
                console.log("Data: " + data + "\nStatus: " + status);
              }
            ); */
        });
        
    </script>
@endsection