/**
 * Hide navbar on scroll down.
 */
var didScroll,
    lastScrollY = 0,
    delta = 5,
    navbar = document.querySelector('.navbar'),
    navbarHeight = navbar.offsetHeight;

window.onscroll = function (event) {
    didScroll = true;
};

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var sy = window.scrollY;

    if (Math.abs(lastScrollY - sy) <= delta) {
        return;
    }

    if (sy > lastScrollY && sy > navbarHeight) {
        navbar.classList.remove('nav-down');
        navbar.classList.add('nav-up');
    } else {
        navbar.classList.remove('nav-up');
        navbar.classList.add('nav-down');
    }
    lastScrollY = sy;
}
