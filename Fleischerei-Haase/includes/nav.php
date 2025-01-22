<?php
    function isActive($page) {
        return basename($_SERVER['PHP_SELF']) == $page ? 'current aria-current="page"' : '';
    }
?>
<nav class="header-nav">
    <ul>
        <li class="<?php echo isActive('index.php'); ?>"><a href="../pages/index.php">Startseite</a></li>
        <li class="<?php echo isActive('about-us.php'); ?>"><a href="../pages/about-us.php">Über uns</a></li>
        <li class="<?php echo isActive('service.php'); ?>"><a href="../pages/service.php">Service</a></li>
        <li class="<?php echo isActive('weekly-offers.php'); ?>"><a href="../pages/weekly-offers.php">Angebote</a></li>
        <li class="<?php echo isActive('location.php'); ?>"><a href="../pages/location.php">Anfahrt</a></li>   
    </ul>
    <div class="hamburger-menu" aria-label="Menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="socials">
                <a href="#" class="social-link">
                    <img src="../pictures/icons8-facebook-48.png" alt="Facebook">
                </a>
                <a href="#" class="social-link">
                    <img src="../pictures/icons8-instagram-48.png" alt="Twitter">
                </a>
            </div>
            <p class="social-info">(Unsere Socials)</p>
</nav>
<script src="../functions/hamburger.js"></script>
