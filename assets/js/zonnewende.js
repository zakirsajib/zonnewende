$j = jQuery.noConflict();

$j(document).ready(function() {
	
	
    /*-------------------------------------------------------------------*/
    /*  1. Preloader. Requires jQuery jpreloader plugin.
    /*-------------------------------------------------------------------*/
        $j('body').jpreLoader({
            showPercentage: false,
            loaderVPos: '50%'
        });
	
	
    /*-------------------------------------------------------------------*/
    /*  1. Dropdown glyphicon icon adding. Requires bootstrap.
    /*-------------------------------------------------------------------*/
	$j('.dropdown-menu > li > a').prepend('<span class="glyphicon glyphicon-menu-right"></span>&nbsp;&nbsp;');
	
	$j('aside ul li a, .error-sidebar .widget ul li a').append('<span class="glyphicon glyphicon-menu-right pull-right"></span>');
	
	/*-------------------------------------------------------------------*/
    /*  1. owlCarousel. Requires owlCarousel.
    /*-------------------------------------------------------------------*/
	
	$j('.home-slideshow').owlCarousel({
	    loop:true,
	    center: true,
	    margin:0,
	    nav:false,
	    autoplay:true,
	    lazyLoad:true,
	    items:1,
	    animateOut: 'fadeOut',
		animateIn: 'fadeIn',
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	    
	})
	
	
	$j('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:false,
	    autoplay:true,
	    lazyLoad:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:5
	        }
	    }
	})
	
	/*-------------------------------------------------------------------*/
    /*  1. magnificPopup. Requires magnificPopup.
    /*-------------------------------------------------------------------*/
	
	$j('.owl-carousel').magnificPopup({
		type: 'image',
		delegate: 'a',
		gallery:{
			enabled:true,
			preload: [0,2],
            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
            tPrev: 'Previous Portfolio',
            tNext: 'Next Portfolio'
  		}
	});
	
	$j('.popup-youtube').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,

          fixedContentPos: false
        });
		
	/*-------------------------------------------------------------------*/
    /*  1. Bootstrap class img-responsive. Requires Bootstrap.
    /*-------------------------------------------------------------------*/
	$j('.entry-content > p > img').addClass('img-responsive');
	
});