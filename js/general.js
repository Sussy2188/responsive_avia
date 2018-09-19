var $ = jQuery;

$(document).ready(function(){

  $('.lens-icon').on('click', function(){
    $( ".search-form" ).toggleClass('open');
  });
  
  // set middle div content height as first image in row
  middleTextHeight();

  // Making header stitky
  window.onscroll = function() {headerSticky()};

  // scroll contacto to section form
  $('.go-to-contact').on('click', function(e){
    $("html, body").stop().animate({scrollTop: $('#contacto').offset().top}, 'slow');
  });

  // Swiper 
  
});
var mySwiper;
function swiperResize(slides){
  var ww = $(document).width()
  if (ww>1000) mySwiper.params.slidesPerView = slides;
  if (ww>760 && ww<=1000) mySwiper.params.slidesPerView = 3;
  if (ww>468 && ww<=760) mySwiper.params.slidesPerView = 2;
  if (ww<=468) mySwiper.params.slidesPerView = 1;
  mySwiper.update();
}

function setSwiper(slides) {
  // Swiper 
    mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    slidesPerView: slides,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    loop: true
  });
  
  $(window).resize(function() {swiperResize(slides)});
  setTimeout(function() {
    swiperResize(slides);
  },1);
}



function middleTextHeight() {
  var second_section_h = $('.second-section__left img').height();
  $('.second-section__middle').height(second_section_h);
  $(window).resize(function() {
  var second_section_h = $('.second-section__left img').height();
  $('.second-section__middle').height(second_section_h);
  });
  }
  



// Get the header
var header = $("#header");

// Get the offset position of the navbar
var sticky = header.offset().top;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function headerSticky() {
  if (window.pageYOffset > sticky) {
    header.addClass("sticky");
  } else {
    header.removeClass("sticky");
  }
}