<?php
function renderHeader() {
    echo '
    <link rel="stylesheet" href="./css/topbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">

    <header>
        <div> 
            <a href="index.php">
                <div id="title">
                    <div id="logo">
                        <img src="./img/compass.png" alt="">
                    </div>
                    <div id="axis">AXIS POINT</div>
                </div>
            </a>
            <nav>
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About us</a></li>
                <li class="dropdown-toggle">
                    <a href="services.php">Services <i class="fa-solid fa-angle-down"></i> </a>
                    <ul class="dropdown">
                        <li><a href="Corporate-Formation-&-Administration.php">Corporate Formation & Administration (UAE)</a></li>
                        <li><a href="tax-planning.php">Tax Planning & Offshore Service</a></li>
                        <li><a href="hr.php">Human Resources & Recruitment Services</a></li>
                        <li><a href="citizenship-by-investment.php">Citizenship by Investment & Residency Solutions</a></li>
                        <li><a href="trust-and-fiduciary-services.php">Trust & Fiduciary Services</a></li>
                        <li><a href="brand-protection.php">Brand Protection</a></li>
                        <li><a href="business-support.php">Business Support & Outsourcing Services</a></li>
                        <li><a href="banking.php">Banking Solutions</a></li>
                        <li><a href="concierge.php">Concierge Services</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.php">Contact Us</a></li>
            </nav>

            <!-- Hamburger Menu Icon for Mobile -->
            <div id="mobile-menu" class="fa fa-bars"></div>
        </div>
    </header>

    <!-- Mobile Dropdown Menu -->
    <div class="mobile-nav">
        <a href="index.php">Home</a>
        <a href="about-us.php">About us</a>
        <a href="services.php">Services</a>
        <a href="contact-us.php">Contact Us</a>
    </div>

    <!-- Overlay for background dimming -->
    <div id="overlay"></div>

    <div id="emptyspace"></div>

    <script>
        // Toggle mobile menu visibility
        document.getElementById("mobile-menu").addEventListener("click", function() {
            const mobileNav = document.querySelector(".mobile-nav");
            const overlay = document.getElementById("overlay");

            mobileNav.classList.toggle("active");
            overlay.style.display = mobileNav.classList.contains("active") ? "block" : "none";
        });

        // Close mobile menu when clicking on overlay
        document.getElementById("overlay").addEventListener("click", function() {
            const mobileNav = document.querySelector(".mobile-nav");
            const overlay = document.getElementById("overlay");

            mobileNav.classList.remove("active");
            overlay.style.display = "none";
        });
    </script>
    ';
}