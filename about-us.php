<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AxisPoint Citizenship by Investment Programs</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <style>
        .hero {
            object-fit: cover;
            object-position: center;
            height: 400px;
            width: 100%;
        }

        #darkImg {
            padding: 0;
            margin: 0;
            height: 400px;
        }

        .countryImg {
            /* height: 80px; */
            width: 80px;
        }

        .section1>h1 {
            padding-top: 30px;
        }

        ol {
            list-style-type: none;
            /* Ensure this is set to decimal */
            margin-left: -10px;
            /* Add some left margin for better visibility */
        }

        ol>li {
            padding: 10px;
        }

        .companyClass {
            width: 80%;
            margin: 50px auto;
            line-height: 30px;
        }

        p {
            font-size: 20px;
        }

        .services {
            margin: 0 auto;
            width: 100%;
            max-width: 1200px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-bottom: none;
            table-layout: fixed;
        }

        td {
            padding: 15px;
            vertical-align: top;
            border-bottom: none;
            width: 33.33%;
            height: 400px;
        }

        .service {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            height: 85%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
        }

        .service img {
            object-fit: cover;
            height: 230px;
            width: 100%;
            margin-bottom: 15px;
        }

        .service h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .service p {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>

    <?php
    include_once "load.php";
    renderLoader();
    include_once "topbar.php";
    renderHeader();
    ?>

    <section id="darkImg" class="dark-section">
        <img src="./img/trust.jpg" alt="" class="hero">
        <!-- <h2>AXISPOINT</h2> -->
    </section>
    <section class="section1">
        <!-- <img src="pass.jpg" alt="AxisPoint Logo" width="100%"> -->
        <h1>About Us</h1>
        <div>
            <p>
                Savory & Partners are trusted by Governments around the world to source individuals of the highest
                calibre and to successfully process second Citizenship by investment programmes and Residency solutions
                for them.
                <br>
                <br>
                A British family company with roots established over two centuries ago, Savory & Partners prides itself
                on traditional values, professional conduct and the highest ethical standards. Our team of international
                consultants have an unrivalled knowledge of Investor Immigration Programs across the globe.
            </p>
            <p>
                We provide quick, legal, second passport and citizenship by investment programs with little or no
                residency requirements. Our Global Programs combine the benefits of Safe Haven, Freedom of Movement and
                Profitable Investment all in one.
                <br>
                <br>
                Savory & Partners is a Government Approved Citizenship through Investment programs and services
                Provider, guiding potential applicants to acquire citizenship through investment to avail global reach
                and become global citizens.
            </p>
        </div>
        <br><br>
    </section>

    <section class="dark-section">
        <h2>Our Principles</h2>
        <p style="width: 56%;margin: 0 auto;">Like our clients, we place particular emphasis on a practical approach and
            impeccable quality. To ensure that we consistently satisfy the high expectations of our clients, our firm is
            guided by four principles that form the basis of how we work:</p>

        <div class="benefits">
            <div class="benefit">
                <h3></h3>
                <p>To offer our services only if we can be of genuine assistance</p>
            </div>
            <div class="benefit">
                <h3></h3>
                <p>To find the best solutions available by means of a rigorous and efficient approach</p>
            </div>
            <div class="benefit">
                <h3></h3>
                <p>To base our business on honesty, integrity, and the highest ethical standards</p>
            </div>
        </div>
    </section>
    <!-- <section class="services">
        <h1 style=" margin-top: 50px">Team</h1>
        <table>
            <tr>
                <td>
                    <div class="service">
                        <img src="./img/handshake.jpg" alt="Company Formation" class="homeImg">
                        <h3>DUDE1</h3>
                        <p>Does smth</p>
                    </div>
                </td>
                <td>
                    <div class="service">
                        <img src="./img/handshake.jpg" alt="Company Formation" class="homeImg">
                        <h3>DUDE2</h3>
                        <p>Does smth</p>
                    </div>
                </td>
                <td>
                    <div class="service">
                        <img src="./img/handshake.jpg" alt="Company Formation" class="homeImg">
                        <h3>DUDE3</h3>
                        <p>Does smth</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="service">
                        <img src="./img/handshake.jpg" alt="Company Formation" class="homeImg">
                        <h3>DUDE4</h3>
                        <p>Does smth</p>
                    </div>
                </td>
                <td>
                    <div class="service">
                        <img src="./img/handshake.jpg" alt="Company Formation" class="homeImg">
                        <h3>DUDE5</h3>
                        <p>Does smth</p>
                    </div>
                </td>
                <td>
                    <div class="service">
                        <img src="./img/handshake.jpg" alt="Company Formation" class="homeImg">
                        <h3>DUDE6</h3>
                        <p>Does smth</p>
                    </div>
                </td>
            </tr>
        </table>
    </section> -->
    <?php
         include_once "footer.php";
         renderFooter();
    ?>
</body>

</html>