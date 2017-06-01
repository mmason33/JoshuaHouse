/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        $(document).ready(function() {
<<<<<<< HEAD
            $(".hero--slider").lightSlider({
                item: 1,
                autoWidth: false,
                slideMove: 1, // slidemove will be 1 if loop is true
                slideMargin: 0,

                addClass: '',
                mode: "slide",
                useCSS: true,
                cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
                easing: 'linear', //'for jquery animation',////

                speed: 1000, //ms'
                auto: false,
                pauseOnHover: false,
                loop: false,
                slideEndAnimation: true,
                pause: 2000,

                keyPress: false,
                controls: true,
                prevHtml: '',
                nextHtml: '',

                rtl:false,
                adaptiveHeight:false,

                vertical:false,
                verticalHeight:500,
                vThumbWidth:100,

                thumbItem:10,
                pager: true,
                gallery: false,
                galleryMargin: 5,
                thumbMargin: 5,
                currentPagerPosition: 'middle',

                enableTouch:true,
                enableDrag:true,
                freeMove:true,
                swipeThreshold: 40,

                responsive : [],

                onBeforeStart: function (el) {},
                onSliderLoad: function (el) {},
                onBeforeSlide: function (el) {},
                onAfterSlide: function (el) {},
                onBeforeNextSlide: function (el) {},
                onBeforePrevSlide: function (el) {}
            });

            AOS.init({
              offset: 200,
              duration: 600,
              easing: 'ease-in-sine',
              delay: 100,
            });

            $( '#my-slider' ).sliderPro({
=======
          AOS.init({
            offset: 200,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 100,
          });


          $( '#my-slider' ).sliderPro({
>>>>>>> cd9de5b3fe03c4e48e45adcf21185471c4fd20e2
              width: 1920,
              height: $(window).height(),
              autoplay: false,
              loop: false,
              slideAnimationDuration: 1500,
              orientation: 'horizontal',
<<<<<<< HEAD
              fade: true,
=======
              fade: false,
>>>>>>> cd9de5b3fe03c4e48e45adcf21185471c4fd20e2
              fadeDuration: 1000,
              fadeArrows: true,
              arrows: true,
              buttons: true
<<<<<<< HEAD
            });

            $('#pagepiling').pagepiling({
                menu: null,
=======
          });



          $('#pagepiling').pagepiling({
        	    menu: null,
>>>>>>> cd9de5b3fe03c4e48e45adcf21185471c4fd20e2
                direction: 'horizontal',
                verticalCentered: true,
                sectionsColor: [],
                anchors: [],
<<<<<<< HEAD
                scrollingSpeed: 1000,
=======
                scrollingSpeed: 700,
>>>>>>> cd9de5b3fe03c4e48e45adcf21185471c4fd20e2
                easing: 'swing',
                loopBottom: false,
                loopTop: false,
                css3: true,
                navigation: {
                    'textColor': '#000',
                    'bulletsColor': '#000',
<<<<<<< HEAD
                    'position': 'right',
                    'tooltips': ['section1', 'section2', 'section3', 'section4']
                },
                normalScrollElements: null,
=======
                    'position': 'right'
                },
               	normalScrollElements: null,
>>>>>>> cd9de5b3fe03c4e48e45adcf21185471c4fd20e2
                normalScrollElementTouchThreshold: 5,
                touchSensitivity: 5,
                keyboardScrolling: true,
                sectionSelector: '.section',
                animateAnchor: false,

<<<<<<< HEAD
                //events
                onLeave: function(index, nextIndex, direction){},
                afterLoad: function(anchorLink, index){},
                afterRender: function(){},
            });
=======
        		//events
        		onLeave: function(index, nextIndex, direction){},
        		afterLoad: function(anchorLink, index){},
        		afterRender: function(){},
        	});
>>>>>>> cd9de5b3fe03c4e48e45adcf21185471c4fd20e2

        });

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
