!function(e){window.addEventListener("load",(function(){Cookies.get("trt_notice_closed")?e(".notice-wrap").hide():e(".notice-wrap").show(),e("#close").on("click",(function(){e(this).parent().hide(),Cookies.set("trt_notice_closed",!0,{sameSite:"strict",expires:14})}))})),e(document).ready((function(){AOS.init({once:!0,easing:"ease-in-out",offset:100}),e((function(){var t=e("#toggle-menu");t.on("click",(function(){e(this).removeClass("aos-animate"),e("#toggle-menu span").toggleClass("rotate-chevron"),e(".site-nav--menu").slideToggle(750),setTimeout((function(){e(t).addClass("aos-animate")}),750)}));var n=location.pathname.split("/");""!==n[1]&&e('.nav-link[href^="/'+n[1]+'"]').addClass("active")}))}))}(jQuery);
//# sourceMappingURL=site-dist.js.map