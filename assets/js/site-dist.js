!function(e){window.addEventListener("load",(function(){Cookies.get("trt_notice_closed")?e(".notice-wrap").hide():e(".notice-wrap").show(),e("#close").on("click",(function(){e(".notice-wrap").hide(),Cookies.set("trt_notice_closed",!0,{sameSite:"strict",expires:14})}))})),e(document).ready((function(){AOS.init({once:!0,easing:"ease-out",duration:1e3}),e(".custom-slider").slick({slidesToShow:4,slidesToScroll:1,autoplay:!0,autoplaySpeed:3e3,infinite:!0,arrows:!1,pauseOnHover:!1,pauseOnFocus:!1,swipeToSlide:!0,waitForAnimate:!1,responsive:[{breakpoint:860,settings:{slidesToShow:3}},{breakpoint:580,settings:{slidesToShow:2}}]}),e((function(){var t=e(".mega-menu__wrapper"),o=e(".mega-menu__right-panel");e("#toggle-menu").on("click",(function(){e(t).removeClass("aos-animate"),e(o).removeClass("aos-animate"),e("#toggle-menu span").toggleClass("rotate-chevron"),e(".site-nav--menu").slideToggle(400),setTimeout((function(){e(t).addClass("aos-animate"),e(o).addClass("aos-animate")}),200)}));var a=location.pathname.split("/");""!==a[1]&&(e('.link-item[href^="http://trt-group.local/'+a[1]+'"]').addClass("active"),e('.footer-menu--link[href^="http://trt-group.local/'+a[1]+'"]').addClass("active"))})),e('a[href*="#"]').not('[href="#"]').not('[href="#0"]').not('[href^="#tab"]').click((function(t){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var o=e(this.hash);(o=o.length?o:e("[name="+this.hash.slice(1)+"]")).length&&(t.preventDefault(),e("html, body").animate({scrollTop:o.offset().top},1e3,(function(){var t=e(o);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()})))}}))}))}(jQuery);
//# sourceMappingURL=site-dist.js.map