window.onload = function() {
    AOS.init({
        duration: 750,
        offset: 50,
        once: true,
        mirror: false,
        easing: 'ease-out'
    });

    // get url path and split into array
    var path = location.pathname.split('/');

    // url pattern - https://site.com/[1]/[2]/[3]
    if ( path[1] === '' ) {
        var app = document.getElementById('hero-text');

        var typewriter = new Typewriter(app, {
            deleteSpeed: 20,
            delay: 75,
            loop: false
        });

        typewriter
            .pauseFor(1750)
            .typeString('Resonant Branding')
            .pauseFor(1400)
            .deleteChars(17)
            .typeString('Unforgettable Experiences')
            .pauseFor(1400)
            .deleteChars(25)
            .typeString('Compelling Aesthetics')
            .pauseFor(1400)
        .start();
    }
};
