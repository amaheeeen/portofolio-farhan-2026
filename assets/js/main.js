/**
 * Farhan Kholid Portfolio - Main JavaScript
 * Menangani:
 * 1. Toggle Menu Navigasi Mobile
 * 2. Animasi Scroll-Triggered (Fade-in / Slide)
 */

document.addEventListener('DOMContentLoaded', () => {
    // ----------------------------------------------------
    // 1. Mobile Menu Toggle
    // ----------------------------------------------------
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Sembunyikan menu saat link di klik (untuk navigasi dalam halaman atau smooth scroll)
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                // Hanya sembunyikan jika layar adalah mobile
                if (window.innerWidth < 768) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });
    }

    // ----------------------------------------------------
    // 2. Scroll-Triggered Animation (Intersection Observer)
    // ----------------------------------------------------
    const elementsToAnimate = document.querySelectorAll('.fade-in-up');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target); // Hentikan observasi setelah terlihat
            }
        });
    }, {
        // threshold: 0.1, // Mulai animasi saat 10% elemen terlihat
        rootMargin: "0px 0px -100px 0px" // 100px dari bawah viewport
    });

    elementsToAnimate.forEach(element => {
        observer.observe(element);
    });

    // ----------------------------------------------------
    // 3. Smooth Scrolling (Fallback/Enhancement)
    // ----------------------------------------------------
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

});