$(window).load(function(){
		if($('.slider').length > 0)
		$('.slider').fractionSlider({	
			'slideTransition' : jmsslider_trans,
			'slideEndAnimation' : jmsslider_end_animate,
			'transitionIn' : jmsslider_trans_in,
			'transitionOut' : jmsslider_trans_out,
			'fullWidth' : jmsslider_full_width,
			'delay' : jmsslider_delay,
			'timeout' : jmsslider_duration,
			'speedIn' : jmsslider_speed_in,
			'speedOut' : jmsslider_speed_out,
			'easeIn' : jmsslider_ease_in,
			'easeOut' : jmsslider_ease_out,
			'controls' : jmsslider_navigation,
			'pager' : jmsslider_pagination,
			'autoChange' : jmsslider_autoplay,
			'pauseOnHover' : jmsslider_pausehover,
			'backgroundAnimation' : jmsslider_bg_animate,
			'backgroundEase' : jmsslider_bg_ease,
			'responsive' : jmsslider_responsive,
			'dimensions' : jmsslider_dimensions,
			'fullscreen' : true
		});
});
jQuery(function ($) {
    "use strict";
    if($(".product-carousel").length) {		
		var productCarousel = $(".product-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p_itemsDesktop
				},
				991:{
					items:p_itemsDesktopSmall
				},
				768:{
					items:p_itemsTablet
				},
				481:{
					items:p_itemsMobile
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin:30,
			nav: p_nav,
			dots: p_pag,
			autoplay: auto_play_carousel,
			slideSpeed: 800,
		});
	}

	"use strict";
	if($(".brand-carousel").length) {
			var brandCarousel = $(".brand-carousel");			
			var rtl = false;
			if ($("body").hasClass("rtl")) rtl = true;				
			brandCarousel.owlCarousel({
				responsiveClass:true,
				responsive:{			
					1199:{
						items:brand_itemsDesktop
					},
					991:{
						items:brand_itemsDesktopSmall
					},
					768:{
						items:brand_itemsTablet
					},
					481:{
						items:brand_itemsMobile
					},
					361:{
						items:1
					},
					0: {
						items:1
					}
				},
				rtl: rtl,
					margin: 30,
				    nav: p_nav_brand,
			        dots: p_pag_brand,
					autoplay: auto_play_brand,
					loop:true,
				    navigationText: ["", ""],
				    slideSpeed: 200
			});
		}
		"use strict";
	if($(".blog-carousel").length) {
			var blogCarousel = $(".blog-carousel");		
			var rtl = false;
			if ($("body").hasClass("rtl")) rtl = true;				
			blogCarousel.owlCarousel({
				responsiveClass:true,
				responsive:{			
					1199:{
						items:blog_itemsDesktop
					},
					991:{
						items:blog_itemsDesktopSmall
					},
					768:{
						items:blog_itemsTablet
					},
					481:{
						items:blog_itemsMobile
					},
					0: {
						items:1
					}
				},
					rtl: rtl,
					margin:30,
					nav: p_nav_blog,
			        dots: p_pag_blog,
					autoplay:auto_play_blog,
					slideSpeed: 800,	
			});
		}
	
	if($(".instagram-carousel").length) {
		var instagramCarousel = $(".instagram-carousel");
		var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;				
	instagramCarousel.owlCarousel({
		responsiveClass:true,
		responsive:{			
			1199:{
				items:7
				},
			991:{
				items:5
			},
			768:{
				items:3
			},
		
			318:{
				items:2
			}
		},
		rtl: rtl,
		margin: 10,
		nav: false,
		dots: false,
		autoplay: true,
		slideSpeed: 200,
		loop: true
	});
	}
});

