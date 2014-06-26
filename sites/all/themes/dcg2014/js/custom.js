(function ($) {
  Drupal.behaviors.theming = {
    attach: function (context, settings) {

      // slides
      $('#content #content-inner').flexslider({
        selector: ".slidebox > .slide",
        animation: 'slide',
        pauseOnHover: true,
        slideshowSpeed: 4000,
        slideshow: false,
        animationSpeed: 300,
        smoothHeight: true,
        minItems: 1,
        maxItems: 1,
        move: 1,
        directionNav: false,
        animationLoop: true,
      });
      $('#content-inner ol.flex-control-nav').prependTo('#content');

      // pager
      $('#content ol.flex-control-nav li:first-child a').html('');
      $('#content ol.flex-control-nav li:nth-child(2) a').html('location');
      $('#content ol.flex-control-nav li:nth-child(3) a').html('sponsoring');
      $('#content ol.flex-control-nav li:last-child a').html('newsletter');

      // countdown moving
      $('#cntdwn').prependTo('.slide.time .slide-inner');

      // slide height
      // $(window).load(function(){
      //   var windowWidth = $(window).width();
      //   var windowHeight = $(window).height();
      //   if (windowWidth > 720) {
      //     $('.slide').height(windowHeight-200);
      //   }
      // });
      // $(window).resize(function(){
      //   var windowWidth = $(window).width();
      //   var windowHeight = $(window).height();
      //   if (windowWidth > 720) {
      //     $('.slide').height(windowHeight-200);
      //   }   
      // });

      // iframe height
      $(window).load(function(){
        var windowWidth = $(window).width();
        var slideHeight = $('.location').height();
        if (windowWidth > 940) {
          $('.location iframe').height(slideHeight-300);
        } else if (windowWidth <= 940) {
          $('.location iframe').height(slideHeight-350);
        } else if (windowWidth <= 740) {
          $('.location iframe').height(slideHeight-400);
        }
      });
      $(window).resize(function(){
        var windowWidth = $(window).width();
        var slideHeight = $('.location').height();
        if (windowWidth > 940) {
          $('.location iframe').height(slideHeight-300);
        } else if (windowWidth <= 940) {
          $('.location iframe').height(slideHeight-350);
        } else if (windowWidth <= 740) {
          $('.location iframe').height(slideHeight-400);
        }
      });


    }
  };
})(jQuery);