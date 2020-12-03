$(document).ready(function() {

  // START:: SEARCH AREA CONTROLERS
  $("#search-area").css("display", "none");

  $("#open-search-area").on("click", function() {
    $("#search-area").fadeIn();
    $('body').css('overflow' , 'hidden');
  });

  $("#close-search-area").on("click", function() {
    $("#search-area").fadeOut();
    $("body").css('overflow' , 'visible');
  });
  // END:: SEARCH AREA CONTROLERS

  // START:: HOME MATCHS SLIDER
  $("#matches-cards-slider").owlCarousel({
    rtl: true,
    loop: false,
    autoplay: false,
    margin: 0,
    nav: true,
    items: 3,
    dots: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      800: {
        items: 2,
        nav: true,
      },
      1200: {
        items: 3,
        nav: true,
      }
    }
  });
  // END:: HOME MATCHS SLIDER

  // START:: live MATCHS SLIDER
  $("#teams-slider").owlCarousel({
    // center: true,
    rtl: true,
    loop: false,
    autoplay: false,
    margin: 30,
    nav: true,
    dots: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 6,
        nav: true,
      },
      800: {
        items: 6,
        nav: true,
      },
      1200: {
        items: 8,
        nav: true,
      }
    }
  });
  // END:: LIVE MATCHS SLIDER

});
