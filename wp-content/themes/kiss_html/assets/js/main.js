
(function ($) {
	"use strict";
////////load/////////////////////////////
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
	///////////////////////////////////////
	$("#custom-close").modal({
		closeClass: 'icon-remove',
		closeText: '!'
	});

	/// slider////

	$('.why_block').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		arrows: false,
		responsive: [
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.our_team_slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		arrows: false,
		responsive: [
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.blog_slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		arrows: false,
		responsive: [
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.banner_w3lspvt').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		dots: true,
		arrows: false
	});

	$(window).scroll(function() {
		if ($(this).scrollTop() > 1) {
			$('.logo').addClass('logo_scroll');
			$('.header .phone-mobile').addClass('phone-mobile_scroll');
			$('.toggle[for="drop"]').addClass('toggle_scroll');
		}
		else {
			$('.logo').removeClass('logo_scroll');
			$('.header .phone-mobile').removeClass('phone-mobile_scroll');
			$('.toggle[for="drop"]').removeClass('toggle_scroll');
		}
	});

	new WOW().init();

})(jQuery);