import './bootstrap';
import { createIcons } from 'lucide';

// Initialize Lucide icons
document.addEventListener('DOMContentLoaded', () => {
    createIcons();
});

// Lazy load images
document.addEventListener('DOMContentLoaded', () => {
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });

        lazyImages.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback for older browsers
        lazyImages.forEach(img => img.classList.add('loaded'));
    }
});

// Presentation mode toggle
window.togglePresentationMode = function() {
    const scroller = document.getElementById('main-scroller');
    const btn = document.getElementById('pres-btn');
    
    if (!scroller || !btn) return;
    
    // Toggle Class
    scroller.classList.toggle('presentation-active');
    
    // Ubah Teks Button
    if (scroller.classList.contains('presentation-active')) {
        btn.innerText = "EXIT SLIDE MODE";
        btn.style.backgroundColor = "#ccff00";
        btn.style.boxShadow = "4px 4px 0px 0px black";
        // Reset scroll ke atas
        window.scrollTo(0, 0);
    } else {
        btn.innerText = "TOGGLE SLIDE MODE";
        btn.style.backgroundColor = "white";
        btn.style.boxShadow = "4px 4px 0px 0px white";
    }
};