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
            deleteSpeed: 35,
            delay: 75,
            loop: false
        });

        typewriter
            .pauseFor(1200)
            .typeString('Disruptive Branding')
            .pauseFor(1200)
            .deleteChars(19)
            .typeString('Passionate Communities')
            .pauseFor(1200)
            .deleteChars(22)
            .typeString('Unforgettable Experiences')
            .pauseFor(1200)
            .deleteChars(25)
            .typeString('Compelling Aesthetics')
            .pauseFor(1200)
            .deleteChars(22)
            .typeString('Remarkable Narratives')
            .pauseFor(1200)
        .start();
    }
};
