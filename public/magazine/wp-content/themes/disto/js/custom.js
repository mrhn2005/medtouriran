jQuery(document).ready(function ($) {
"use strict";

/////////////////////////////////////////////////////////////////////////
//        add class current cat tab
//////////////////////////////////////////////////////////////////////////  
$(".first_class_name").on("click", function (e) {
$(this).addClass("current_cat_post").siblings().removeClass("current_cat_post");
});

/////////////////////////////////////////////////////////////////////////
//        Sticky header
//////////////////////////////////////////////////////////////////////////  
  var jl_stick;
    if ($(".jl_menu_sticky").hasClass('jl_stick')) {
        var jl_stick = $(".jl_menu_sticky").offset().top;
    }
    $(window).scroll(function() {
        var jlscroll = $(window).scrollTop();
        if (jlscroll > jl_stick) {
            $(".jl_menu_sticky.jl_stick").addClass("jl_sticky");
            var nav_height = $(".jl_menu_sticky.jl_stick").outerHeight();
            $(".jl_blank_nav").css({
                "height": nav_height
            });
        } else {
            $(".jl_menu_sticky.jl_stick").removeClass("jl_sticky");
            $(".jl_blank_nav").css({
                "height": 0
            });
        }
    });

//////////////////////////////////////////////////////////////////////////
//        Sticky
//////////////////////////////////////////////////////////////////////////  
$('.jl_sidebar .panel-grid-cell, #sidebar, .jl_left_main_3col, .jl_right_main_3col').theiaStickySidebar({
      additionalMarginTop: 0
    });

//////////////////////////////////////////////////////////////////////////
//        Menu
//////////////////////////////////////////////////////////////////////////  

$('.menu_mobile_icons, .mobile_menu_overlay').on("click", function() {
        $('#content_nav').toggleClass('jl_mobile_nav_open');
        $('.mobile_menu_overlay').toggleClass('mobile_menu_active');
        $('.mobile_nav_class').toggleClass('active_mobile_nav_class');
});

$("#mobile_menu_slide .menu-item-has-children > a").append($("<span/>",{class:'arrow_down'}).html('<i class="fa fa-angle-down" aria-hidden="true"></i>')); 
$('#mobile_menu_slide .arrow_down i').on("click",  function() {
            var $submenu = $(this).closest('.menu-item-has-children').find(' > .sub-menu');
            $(this).toggleClass("fa fa-angle-down").toggleClass("fa fa-angle-up");
            if ( $submenu.hasClass('menu-active-class') ) {
                $submenu.removeClass('menu-active-class');
            } else {
                $submenu.addClass('menu-active-class');
            }
            return false;
        });


$('.search_form_menu_personal_click').on("click", function() {
      $('.search_form_menu_personal').toggleClass('search_form_menu_personal_active');
      $('.mobile_nav_class').toggleClass('active_mobile_nav_class');
});

$('.single_post_share_icons').on("click", function() {
      $('.single_post_share_wrapper').toggleClass('share_single_active');
      $('.mobile_nav_class').toggleClass('active_mobile_nav_class');
});


$('.search_form_menu_click').on('click', function ( e ) {
    e.preventDefault();
      $('.search_form_menu').toggle();
    $(this) .toggleClass('active');
    });


 if ( $('.sb-toggle-left').length ) {
            $('.sb-toggle-left').on("click",  function(){
                $('#nav-wrapper').toggle(100);
            } ); 
            $("#menu-main-menu .menu-item-has-children > a").append($("<span/>",{class:'arrow_down'}).html('<i class="fa fa-angle-down"></i>'));     
        }
        
        $('#nav-wrapper .menu .arrow_down').on("click",  function() {
            var $submenu = $(this).closest('.menu-item-has-children').find(' > .sub-menu');
            
            if ( $submenu.hasClass('menu-active-class') ) {
                $submenu.removeClass('menu-active-class');
            } else {
                $submenu.addClass('menu-active-class');
            }
            
            return false;
        });


    $('#menu_wrapper li').hover(function(){
    var marginAdjust = 100;
    var parentElement = $(this).parent();
    
    var navPosition = $(parentElement).position();
    var navWidth = $(parentElement).width();
    var navRight = navPosition.left+navWidth;
    
    var position = $(this).position();
    var thisWidth = $(this).children('ul').width();
    var thisRight = position.left+thisWidth-marginAdjust;
    
    if (thisRight > navWidth) $(this).children('ul').addClass('jl_menu_tl');
    });

 
//////////////////////////////////////////////////////////////////////////
//        Grid images
//////////////////////////////////////////////////////////////////////////  

$(".justified-gallery-post").justifiedGallery({
    rowHeight: 200,
    captions: false,
    margins : 1,
    lastRow : 'justify',
    fixedHeight : false
  });

 $('.justified-gallery-post, .woocommerce-product-gallery__image').magnificPopup({
  type:'image', 
  delegate: 'a',
  gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1]
    }
    

});

//////////////////////////////////////////////////////////////////////////
//        Go to top
//////////////////////////////////////////////////////////////////////////

  jQuery(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".jl_large_menu_logo").addClass("jl_custom_height_small");
        $(".options_dark_header").addClass("dark_header_menu");
    } else {
        $(".jl_large_menu_logo").removeClass("jl_custom_height_small");
        $(".options_dark_header").removeClass("dark_header_menu");
    }


    if (jQuery(this).scrollTop() > 500) {
      jQuery("#go-top").fadeIn();
    } else {
      jQuery("#go-top").fadeOut();
    }
  });
  
  $("#go-top").on("click", function () {
    jQuery("body,html").animate({ scrollTop: 0 }, 800 );
    return false;
  }); 

//////////////////////////////////////////////////////////////////////////
//        Video responsive
//////////////////////////////////////////////////////////////////////////

fluidvids.init({
      selector: 'iframe',
      players: ['www.youtube.com', 'player.vimeo.com']
    }); 



//////////////////////////////////////////////////////////////////////////
//        Slider and carousel
//////////////////////////////////////////////////////////////////////////

//Newsticker
    $('.home_newsticker').slick({
    dots: false,
	rtl: true,
    speed: 600,
    arrows: true,
    autoplaySpeed: 6000,
    autoplay: false,
    pauseOnHover: true,
    adaptiveHeight: true,
    fade: true,
    prevArrow:'<div class="jelly_pro_post_arrow_left"><i class="fa fa-angle-left"></i></div>',
    nextArrow:'<div class="jelly_pro_post_arrow_right"><i class="fa fa-angle-right"></i></div>',
    slidesToShow: 1,
    slidesToScroll: 1
  });
 

  $('.jl_home_carousel').slick({
  slidesToShow: 4,
  rtl: true,
  slidesToScroll: 1,
  centerPadding: '150px',
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 1196,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerPadding: '150px',
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerPadding: '70px',
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '70px',
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '70px',
      }
    }
  ]
});  

 
  $('.home_slider_post_tab_nav').slick({
  slidesToShow: 6,
  rtl: true,
  slidesToScroll: 1,
  centerPadding: '0px',
  asNavFor: '.home_slider_post_tab',
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 1196,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }
  ]
});  


//Carousel 2 post
$('.jl_car_2col, .builder_2_carousel_post').slick({
    dots: false,
	rtl: true,
    speed: 800,
    autoplaySpeed: 8000,
    autoplay: true,
    pauseOnHover: true,
    adaptiveHeight: true,
    prevArrow:'<div class="jelly_pro_post_arrow_left"><i class="fa fa-angle-left"></i></div>',
    nextArrow:'<div class="jelly_pro_post_arrow_right"><i class="fa fa-angle-right"></i></div>',
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]

  });

//Carousel 3 post
$('.jl_car_3col, .builder_3_carousel_post').slick({
    dots: false,
	rtl: true,
    speed: 800,
    autoplaySpeed: 8000,
    autoplay: true,
    pauseOnHover: true,
    adaptiveHeight: true,
    prevArrow:'<div class="jelly_pro_post_arrow_left"><i class="fa fa-angle-left"></i></div>',
    nextArrow:'<div class="jelly_pro_post_arrow_right"><i class="fa fa-angle-right"></i></div>',
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]

  });

//Carousel 4 post
$('.builder_four_carousel_post, .jl_car_4col').slick({
    dots: false,
	rtl: true,
    speed: 800,
    autoplaySpeed: 8000,
    autoplay: true,
    pauseOnHover: true,
    adaptiveHeight: true,
    prevArrow:'<div class="jelly_pro_post_arrow_left"><i class="fa fa-angle-left"></i></div>',
    nextArrow:'<div class="jelly_pro_post_arrow_right"><i class="fa fa-angle-right"></i></div>',
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]

  });

//Carousel 5 post
$('.footer_small_5_carousel').slick({
    dots: true,
    speed: 800,
	rtl: true,
    autoplaySpeed: 8000,
    autoplay: false,
    pauseOnHover: true,
    adaptiveHeight: true,
    arrows: false,
    prevArrow:'<div class="jelly_pro_post_arrow_left"><i class="fa fa-angle-left"></i></div>',
    nextArrow:'<div class="jelly_pro_post_arrow_right"><i class="fa fa-angle-right"></i></div>',
    slidesToShow: 6,
    slidesToScroll: 6,
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
  ]

  });

       
//Slider large
$('.single-item-slider, .full-slider-main-home, .slider_widget_post').slick({
    dots: false,
    speed: 600,
	rtl: true,
    autoplaySpeed: 6000,
    autoplay: true,
    pauseOnHover: true,
    adaptiveHeight: true,
    prevArrow:'<div class="jelly_pro_post_arrow_left"><i class="fa fa-angle-left"></i></div>',
    nextArrow:'<div class="jelly_pro_post_arrow_right"><i class="fa fa-angle-right"></i></div>',
    slidesToShow: 1,
    slidesToScroll: 1
  });

//Slider large tab header
$('.home_slider_header_tab').slick({
    dots: false,
	rtl: true,
    speed: 600,
    autoplaySpeed: 6000,
    autoplay: true,
    pauseOnHover: true,
    adaptiveHeight: true,
    fade: true,
    prevArrow:'',
    nextArrow:'',
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.home_slider_header_tab_nav'
    
  });
  
$('.home_slider_header_tab_nav').slick({
  slidesToShow: 4,
  rtl: true,
  slidesToScroll: 4,
  asNavFor: '.home_slider_header_tab',
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 1196,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    }
  ]
});


 var $status = $('.pagingInfo');
    var $slickElement = $('.large_center_slider_text');

    $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + '/' + slick.slideCount);
    });

//Large full slider
 $('.large_center_slider_text').slick({
    dots: true,
    speed: 600,
	rtl: true,
    autoplaySpeed: 6000,
    autoplay: true,
    pauseOnHover: false,
    adaptiveHeight: true,
    prevArrow:'<div class="jelly_pro_post_arrow_left"><i class="fa fa-angle-left"></i>Prev</div>',
    nextArrow:'<div class="jelly_pro_post_arrow_right">Next<i class="fa fa-angle-right"></i></div>',
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    cssEase: 'linear'
  });

//Large full slider
 $('.large_center_slider').slick({
    dots: true,
    speed: 600,
	rtl: true,
    autoplaySpeed: 6000,
    autoplay: true,
    pauseOnHover: false,
    adaptiveHeight: true,
    prevArrow:'<div class="jelly_pro_post_arrow_left"><i class="fa fa-angle-left"></i></div>',
    nextArrow:'<div class="jelly_pro_post_arrow_right"><i class="fa fa-angle-right"></i></div>',
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    cssEase: 'linear'
  });


$('.large_center_mode_slider').slick({
  centerMode: true,
  speed: 800,
  rtl: true,
  autoplaySpeed: 8000,
  autoplay: false,
  centerPadding: '250px',
  pauseOnHover: false,
  adaptiveHeight: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow:'<div class="jelly_pro_post_arrow_left"><i class="fa fa-angle-left"></i></div>',
  nextArrow:'<div class="jelly_pro_post_arrow_right"><i class="fa fa-angle-right"></i></div>',
  responsive: [
  {
      breakpoint: 1300,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '150px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 900,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    }
  ]
});

//////////////////////////////////////////////////////////////////////////
//        Masonry Grid
//////////////////////////////////////////////////////////////////////////
  
 var $container = $('#content_masonry, #content-large-main-grid-post');
    $container.imagesLoaded( function(){
        $container.masonry({
            columnWidth: '.grid-sizer',
            itemSelector : '.box',
            transitionDuration: '0.3s',
			isOriginLeft: false,
            gutter: 0
        });
    });

//////////////////////////////////////////////////////////////////////////
//        Masonry Grid no margin
//////////////////////////////////////////////////////////////////////////

    var $container_builder = $('.container_grid_post_home');
    $container_builder.imagesLoaded( function(){
        $container_builder.masonry({
            columnWidth: '.grid-sizer',
            itemSelector : '.box',
            transitionDuration: '0.3s',
			isOriginLeft: false,
            gutter: 2
        });
    });

//////////////////////////////////////////////////////////////////////////
//        load more
//////////////////////////////////////////////////////////////////////////

  $('#content_masonry').infinitescroll({
    navSelector  : "div.pagination-more",            
    nextSelector : "div.more-previous a",               
    itemSelector : "#content_masonry div.box",
   loading: {
          msgText: "",
          finishedMsg: '<span></span> <style type="text/css">#infscr-loading, .pagination-more{ display:none !important;}</style>'
        } 
  },

      function( newElements ) {
      var jQuerynewElems = jQuery( newElements ).css({ opacity: 0 });
      jQuerynewElems.imagesLoaded(function(){      
      jQuerynewElems.animate({ opacity: 1 });
          $('#content_masonry').masonry('appended', jQuerynewElems, true );   
       $('#content_masonry').masonry({
            columnWidth: '.grid-sizer',
            itemSelector : '.box',
            gutter: 0
        });
    
        });          
                 
  });

jQuery(window).unbind('.infscr');
  jQuery('div.more-previous a').on("click", function(){jQuery('#content_masonry').infinitescroll('retrieve');
  return false;
  });

//////////////////////////////////////////////////////////////////////////
//        Infinite scroll
//////////////////////////////////////////////////////////////////////////

  $('.scroll_more_main_wrapper').infinitescroll({
    navSelector  : ".jelly-infinite-load",            
    nextSelector : ".jelly-infinite-load a",               
    itemSelector : ".scroll_more_main_wrapper div.box",
   loading: {
          msgText: "",
          finishedMsg: '<span></span><style type="text/css">.jelly-infinite-load{ display:none !important;}</style>'
        } 
  },

      function( newElements ) {
       
      var jQuerynewElems = jQuery( newElements ).css({ opacity: 0 });     
      jQuerynewElems.imagesLoaded(function(){
      jQuerynewElems.animate({ opacity: 1 });
       $('.scroll_more_main_wrapper').masonry('appended', jQuerynewElems, true );   
       $('.scroll_more_main_wrapper').masonry({
            columnWidth: '.grid-sizer',
            itemSelector : '.box',
            gutter: 0
       });

    
        });          
                 
  });
  
   

});


