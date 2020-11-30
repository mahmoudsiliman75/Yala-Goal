$(document).ready(function() {

  // START:: SEARCH AREA CONTROLERS
  $('#search-area').css('display' , 'none');

  $('#open-search-area').on('click' , function() {
    $('#search-area').fadeIn();
  });

  $('#close-search-area').on('click' , function() {
    $('#search-area').fadeOut();
  });
  // END:: SEARCH AREA CONTROLERS

  // START:: HOME MATCHS SLIDER 
  $('.owl-carousel').owlCarousel({
    rtl:true,
    loop:false,
    margin:10,
    center: true,
    nav:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
  });
  // START:: HOME MATCHS SLIDER
});