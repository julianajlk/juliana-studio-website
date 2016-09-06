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
         $('.navbar').addClass('fixed');
       }
       else {
         $('.navbar').removeClass('fixed');
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


//menu responsive//
/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

