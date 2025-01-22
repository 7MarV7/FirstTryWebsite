let currentIndex = 0;

function openLightbox(element) {
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");

    // Erfasse alle Bilder in der Slideshow
    const images = document.querySelectorAll('.slider .slide img');
    currentIndex = Array.from(images).indexOf(element);

    // Lightbox öffnen und das aktuelle Bild anzeigen
    lightbox.style.display = "block";
    lightboxImg.src = element.src;
}

function closeLightbox() {
    const lightbox = document.getElementById("lightbox");
    lightbox.style.display = "none";
}

function showLightboxImage(n) {
    const images = document.querySelectorAll('.slider .slide img');
    currentIndex = (n + images.length) % images.length; // Zyklisch durch die Bilder navigieren
    const lightboxImg = document.getElementById("lightbox-img");
    lightboxImg.src = images[currentIndex].src;
}

function prevLightboxImage() {
    showLightboxImage(currentIndex - 1);
}

function nextLightboxImage() {
    showLightboxImage(currentIndex + 1);
}

// Optionale automatische Slideshow-Funktion, falls gewünscht
function startSlideshow(interval = 3000) {
    setInterval(() => {
        nextLightboxImage();
    }, interval);
}
