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
    
         $('.gallery').append('<div style="clear:both"></div>');
    
         var w = $(window).width();

        if(w < 768) {
            $('.page aside').insertBefore('.page main');
        }
        if(w > 768) {
            
    $('#menu-glavni-izbornik li a:contains(Naslovnica)').parent().addClass('first');
    $('#menu-glavni-izbornik li a:contains(Naslovnica)').html('<div class="home-icon"></div>');
    
            if($('.sidebar nav').length > 0 ) {
               
              $(function(){  
                  
                      var stickyTop = $('.sidebar nav').offset().top; // returns number 

                      $(window).scroll(function(){ // scroll event  

                        var windowTop = $(window).scrollTop(); // returns number

                        if (stickyTop < windowTop) {
                          $('.sidebar nav').css({ position: 'fixed', top: 47 });
                        }
                        else {
                          $('.sidebar nav').css('position','static');

                        } 

                      });
                  
                  });    
              } 
            
            
              $(function(){  
                  var stickyTop2 = $('header #nav-wrap').offset().top; // returns number 

                  $(window).scroll(function(){ // scroll event  

                    var windowTop2 = $(window).scrollTop(); // returns number
 
                    if (stickyTop2 < windowTop2) {
                      $('header #nav-wrap').css({ position: 'fixed', top: 0 });
                        
                        if(w > 1200) { 
                              $('header #nav-wrap img.logo').show(); 
                              $('header #nav-wrap .search-form').css({ position: 'fixed', top: 0, right: 50, 'display': 'none'});
                        }
                        
                    }
                    else {
                      $('header #nav-wrap').css('position','static');
                        
                        if(w > 1200) {
                              $('header #nav-wrap img.logo').hide(); 
                              $('header #nav-wrap .search-form').css({'position':'static', 'display': 'block'});
                        }
                        
                    }  

                  });
                      
              });
            
        } //if
    
    /*  SCroll */
    
if($('section.vojska.istaknuto').length > 0 ) {
        $(window).scroll(function() {
           var hT_kolbe = $('section.kolbe').offset().top,
               hH_kolbe = $('section.kolbe').outerHeight(),
               wH = $(window).height(),
               wS = $(this).scrollTop();   


           var hT_medaljica = $('section.medaljica').offset().top,
               hH_medaljica = $('section.medaljica').outerHeight();


           var hT_bezgresna = $('section.bezgresna').offset().top,
               hH_bezgresna = $('section.bezgresna').outerHeight();

           var hT_vojska = $('section.vojska.istaknuto').offset().top,
               hH_vojska = $('section.vojska.istaknuto').outerHeight();  
/*
            console.log((hT_medaljica-wH) , wS);
            console.log((hT_kolbe-wH) , wS);
            console.log((hT_vojska-wH) , wS);
            console.log((hT_bezgresna-wH) , wS);
*/
           if (wS > (hT_vojska+hH_vojska-wH)){
                $('header #nav-wrap').css('background-color','#16283c');
           } else if (wS > (hT_kolbe+hH_kolbe-wH)){
                $('header #nav-wrap').css('background-color','#000000');
           } else if (wS > (hT_medaljica+hH_medaljica-wH)){
                $('header #nav-wrap').css('background-color','#ECC847');
           } else if (wS > (hT_bezgresna+hH_bezgresna-wH)){
                $('header #nav-wrap').css('background-color','#3b82ca');
           } else if (wS > (0)){
                $('header #nav-wrap').css('background-color','#173d67');
           } 

        });
   }

    
if( $('main.main h1:not(.entry-title).length')) {
        $("main.main h1, main.main h2, main.main h3").not('main.main h1.entry-title').each(function(i) {
            var current = $(this);
            current.attr("id", "title" + i);
            $("#toc").append("<li><a id='link" + i + "' href='#title" +
                i + "' title='" + current.attr("tagName") + "'>&raquo; " + 
                current.html() + "</a></li>");
        });
        $('#toc').appendTo($('.sidebar nav .current-menu-item'));
        
    }
    
    
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-50
        }, 1000);
        return false;
      }
    }
  });
    
    var anchor_offset = [];
    var anchor_height = [];
    $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
    var amountScrolled = 300;

 $(window).scroll(function() {         
                     
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
 });
    
$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
     
   });  
    
if($('.page-template aside.sidebar').length > 0 ) {
        $(window).scroll(function() {
            
            
                $("main.main h1, main.main h2, main.main h3").not('main.main h1.entry-title').each(function(i) {
                    var off1 = $('#title' + i).offset().top; 
                          anchor_offset.push(off1);
                    var off2 = $('#title' + i).outerHeight(); 
                          anchor_height.push(off2);
                });
            
               wH = $(window).height();
               wS = $(this).scrollTop();   

        var j = 0;
    var broj_headinga = $("#toc > li").length;
        while( j < broj_headinga){
              if (wS > (anchor_offset[j]+anchor_height[j]-wH)) {
                   $('.scrolled').removeClass('scrolled');
                   $('#link'+j+'').addClass('scrolled');
            } 
            
            j++;
        }
            
        /* scroll to top */
   
});
    
}
    
})(jQuery); // Fully reference jQuery after this point.
