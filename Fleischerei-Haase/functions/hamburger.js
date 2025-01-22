document.addEventListener('DOMContentLoaded', function () {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navLinks = document.querySelector('.header-nav ul');

    hamburgerMenu.addEventListener('click', () => {
        navLinks.classList.toggle('nav-active');
        const expanded = hamburgerMenu.getAttribute('aria-expanded') === 'true' || false;
        hamburgerMenu.setAttribute('aria-expanded', !expanded);
    });
});
