    @extends('layouts.app')
    @section('title')
    {{ __('WAXP EARN') }}
    @endsection

    @section('content')
    <link href="{{ asset('assets/css/earn.css') }}" rel="stylesheet" type="text/css" />

    <main class="earn_container px-[8px]">
      <div class="container pt-[120px] pb-[50px] lg:pb-[112px] lg:pt-[150px]">
        <div class="row">
          <div class="col-sm-8">
            <p class="text-white text-xl lg:text-[42px] font-extrabold">Featured Offers</p>
          </div>
        </div>
        <div class="row">
          <div>
            <div class="econtainer">
              <div id="ecards-container">
                <div class="ecards">
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game1.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[80px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/adobe.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Flame Sword</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>
                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game2.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Flame Sword</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>

                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game3.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Robo City</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>

                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game4.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Wonderlands</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>

                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game1.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[80px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/adobe.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Flame Sword</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>
                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game2.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Genshin Impact</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>

                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game3.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Robo City</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>

                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game4.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Wonderlands</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>

                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game1.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[80px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/adobe.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Flame Sword</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>
                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game2.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Genshin Impact</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>

                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game3.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Robo City</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>

                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game4.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Wonderlands</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>

                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game1.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[80px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/adobe.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Flame Sword</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>
                  </div>
                  <div class="ecard">
                    <div class="center">
                      <div class="relative w-full max-h-[210px] px-[8px]">
                        <img class="ecard-img w-full max-h-[210px]" src="{{ asset('assets/images/game2.png') }}" alt="Animals">
                        <div class="w-[50px] h-[50px] backdrop-blur-[6.5px] absolute right-[16px] top-[16px] rounded-xl shadow_green flex justify-center items-center">
                          <img src="{{ asset('assets/images/android_icon.png') }}" alt="andoid" />
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-between items-center pt-[16px] px-[8px]">
                      <div>
                        <p class="text-white text-base sm:text-lg md:text-[20px] font-extrabold">Genshin Impact</p>
                      </div>
                      <div>
                        <p class="text-lg sm:text-[20px] md:text-[22px] font-bold text-[#8BE78B]">0.03$</p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="arrows">
                <div id="slide-left-container">
                  <div class="slide-left">
                    <img src="assets/images/chevron_left.png" alt="chevron_left" />
                  </div>
                </div>
                <div id="slide-right-container">
                  <div class="slide-right">
                    <img src="assets/images/chevron_right.png" alt="chevron_right" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-[60px] md:pt-[139px]">
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
                    </div>
                  </div>
                </div>
              </div>
              <div class="pt-[40px] md:mt-[115px]">
                <div class="mb-[20px] md:mb-[40px]">
                  <p class="text-white text-xl lg:text-[42px] font-extrabold">Survey Partners</p>
                </div>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
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
          let speed = 600;
          let containerWidth = $(".container").width();
          let ecardWidth = 362;

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
        /* function show_offerwall(partner)
        {     
          offer_modal.style.visibility = "visible";
          offerwall_title.innerHTML = partner+" Offer Wall";
          $.post("get_iframe", {
                _token : $('meta[name="csrf-token"]').attr('content'),
                partner: partner
              },
              function(data, status){
                iframe.srcdoc = data;
              }
          );
        } */
        function show_offerwall(partner) {
          document.body.style.overflow = "hidden";
          offer_modal.style.visibility = "visible";
          offerwall_title.innerHTML = partner + " Offer Wall";
          let url = "";
          if (partner == "lootably") {
            url = "https://wall.lootably.com/?placementID=clhedla0e0oh101uy7xwj55vz&sid=";
            url += {{ $user_id }};
            iframe.src = url;
            iframe.src += '';
          } else if (partner == "notik") {
            $.post("get_iframe", {
                _token: $('meta[name="csrf-token"]').attr('content'),
                partner: partner
              },
              function(data, status) {
                iframe = iframe.contentWindow ||
                  iframe.contentDocument.document ||
                  iframe.contentDocument;
                iframe.document.open();
                iframe.document.write(data);
                iframe.document.close();
              }
            );
          }
        }

        // const offerwallModal = document.getElementById('offerwall_modal');
        // offerwallModal.addEventListener('click',()=)
        function hide_offerwall() {
          // console.log(e);
          document.body.style.overflow = "auto"
          offer_modal.style.visibility = "hidden";
          iframe.src = "";
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