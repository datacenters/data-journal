

// Toggle the About section
$('.trigger').click(function() {
  $(this).toggleClass('active');
  $('.about').toggleClass('slide-in');
});

$('.about').click(function() {
  $(this).toggleClass('slide-in');
  $('.trigger').removeClass('active');
});

// Fade-out intro text on scroll
$(window).scroll(function(i){
    var scrollVar = $(window).scrollTop();
    $('.intro-text').css({'opacity':( 150-scrollVar )/100});
})

// jQuery('.client-list ul li').hover(function () {
//     jQuery(this).siblings().stop().addClass('fade-out');
// },
// function () {
//     jQuery(this).siblings().stop().removeClass('fade-out');
// })

$('.index-trigger a').click(function () {
  $(this).toggleClass('active');
  $('.logo').toggleClass('active');
  $('.bio-cv').toggleClass('show');
});

// $('.bio-cv').click(function () {
//   $(this).fadeOut('slow');
// });

$('.client-list ul li a').click(function () {
  $('.home-right').fadeTo(0.4, 200);
})

$('.works figure').click(function () {
  $(this).toggleClass('enlarge').siblings().removeClass('enlarge');
});
