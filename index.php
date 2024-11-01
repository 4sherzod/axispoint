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
        a {
            text-decoration: none;
        }
        p{
            font-size: 20px;
        }
        #companyDiv{
            display: flex;
            gap: calc(10%);
            /* border: 1px solid blue; */
        }
        #companyDiv>div{
            width: 45%;
            /* border: 1px solid red; */
        }
        #companyDiv>div>img{
            margin: auto;
            /* width: 100%; */
            object-fit: cover;
            height: 330px;
            width: 500px;
            margin-right: 0;
        }
        .companyClass h1, .companyClass{
            text-align: left;
            /* font-weight: normal; */
            /* margin-bottom: 20px; */
        }
        .companyClass{
            width: 80%;
            margin: 100px auto;
            line-height: 30px;
        }
        #plswork{
            width: 100%;
            margin-top: 40px;
        }
        .btn{
            width: 70%;
            margin-top: 100px;
            padding: 15px 20px;
            background-color: #dbbf8b;
            color: white;
            border: none;
            font-size: 20px;
            font-family: Cormorant Garamond;
            font-weight: bold;
            border-radius: 20px 0 20px 0;
        }
        .btn i{
            font-size: 15px;
            margin-left: 5px;
        }
        .left>h1{
            font-size: 60px;
            font-weight: bold;
            line-height: 60px;
            background-image: url('./img/compass.png');
            background-repeat: no-repeat;
            background-size: 70px;
            background-position: 72% 2%;
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
     <div id="companyDiv" class="companyClass sectionforbar">
        <div class="left"> 
            <h1>Shaping Your Business Future</h1>
            <p>Axis Point offers tailored business setup and immigration consultancy solutions, guiding you step by step to ensure your business success across various global markets</p>
            <div id="plswork">
                <a id='btn' class="btn" href="services.php">EXPLORE OUR SERVICES <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div><img src="./img/handshake.jpg" alt=""></div>
    </div>
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
                            <img src="./img/handshake.jpg" alt="Citizenship by Investment">
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