(function($) {

  var trigger = $('nav-trigger');
  var nav = $('.mobile-nav .menu');
  
  
  $('.nav-trigger').on('click', function(e){
    $('.mobile-nav .menu').toggleClass('is-visible');
    
    e.preventDefault();
  });
  
  $('.nav-trigger').on('click', function(e){
    $('.menu-icon').toggleClass('is-active');
    e.preventDefault();
  });
  
})( jQuery );