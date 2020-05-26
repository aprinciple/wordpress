$(document).ready(function () {
	/* Simple-Slider */
	$('.owl-simple').owlCarousel({
		loop: true,
		margin: 15,
		stagePadding: 0,
		nav: true,
		navText: 
			[
				'<img src="/wp-content/themes/maro/assets/img/icons/prev-tall.svg">', 
				'<img src="/wp-content/themes/maro/assets/img/icons/next-tall.svg">'
			],
		dots: false,
		autoplay: false,
		smartSpeed: 1000,
		autoplayTimeout: 2000,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 4
			}
		}
	});

	/* 3D-Slider */
	$('.owl-3d').on('initialized.owl.carousel', function (e) {
		var idx = e.item.index;
		$('.owl-item').eq(idx).addClass('big');
		$('.owl-item').eq(idx - 1).addClass('medium');
		$('.owl-item').eq(idx + 1).addClass('medium');
	});
	$('.owl-3d').owlCarousel({
		loop: true,
		margin: 0,
		stagePadding: 0,
		nav: true,
		navText: [
			'<img src="/wp-content/themes/maro/assets/img/icons/prev-long.svg">', 
			'<img src="/wp-content/themes/maro/assets/img/icons/next-long.svg">'
		],
		dots: false,
		autoplay: false,
		smartSpeed: 1000,
		autoplayTimeout: 2000,
		animateOut: 'fadeOut',
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 2
			}
		}

	});
	$('.owl-3d').on('translate.owl.carousel', function (e) {
		var idx = e.item.index;
		$('.owl-item.big').removeClass('big');
		$('.owl-item.medium').removeClass('medium');
		$('.owl-item').eq(idx).addClass('big');
		$('.owl-item').eq(idx - 1).addClass('medium');
		$('.owl-item').eq(idx + 1).addClass('medium');
	});
});