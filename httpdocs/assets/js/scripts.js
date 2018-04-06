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


$(document).ready(function(){

        $('ul.tabs li').click(function(){
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current-link');
            $('.tab-content').removeClass('current');

            $(this).addClass('current-link');
            $("#"+tab_id).addClass('current');
        })
});

$(document).ready(function(){

        $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current-tab');
        $('.tab-content').removeClass('current');

        $(this).addClass('current-tab');
        $("#"+tab_id).addClass('current');
        })
});
