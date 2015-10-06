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

//to have white title box as a hover on background image
$('.title-hover').hide();

$('.collection-1').hover(function(){    
  $(this).find('.title-hover').fadeTo(600, 1);
}, function() {
$(this).find('.title-hover').fadeTo(400,0);
});

$('.title-hover').hide();

$('.collection-2').hover(function(){    
  $(this).find('.title-hover').fadeTo(600, 1);
}, function() {
$(this).find('.title-hover').fadeTo(400,0);
});




