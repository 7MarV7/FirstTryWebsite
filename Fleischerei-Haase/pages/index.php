<!DOCTYPE html>
<html lang="de" id="top" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Beschreibung für diese Webseite"> 
    <title>Fleischerei Haase</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="home">
    <div class="global-grid-container">

        <div class="global-header"><?php include '../includes/header.php'; ?></div>

        <div class="global-navigation"><?php include '../includes/nav.php'; ?></div>

        <div class="global-main" role="main">
            <article>
            <h1>Herzlich Willkommen</h1>
            <p>Das Team der Fleischerei Haase begrüßt Sie herzlich auf unserer Website. Wir sind Ihr vertrauenswürdiger Anbieter für hochwertiges Fleisch zu fairen Preisen.<br><br> 
            Unser Versprechen: <strong>Jeden Tag die beste Fleischqualität für unsere Kunden.</strong></p>
            <h2>Warum uns wählen?</h2>
            <ul>
                <li><strong>Unübertroffene Qualität:</strong> Unser Fleisch wird sorgfältig ausgewählt, um sicherzustellen, dass nur die besten Stücke auf Ihren Tisch kommen.</li>
                <li><strong>Faire Preise:</strong> Hochwertiges Fleisch muss nicht teuer sein. Bei uns bekommen Sie Spitzenqualität zu erschwinglichen Preisen.</li>
                <li><strong>Tägliche Frische:</strong> Unser Fleisch wird täglich frisch geliefert und sofort verarbeitet, um maximale Frische und Geschmack zu garantieren.</li>
                <li><strong>Nachhaltige Herkunft:</strong> Wir arbeiten eng mit lokalen Bauern zusammen, die nachhaltige und ethische Praktiken anwenden.</li>
            </ul>
            <p>Erleben Sie den Unterschied, den beste Qualität und faire Preise machen können. Besuchen Sie uns noch heute und entdecken Sie unsere breite Auswahl an erstklassigem Fleisch, das Ihren Gaumen verwöhnen wird.</p>
            <p><strong>Fleischerei Haase - Aus der Region, Für die Region.</strong></p>
        </article>
        </div>  

        <div class="global-right-side-grid">
            <aside class="index-right-side-grid">
                <p><h1>Fotogalerie<h1></p>
                <div class="slider">
                    <div class="slides">
                        <div class="slide">
                            <img src="../pictures/butcher-4518180_1280.jpg" alt="Fleischerei" onclick="openLightbox(this)">
                        </div>
                        <div class="slide">
                            <img src="../pictures/charcuterie-338498_1280.jpg" alt="Fleisch lecker Angerichtet" onclick="openLightbox(this)">
                        </div>
                        <div class="slide">
                            <img src="../pictures/meat-1155132_1280.jpg" alt="Fleischprodukte" onclick="openLightbox(this)">
                        </div>
                        <!-- Add more pictures here -->
                    </div>
                    <!-- Navigation buttons-->
                    <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
                    <button class="next" onclick="plusSlides(1)">&#10095;</button>
                </div>
            </aside>

            <!-- Lightbox Overlay -->
            <div id="lightbox" class="lightbox">
                <span class="close" onclick="closeLightbox()">&times;</span>
                <img class="lightbox-content" id="lightbox-img">
                <a class="prev" onclick="prevLightboxImage()">&#10094;</a>
                <a class="next" onclick="nextLightboxImage()">&#10095;</a>
            </div>


            <figure class="silder-content-link">
                <figcaption>
                    <a href="/fleischerei-Haase/pages/about-us.php">(weitere Informationen)&#10169;</a>
                </figcaption>
            </figure>
        </div>
       
        

        <div class="global-footer"><?php include '../includes/footer.php'; ?></div>
    </div>

    <!--Functions-->
    <script src="../functions/slider.js"></script>
    <script src="../functions/lightbox.js"></script>
    <script src="../functions/data-protect-cookie.js"></script>
    
</body>
</html>
