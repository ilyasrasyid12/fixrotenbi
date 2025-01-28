// scrollAnimation.js
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('.scroll-animation');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Hentikan pengamatan setelah elemen terlihat
            }
        });
    });

    elements.forEach(element => {
        observer.observe(element);
    });
});