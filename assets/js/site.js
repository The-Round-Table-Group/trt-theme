(function($) {
    // get/set Cookies (1st party cookies)
    window.addEventListener('load', function() {
        // Check if the user already closed the banner
        Cookies.get('trt_notice_closed') ? $('.notice-wrap').hide() : $('.notice-wrap').show();

        // Hide banner and set cookie to keep notice closed
        $('#close').on('click', function() {
            $('.notice-wrap').hide();
            Cookies.set('trt_notice_closed', true, { sameSite: 'strict', expires: 14 });
        });
    });

    // main
    $(document).ready(function() {

        // Initialize AOS
        AOS.init({
            once: true,
            easing: 'ease-out',
            duration: 1000
        });

        // Initialize Slick Slider (for clients)
        $('.custom-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 3000,
            infinite: true,
            arrows: false,
            pauseOnHover: false,
            pauseOnFocus: false,
            swipeToSlide: true,
            waitForAnimate: false,
            responsive: [
                {
                    breakpoint: 860,
                    settings: { slidesToShow: 3 }
                },
                {
                    breakpoint: 580,
                    settings: { slidesToShow: 2 }
                }
            ]
        });

        // Initialize slick slider (for about page)
        // $('.about-slider').slick({
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     autoplay: true,
        //     autoplaySpeed: 5000,
        //     pauseOnHover: true,
        //     fade: true,
        //     infinite: true,
        //     arrows: true,
        //     dots: false,
        //     appendArrows: $('.slider-nav'),
        //     prevArrow: $('.slick-prev'),
        //     nextArrow: $('.slick-next')
        // });

        $(function navMenuEvents() {
            // mega-menu dropdown / slide reveal
            var menu = $('.mega-menu__wrapper');
            var panel = $('.mega-menu__right-panel');

            $('#toggle-menu').on('click', function() {
                $(menu).removeClass('aos-animate'); // remove animation
                $(panel).removeClass('aos-animate'); // remove animation

                // menu animation and toggle
                $('#toggle-menu span').toggleClass('rotate-chevron');
                $('.site-nav--menu').slideToggle(400);

                // re-add the animation on a delay
                setTimeout(function() {
                    $(menu).addClass('aos-animate'); // add animation back
                    $(panel).addClass('aos-animate'); // add animation back
                }, 200);
            });

            // Add active class to menu item based on URL path
            var path = location.pathname.split('/'); // url path array

            if (path[1] !== '') {
                // dev
                $('.link-item[href^="http://trt-group.local/' + path[1] + '"]').addClass('active');
                $('.footer-menu--link[href^="http://trt-group.local/' + path[1] + '"]').addClass('active');

                // prod
                // $('.link-item[href^="https://trt.group/' + path[1] + '"]').addClass('active');
                // $('.footer-menu--link[href^="https://trt.group/' + path[1] + '"]').addClass('active');
            }
        });


        // Smooth scroll to anchor links
        // $('a[href*="#"]')
		// .not('[href="#"]')
		// .not('[href="#0"]')
        // .not('[href^="#tab"]')
		// .click(function(event) {
		// 	if (
		// 		location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
		// 		&&
		// 		location.hostname == this.hostname
		// 	) {
		// 		var target = $(this.hash);
		// 		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

		// 		if (target.length) {
		// 			event.preventDefault();

		// 			$('html, body').animate({
		// 				scrollTop: target.offset().top
		// 			}, 1000, function() {

		// 				var $target = $(target);
		// 				$target.focus();

		// 				if ($target.is(":focus")) { // Checking if the target was focused
		// 					return false;
		// 				} else {
		// 					$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		// 					$target.focus(); // Set focus again
		// 				}
		// 			});
		// 		}
		// 	}
		// });
        /** End Smooth Scroll **/

    });
})(jQuery);
