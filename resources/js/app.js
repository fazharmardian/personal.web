import "./bootstrap";
import "bootstrap";

import AOS from "aos";
import "aos/dist/aos.css";

AOS.init({
    offset: 0,
});

document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll('.scroll-animate-right, .scroll-animate-left, .scroll-animate-up, .scroll-animate-down');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                entry.target.classList.remove('visible');
            }
        });
    }, { threshold: 0.1 });

    elements.forEach(element => {
        observer.observe(element);
    });
});

