import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', function () {
        let currentSection = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (window.pageYOffset >= sectionTop - 50 && window.pageYOffset < sectionTop + sectionHeight - 50) {
                currentSection = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            if (link.getAttribute('href').substring(1) === currentSection) {
                link.classList.add('text-white', 'rounded');
                link.classList.remove('text-white-900/50');
            } else {
                link.classList.add('text-white-900/50');
                link.classList.remove('text-white', 'rounded');
            }
        });
    });
});
