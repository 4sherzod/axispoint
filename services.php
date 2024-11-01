<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        main {
            padding: 40px;
        }

        .services {
            margin: 0 auto;
            width: 100%;
            max-width: 1200px;
            text-decoration: none;
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
            text-decoration: none;
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

        #desc {
            width: 450px;
            margin: auto;
            text-align: center;
            font-size: 18px;
        }
        a {
            text-decoration: none;
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
    <br>
    <h1 style="font-weight:bold;">What We Offer</h1>
    <p id="desc">From company formation to visa services, Axis Point provides end-to-end solutions for all your business
        needs.</p>
    <br>
    <section class="services">
        <table>
            <tr>
                <td>
                    <a href="Corporate-Formation-&-Administration.php">
                        <div class="service">
                            <img src="./img/handshake.jpg" alt="Company Formation" class="homeImg">
                            <h3>Corporate Formation & Administration (UAE)</h3>
                            <p>We make setting up your business hassle-free with expert guidance.</p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="tax-planning.php">
                        <div class="service">
                            <img src="./img/tax.jpg" alt="Banking Solutions" class="homeImg">
                            <h3>Tax Planning & Offshore Service</h3>
                            <p>Secure the best banking solutions tailored to your business.</p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="hr.php">
                        <div class="service">
                            <img src="./img/hr.jpg" alt="Visa Services" class="homeImg">
                            <h3>Human Resources & Recruitment Services</h3>
                            <p>Comprehensive visa solutions for your business and personal needs.</p>
                        </div>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="citizenship-by-investment.php">
                        <div class="service">
                            <img src="./img/pass.jpg" alt="Accounting & Auditing" class="homeImg">
                            <h3>Citizenship by Investment & Residency Solutions</h3>
                            <p>Professional accounting and auditing services to ensure financial accuracy.</p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="trust-and-fiduciary-services.php">
                        <div class="service">
                            <img src="./img/trust.jpg" alt="Office Setup" class="homeImg">
                            <h3>Trust & Fiduciary Services</h3>
                            <p>Get everything in place with our office setup services.</p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="brand-protection.php">
                        <div class="service">
                            <img src="./img/brand.jpg" alt="Property Solutions">
                            <h3>Brand Protection</h3>
                            <p>Find the right commercial or residential property with our experts.</p>
                        </div>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="business-support.php">
                        <div class="service">
                            <img src="./img/support.jpg" alt="Business Launch Support">
                            <h3>Business Support & Outsourcing Services</h3>
                            <p>Professional accounting and auditing services to ensure financial accuracy.</p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="banking.php">
                        <div class="service">
                            <img src="./img/banking.jpg" alt="Citizenship by Investment">
                            <h3>Banking Solutions</h3>
                            <p>Secure second citizenship through global investment programs for enhanced mobility.</p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="concierge.php">
                        <div class="service">
                            <img src="./img/concierge.jpg" alt="UAE Tax Residence">
                            <h3>Concierge Services</h3>
                            <p>Expert solutions for obtaining UAE tax residence for businesses.</p>
                        </div>
                    </a>
                </td>
            </tr>
        </table>
    </section>
    <?php
         include_once "footer.php";
         renderFooter();
    ?>
</body>

</html>