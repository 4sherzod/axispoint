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
    
    <!-- Corrected scroll.js link -->
    <script src="scroll.js"></script>
    
    <header>
        <div> 
            <a href="index.php">
                <div id="title">
                    <div id="logo">
                        <img src="compass.png" alt="">
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
                        <li><a href="team.html">Tax Planning & Offshore Service</a></li>
                        <li><a href="faq.html">Human Resources & Recruitment Services</a></li>
                        <li><a href="citizenship-by-investment.php">Citizenship by Investment & Residency Solutions</a></li>
                        <li><a href="shop.html">Trust & Fiduciary Services</a></li>
                        <li><a href="shop-details.html">Brand Protection</a></li>
                        <li><a href="#">Business Support & Outsourcing Services</a></li>
                        <li><a href="#">Banking Solution</a></li>
                        <li><a href="#">Concierge Services</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.php">Contact Us</a></li>
            </nav>
        </div>
    </header>
    <div id="emptyspace"></div>
    ';
}

?>