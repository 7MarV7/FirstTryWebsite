let slideIndex = 0;
const slideInterval = 3000; // Slide every 3 seconds

function showSlides(n) {
    const slides = document.querySelectorAll('.slides .slide');
    if (n >= slides.length) {
        slideIndex = 0;
    }
    if (n < 0) {
        slideIndex = slides.length - 1;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
    slides[slideIndex].style.display = 'block';
}

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function autoSlide() {
    slideIndex++;
    showSlides(slideIndex);
}

// Initialisierung des Sliders
showSlides(slideIndex);

// Start automatic sliding
setInterval(autoSlide, slideInterval);
