
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

$(document).ready(function() {
	$("#homepage-carousel").owlCarousel({
		items : 1,
		loop : true,
		autoplay : true,
		autoplayHoverPause:true,
		dots: false,
		nav: true,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		animateOut: 'slideOutDown',
    	animateIn: 'bounceInRight',
		responsive:{
			0:{
				nav:false,
			},
			768:{
				nav:true,
			}
		}
	});

	$("#article-carousel").owlCarousel({
		items : 1,
		loop : true,
		autoplay : true,
		autoplayHoverPause:true,
		dots: true,
		nav: false,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		animateOut: 'slideOutDown',
    	animateIn: 'bounceInRight',
		responsive:{
			0:{
				nav:false,
			},
			768:{
				nav:true,
			}
		}
	});
});
