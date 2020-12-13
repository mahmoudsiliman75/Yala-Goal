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

  // START:: LIGHT BOX BLUGIN
  lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
  });
  // END:: LIGHT BOX BLUGIN

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

  // START:: LIVE MATCHS SLIDER
  $("#teams-slider").owlCarousel({
    // center: true,
    rtl: true,
    loop: false,
    autoplay: false,
    margin: 18,
    nav: true,
    dots: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 4,
        nav: true,
      },
      800: {
        items: 1,
        nav: true,
      },
      1200: {
        items: 8,
        nav: true,
      }
    }
  });
  // END:: LIVE MATCHS SLIDER
  
  // START:: MATCHES TABLES TABS SLIDER
  $('#tabs-slider').owlCarousel({
    loop:false,
    margin:3,
    rtl:true,
    nav:true,
    dots: false,
    responsive:{
      0:{
        items:2
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
  });
  // END:: MATCHES TABLES TABS SLIDER

  // START:: DATEPICKER
  $(function() {
    $('#date').datepicker({
      autoHide: true,
    });
  });
  // END:: DATEPICKER

  // START:: SELECT 2
  $('#id_label_single').select2();
  // END:: SELECT 2

  // START:: ADJUSTING TABS ACTIVE CLASS
  $('.owl-stage').children().removeClass('active');
  $('.owl-item').on('click' , function () {
    $('.owl-item').children().addClass('active').children().removeClass('active');
  });
  // END:: ADJUSTING TABS ACTIVE CLASS

  // START:: MIX IT UP
  // var mixer = mixitup('#mixer-container');
  // var mixer = mixitup('.container');

  // $(function(){
  //   var $catSelect = $('#filter-cat'),
  //       $container = $('#filter-container');  

  //   $container.mixItUp;

  //   $catSelect.on('change', function(){
  //     $container.mixItUp('filter', this.value);
  //   });

  //   $(function(){
  //     var $catSelect = $('#filter-cat'),
  //         $container = $('#filter-container');
  
  //     $container.mixItUp({});
  
  //     $('#filter-cat').on('change', function() {
  
  //       var filterString = $catSelect.val();
  
  //       $container.mixItUp('filter', filterString);
  //     });
  
  //   });


  // });
  
  // END:: MIX IT UP

});
