(function($) {
    $(document).ready(function() {

        // AOS.init({
        //     once: true,
        //     easing: 'ease-in-out'
        // });

        /**
         * Set cookie when notice banner is closed
        */
        $(function noticeBanner() {
            var trt_notice_banner_cookie = 'trt_notice_closed';

            // Check if the user already closed the banner
            if (window.localStorage.getItem(trt_notice_banner_cookie)) {
                $('.notice-wrap').hide();
            } else {
                $('#close').on('click', function() {
                    window.localStorage.setItem(trt_notice_banner_cookie, true);
                    $(this).parent().hide();
                });
            }
		});

        /**
         * Set active menu item based on URL path
        */
        $(function navMenuEvents() {

            // mega-menu dropdown / slide reveal
            var link_item = $('#toggle-menu');

            link_item.on('click', function() {
                $(this).removeClass('aos-animate');
                $('#toggle-menu span').toggleClass('rotate-chevron');
                // slide menu down

                // re-add the animation on a delay
                setTimeout(function() {
                    $(link_item).addClass('aos-animate');
                }, 400);
            });

            // Add active class to menu item based on URL path
            var path = location.pathname.split('/'); // url path array

            if (path[1] !== '') {
                $('.link[href^="/' + path[1] + '"]').addClass('active');
            }
        });

        /**
         * Smooth scroll to anchor links
        */
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
