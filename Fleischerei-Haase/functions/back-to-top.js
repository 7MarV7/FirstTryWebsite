/*=========================================== 
Autor: 7MarV7
file: back-to-top.js
Date: 20.07.2024
Last changes: 09.09.2024  
Function: Arrow appears at the end of the page. Otherwise it stays hidden.
===========================================*/


document.addEventListener("scroll", function() {
    const backToTopButton = document.querySelector(".back-to-top");
    const scrollThreshold = document.documentElement.scrollHeight - window.innerHeight - 300; // threshold, chance if you need

    if (window.scrollY > scrollThreshold) {
        backToTopButton.style.opacity = "1"; // Button is visible
        backToTopButton.style.visibility = "visible"; 
        backToTopButton.style.pointerEvents = "auto"; // Button is interactive
    } else {
        backToTopButton.style.opacity = "0"; // Button is unvisible 
        backToTopButton.style.visibility = "hidden"; 
        backToTopButton.style.pointerEvents = "none"; // Button not interactive
    }
});
