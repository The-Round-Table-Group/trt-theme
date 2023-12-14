(function($) {
    $(document).ready(function() {

        var menu = $('.hamburger');

        menu.on('click', function() {
            $(this).toggleClass('is-active');
            $('.megamenu').toggleClass('open-menu');
        });

    });
})(jQuery);
