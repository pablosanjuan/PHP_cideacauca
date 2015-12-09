$(".button-collapse").sideNav();
// Pause slider
$('.slider').slider('pause');
// Start slider
$('.slider').slider('start');
// Next slide
$('.slider').slider('next');
// Previous slide
$('.slider').slider('prev');

    $(document).ready(function(){
    $('.slider').slider({full_width: true});
    });

    $(document).ready(function(){
    $('.barra-nav .row').pushpin({ top: $('.barra-nav').offset().top });
  });