document.addEventListener("DOMContentLoaded", function() {
    // Check if the user has already made a decision about cookies
    if (!localStorage.getItem("cookiesAccepted") && !localStorage.getItem("cookiesDeclined")) {
        // Show the cookie banner
        document.getElementById("cookie-banner").style.display = "block";
    }

    // Handle the accept cookies button click
    document.getElementById("accept-cookies").addEventListener("click", function() {
        // Hide the cookie banner
        document.getElementById("cookie-banner").style.display = "none";

        // Save the user's acceptance in localStorage
        localStorage.setItem("cookiesAccepted", "true");
    });

    // Handle the decline cookies button click
    document.getElementById("decline-cookies").addEventListener("click", function() {
        // Hide the cookie banner
        document.getElementById("cookie-banner").style.display = "none";

        // Save the user's decline in localStorage
        localStorage.setItem("cookiesDeclined", "true");
    });
});
