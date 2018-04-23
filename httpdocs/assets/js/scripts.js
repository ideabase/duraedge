// JavaScript Goes Here //


$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});



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
