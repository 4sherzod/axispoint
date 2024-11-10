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

        p {
            font-size: 20px;
        }

        #companyDiv {
            display: flex;
            /* gap: calc(10%); */
            /* border: 1px solid blue; */
            background-color: #253450;
            width: 100%;
    
        }
        .left{
            margin-left: 150px;
            color: white;
            width: 1000px;
            padding-top: 100px;
            /* border: 1px solid red; */
        }
        #companyDiv>div {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        /* #companyDiv>div>img {
            margin: auto;
            /* width: 100%; 
            object-fit: cover;
            height: 330px;
            width: 500px;
            margin-right: 0;
        } */

        .companyClass h1,
        .companyClass {
            text-align: left;
            /* font-weight: normal; */
            /* margin-bottom: 20px; */
        }

        .companyClass {
            width: 80%;
            margin: auto;
            line-height: 30px;
        }

        #plswork {
            width: 100%;
            margin-top: 40px;
        }

        .btn {
            width: 50%;
            /* margin-top: 100px; */
            padding: 15px 20px;
            background-color: #dbbf8b;
            color: white;
            border: none;
            font-size: 20px;
            font-family: 'Cormorant Garamond', serif;
            font-weight: bold;
            border-radius: 20px 0 20px 0;
            display: inline-flex;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Smooth color change */
        }

        .btn i {
            font-size: 15px;
            margin-left: 5px;
            transition: transform 0.3s ease; /* Smooth transition for arrow */
        }

        /* Change background and animate the arrow on hover */
        .btn:hover {
            background-color: #c5ab7d;
        }

        /* Slide arrow to the right */
        .btn:hover i {
            transform: translateX(7px); /* Adjust value to control slide distance */
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
        #desc {
            width: 450px;
            margin: auto;
            text-align: center;
            font-size: 18px;
        }

        .serviceextended {
            padding: 50px 0px;
        }

        .serviceextended a {
            display: inline-block;
            background-color: #dbbf8b;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn {
            transition: background-color 0.3s ease, transform 0.3s ease;

        }

        .serviceextended a:hover,
        .btn:hover {
            background-color: #b29d76;
            transform: translateY(-2px);
        }

        .serviceextended p {
            width: 40%;
        }

        .serviceextended h1 {
            text-decoration: solid;
            margin-bottom: 50px;
        }

        .serviceextended div {
            display: flex;
            width: 70%;
            margin: 0 auto;
            align-items: center;
            justify-content: space-between;
        }

        .serviceextended img {
            height: 270px;
            width: 480px;
            object-fit: cover;
        }

        .darker {
            background-color: #f7fdff;
            /* background-color: rgba(37, 52, 80, 0.2); */
            /* background-color: #fbf8f3; */
            text-align: right;
        }

        @keyframes fadeInBottom {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .appear-from-bottom {
            opacity: 0;
            animation: fadeInBottom 1s ease forwards;
        }

        .appear {
            opacity: 1;
        }
        #globe-container{
            height:600px;
            width: 100%;
            overflow: hidden;
            margin: 0;
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
    <div id="companyDiv" class="companyClass sectionforbar dark">
        <div class="left">
            <h1>Shaping Your Business Future</h1>
            <p>Axis Point offers tailored business setup and immigration consultancy solutions, guiding you step by step
                to ensure your business success across various global markets</p>
            <div id="plswork">
                <a id='btn' class="btn" href="services.php">EXPLORE OUR SERVICES <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div id="globe-container">
        <iframe src="globe.html" frameborder="0" style="width: 100%; height: 100%;"></iframe>
        </div>
    </div>
    <br>
    <div style="height:1px; width:700px; margin: auto; background-color: #dbbf8b;"></div>
        <br>
        <h1 style="font-weight:bold;">What We Offer</h1>
        <p id="desc">From company formation to visa services, Axis Point provides end-to-end solutions for all your business
            needs.</p>
        <br>
        <div style="height:1px; width:300px; margin: auto; background-color: #dbbf8b;"></div>
        <br> <br>



        <div>
    <div class="serviceextended">
        <h1>Corporate Formation & Administration (UAE)</h1>
        <div>
            <p>We make setting up your business hassle-free with expert guidance.
                <br><br>
                <a href="Corporate-Formation-&-Administration.php">More Info...</a>
            </p>
            <img src="./img/handshake.jpg" alt="Company Formation" class="homeImg">
        </div>
    </div>

    <div class="serviceextended darker">
        <h1>Tax Planning & Offshore Service</h1>
        <div>
            <img src="./img/tax.jpg" alt="Tax Planning" class="homeImg">
            <p>Secure the best banking solutions tailored to your business.
                <br><br>
                <a href="tax-planning.php">More Info...</a>
            </p>
        </div>
    </div>

    <div class="serviceextended">
        <h1>Human Resources & Recruitment Services</h1>
        <div>
            <p>Comprehensive visa solutions for your business and personal needs.
                <br><br>
                <a href="hr.php">More Info...</a>
            </p>
            <img src="./img/hr.jpg" alt="Human Resources" class="homeImg">
        </div>
    </div>

    <div class="serviceextended darker">
        <h1>Citizenship by Investment & Residency Solutions</h1>
        <div>
            <img src="./img/pass.jpg" alt="Residency Solutions" class="homeImg">
            <p>Secure second citizenship through global investment programs for enhanced mobility.
                <br><br>
                <a href="citizenship-by-investment.php">More Info...</a>
            </p>
        </div>
    </div>

    <div class="serviceextended">
        <h1>Trust & Fiduciary Services</h1>
        <div>
            <p>Get everything in place with our office setup services.
                <br><br>
                <a href="trust-and-fiduciary-services.php">More Info...</a>
            </p>
            <img src="./img/trust.jpg" alt="Trust Services" class="homeImg">
        </div>
    </div>

    <div class="serviceextended darker">
        <h1>Brand Protection</h1>
        <div>
            <img src="./img/brand.jpg" alt="Brand Protection" class="homeImg">
            <p>Find the right commercial or residential property with our experts.
                <br><br>
                <a href="brand-protection.php">More Info...</a>
            </p>
        </div>
    </div>

    <div class="serviceextended">
        <h1>Business Support & Outsourcing Services</h1>
        <div>
            <p>Professional accounting and auditing services to ensure financial accuracy.
                <br><br>
                <a href="business-support.php">More Info...</a>
            </p>
            <img src="./img/support.jpg" alt="Business Support" class="homeImg">
        </div>
    </div>

    <div class="serviceextended darker">
        <h1>Banking Solutions</h1>
        <div>
            <img src="./img/handshake.jpg" alt="Banking Solutions" class="homeImg">
            <p>Secure second citizenship through global investment programs for enhanced mobility.
                <br><br>
                <a href="banking.php">More Info...</a>
            </p>
        </div>
    </div>

    <div class="serviceextended">
        <h1>Concierge Services</h1>
        <div>
            <p>Expert solutions for obtaining UAE tax residence for businesses.
                <br><br>
                <a href="concierge.php">More Info...</a>
            </p>
            <img src="./img/concierge.jpg" alt="Concierge Services" class="homeImg">
        </div>
    </div>
</div>

    <?php
    include_once "footer.php";
    renderFooter();
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const elementsToAnimate = document.querySelectorAll(".service, .serviceextended");

            function checkVisibility() {
                elementsToAnimate.forEach((element) => {
                    const rect = element.getBoundingClientRect();
                    if (rect.top < window.innerHeight - 50) {
                        element.classList.add("appear-from-bottom");
                    }
                });
            }

            // Run on scroll and on load
            window.addEventListener("scroll", checkVisibility);
            checkVisibility(); // Initial check
        });
    </script>
</body>

</html>