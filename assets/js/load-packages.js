window.onload = function() {
    AOS.init({
        duration: 750,
        offset: 100,
        once: true,
        mirror: false,
        easing: 'ease-in-out'
    });

    var path = location.pathname.split('/');

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
