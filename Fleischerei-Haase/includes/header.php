<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleischerei Haase</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="menueLinksHeader">
        <a href="home.php?page=start">Start</a>    
        <a href="aboutUs.php?page=aboutUs">Über uns</a>
        <a href="products.php?page=products">Produkte</a>
        <a href="weekOffers.php?page=weekOffers">Wochenangebote</a>
        <a href="team.php?page=team">Team</a>
        <a href="map.php?page=map">Anfahrt</a>
    </div>
    <div class="headbanner">
        <img src="../images/headbanner.png" alt="headbanner">
    </div>
    <main>
        <div class="content">
            <?php
                // Array für die Überschriften der Seiten
                $pageTitles = array(
                    "start" => "<u>Herzlich Willkommen</u>",
                    "aboutUs" => "<u>Über uns</u>",
                    "products" => "<u>Produkte</u>",
                    "weekOffers" => "<u>Wochenangebote</u>",
                    "team" => "<u>Team</u>",
                    "map" => "<u>Ihr Weg zu uns</u>",
                    "dtProtect" => "<u>Datenschutz</u>",
                    "contact" => "<u>Kontakt</u>",
                    "legal" => "<u>Impressum</u>"
                );

                // Funktion zum Abrufen der Überschrift basierend auf der aktuellen Seite
                function getPageTitle($page, $pageTitles) {
                    if (array_key_exists($page, $pageTitles)) {
                        return $pageTitles[$page];
                    } else {
                        return "Seite nicht gefunden"; // Standardüberschrift, wenn die Seite nicht im Array vorhanden ist
                    }
                }

                // Aktuelle Seite aus der URL abrufen
                $currentPage = isset($_GET['page']) ? $_GET['page'] : 'start';

                // Überschrift für die aktuelle Seite abrufen
                $currentTitle = getPageTitle($currentPage, $pageTitles);
            ?>
            <!-- Überschrift anzeigen -->
            <h1><?php echo $currentTitle; ?></h1>
        </div>
    </main>