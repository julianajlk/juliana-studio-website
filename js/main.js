$(window).on('load', function() {

  var $grid = $('.featured-items');

  if ($(window).width() > 701) {
    $grid.masonry( {
      // options
      itemSelector: '.item'
    });
  }

  $(window).resize(function() {
    if ($(window).width() <= 700) {
      // disable masonry
      $grid.masonry('destroy');
    }
  });

  $(window).resize(function() {
    if ($(window).width() > 701) {
      //reactivate masonry
      $grid.masonry( {
        // options
        itemSelector: '.item'
      });
    }
  });

});


$(function() {
  // mobile-menu
  $('a.menu-icon').click(function() {
    $('.nav-2').slideToggle();
    $('body').css({'overflow':'hidden'});
    $('#social').show();
    $('.nav-3').css({
      'display': 'block',
      'position': 'absolute',
      'width': '100%',
      'text-align': 'center',
      'left': '0'
    });
  });

  $('.menu-close').click(function(){
    $('.nav-2').hide();
    $('body').removeAttr('style');
    $('#social').removeAttr('style');
    $('.nav-3').removeAttr('style');
  });

  // fix hidden links on window resize

  $(window).resize(function() {
    if ($(window).width() > 900) {
      $('.nav-2').removeAttr('style');
      $('body').removeAttr('style');
      $('#social').removeAttr('style');
      $('.nav-3').removeAttr('style');
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





