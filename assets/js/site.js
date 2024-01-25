(function($) {
    // get/set Cookies (1st party cookies)
    window.addEventListener('load', function() {
        // Check if the user already closed the banner
        Cookies.get('trt_notice_closed') ? $('.notice-wrap').hide() : $('.notice-wrap').show();

        /**
         * Set cookie when notice banner is closed
        */
        $('#close').on('click', function() {
            $(this).parent().hide();
            // we need to set the cookie on the server using sameSite: 'strict' instead of 'lax'
            Cookies.set('trt_notice_closed', true, { sameSite: 'strict', expires: 14 });
        });
    });

    // main
    $(document).ready(function() {

        // initialize AOS
        AOS.init({
            once: true,
            easing: 'ease-in-out',
            offset: 100
        });

        /**
         * Set active menu item based on URL path
        */
        $(function navMenuEvents() {

            // mega-menu dropdown / slide reveal
            var link_item = $('#toggle-menu');

            link_item.on('click', function() {
                $(this).removeClass('aos-animate'); // remove animation

                // menu animation and toggle
                $('#toggle-menu span').toggleClass('rotate-chevron');
                $('.site-nav--menu').slideToggle(750);

                // re-add the animation on a delay
                setTimeout(function() {
                    $(link_item).addClass('aos-animate');
                }, 750);
            });

            // Add active class to menu item based on URL path
            var path = location.pathname.split('/'); // url path array

            if (path[1] !== '') {
                $('.nav-link[href^="/' + path[1] + '"]').addClass('active');
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
