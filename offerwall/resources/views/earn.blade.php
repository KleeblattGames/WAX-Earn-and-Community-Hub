@extends('layouts.app')

@section('content')
<link href="{{ asset('assets/css/earn.css') }}" rel="stylesheet"  type="text/css" />

<div class="contaner" style="margin-top: 200px;">
  <div class="row" style="display: flex;justify-content:center;">
    <div class="col-sm-8">
      <p style="font-size: 30px">Featured Offers</p>
    </div>
  </div>
  <div class="row" style="display: flex;justify-content:center;">
    <div class="col-sm-10">
      <div class="econtainer">
        <div id="slide-left-container">
          <div class="slide-left">
          </div>
        </div>
        <div id="ecards-container">
          <div class="ecards">
            <div class="ecard">
              <div class="center">
                <img  class="ecard-img " src="http://via.placeholder.com/220x220" alt="Animals" >
              </div>
              <div class="center">
                <p>Animals</p>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <p style="text-align: left;">0.03$</p>
                </div>
                <div class="col-sm-6">
                  <p style="background-color: rgb(194, 219, 255);text-align:right">
                    Game
                  </p>
                </div>
              </div>             
            </div>
          </div>
        </div>
    
        <div id="slide-right-container">
          <div class="slide-right">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">

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
        $(div).animate(
            {
            scrollLeft: $(div).scrollLeft() + ecardWidth
            },
            {
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
            }
        );
        }
        updateSliderArrowsStatus(div, containerWidth, ecardCount, ecardWidth);
    });
    $("#slide-left-container").click(function(e) {
        if ($(div).scrollLeft() + containerWidth > containerWidth) {
        $(div).animate(
            {
            scrollLeft: "-=" + ecardWidth
            },
            {
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
            }
        );
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
  </script>
@endsection
