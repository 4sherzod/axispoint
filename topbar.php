<?php
function renderHeader() {
    echo '
    <link rel="stylesheet" href="topbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <header>
        <div> 
            <a href="index.php"><p id="title"><i class="fa-regular fa-compass"></i>AXIS POINT</p></a>
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
                        <li class="third-level">
                            <a href="#">Business Support & Outsourcing Services</a>
                            <ul class="dropdown-submenu">
                                <li><a href="#">Demo one</a></li>
                                <li><a href="#">Demo two</a></li>
                            </ul>
                        </li>
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

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>


                                        <li><a href="#">PAGES</a>
									    	<ul class="dropdown">
									    		<li><a href="about.html">About us</a></li>
									    		<li><a href="team.html">Our team</a></li>
									    		<li><a href="faq.html">Faq's</a></li>
									    		<li><a href="404.html">404</a></li>
									    		<li><a href="shop.html">Shop</a></li>
									    		<li><a href="shop-details.html">Shop details</a></li>
									            <li><a href="#">Third Level menu</a>
									    			<ul>
									    				<li><a href="#">Demo one</a></li>
									    				<li><a href="#">Demo two</a></li>
									    			</ul>
									    		</li>
									       </ul>
									    </li> -->