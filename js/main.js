$(window).on('load', function() {

  $('.featured-items').masonry( {
    // options
    itemSelector: '.item'
  });

});


$(function() {
  // mobile-menu
  $('a.menu-icon').click(function() {
    $('#menu-links').slideToggle();
    $('body').css({'overflow':'hidden'});
    $('#social').show();
    $('#social').css({
      'display': 'block',
      'position': 'absolute',
      'width': '100%',
      'text-align': 'center',
      'left': '0'
    });
  });

  $('.menu-close').click(function(){
    $('#menu-links').hide();
    $('body').removeAttr('style');
    $('#social').removeAttr('style');
    $('#social').removeAttr('style');
  });

  // fix hidden links on window resize

  $(window).resize(function() {
    if ($(window).width() > 900) {
      $('#menu-links').removeAttr('style');
      $('body').removeAttr('style');
      $('#social').removeAttr('style');
      $('#social').removeAttr('style');
    }
  });

  $(window).bind('scroll', function() {
     var navHeight = $( window ).height() - 70;
       if ($(window).scrollTop() > navHeight) {
         $('nav').addClass('fixed');
       }
       else {
         $('nav').removeClass('fixed');
       }
    });


});





