// JavaScript Goes Here //

/*
$(function() {
    var photo = $(".feature__image");
    $('.content').scroll(function() {
        var scroll = $('.content').scrollTop();

        if (scroll >= 200) {

            photo.removeClass('imageNUMBER').addClass("image1");
        } else {
            photo.removeClass("image1").addClass('image0');
        }
    });
});
*/

$(".owl-carousel").owlCarousel({
  nav : false,
  autoplay: true,
  	  autoplayHoverPause: true,
  	  autoplayTimeout: 5000,
  	  autoplaySpeed: 1500,
  	  responsiveClass: true,
  	  items:1,
  	  loop:true
  });
