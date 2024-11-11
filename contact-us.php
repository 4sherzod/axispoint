<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        .services {
            margin: 40px auto;
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
            height: fit-content;
        }

        .service {
            position: relative;
            background-color: #fff;
            padding: 20px;
            padding-top: 10px;
            /* border-radius: 10px; */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
            height: 150px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
        }

        .service h3 {
            color: black;
            font-size: 26px;
            margin-bottom: -15px;
        }

        .service p {
            font-size: 18px;
            color: #666;
        }

        .service a {
            color: black;
            font-size: 16px;
        }

        /* Styling for the "Contact Us" section */
        section {
            text-align: center;
            margin-top: 50px;
        }

        /* Style for the "Contact Us" heading */
        section h1 {
            font-size: 80px;
            font-weight: bold;
        }

        section p {
            font-size: 20px;
        }

        a {
            color: black;
        }

        .container {
            text-align: left;
            line-height: 42px;
            margin-bottom: 10%;
        }

        .container i {
            font-size: 30px;
            padding: 10px 0 0 10px;
            color: #dbbf8b;
        }

        .content {
            height: 60%;
            position: absolute;
            bottom: -5px;
        }

        .service ul {
            display: table;
        }

        .service li {
            display: table-row;
        }

        .box {
            width: 300px;
            height: 100px;
            margin: 20px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            border: 2px solid black;
        }

        #box1 {
            background-color: lightgray;
        }

        #box2 {
            background-color: lightblue;
            display: none;
            /* Hidden by default */
            margin-top: -10px;
            /* Slight overlap to visually connect the boxes */
        }

        .mil-map-frame {
            background-color: rgb(229, 229, 229);
            pointer-events: all;
            height: 600px;
            position: relative;
            overflow: hidden;
        }

        .mil-map-frame .mil-map {
            position: absolute;
            top: -25%;
            left: -25%;
            width: 150%;
            height: 150%;
            -webkit-transition: 0.4s cubic-bezier(0, 0, 0.3642, 1);
            transition: 0.4s cubic-bezier(0, 0, 0.3642, 1);
        }

        .mil-map-frame .mil-map iframe {
            width: 100%;
            height: 100%;
        }
        #emailDiv {
            background-color: #253450;
        }
        #emailDiv {
            color: white;
            color: #dbbf8b;
            text-align: center;
        }

        #email {
            color: #dbbf8b;
            font-weight: bold;
            font-size: 50px;
            padding-top: 30px;
            width: 450px;
            margin-right: 100px;
            text-align: center;
        }

        .dark {
            background-color: #253450;
        }

        #compassBack {
            background-image: url('./img/compass.png');
            background-repeat: no-repeat;
            background-size: 800px;
            background-position: 50px;
        }

        #form * {
            font-family: Cormorant Garamond;
            border: none;
            border-bottom: 1px solid #dbbf8b;
        }

        .form-container {
            width: 450px;
            margin: 0 auto;
            margin-right: 100px;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
            background-color: #253450;
        }

        .form-container input,
        .form-container textarea,
        .form-container .button {
            margin: 0 auto;
            width: 100%;
            padding: 12px;
            margin: 8px 0px;
            font-size: 16px;
            outline: none;
            background-color: rgba(255, 255, 255, 0);
            box-sizing: border-box;
        }

        ::placeholder {
            color: rgba(255, 255, 355, 0.7);
        }

        /* .form-container input:focus,
        .form-container textarea:focus {
            border-color: #dec596;
        } */

        .form-container .button {
            background-color: #dec596;
            color: #253450;
            font-weight: bold;
            border: none;
            cursor: pointer;
            font-size: 18px;
            width: 100%;
            border-radius: 20px 0 20px 0;
        }

        .form-container button:hover {
            background-color: #dbbf8b;
        }

        #map {
            scroll-margin-top: 100px;
        }

        #comp {
            height: 100px;
        }
        form input, textarea {
            color: white;

            font-size: 20px !important;
            font-weight: bold !important;
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
    <section>
        <img src="./img/compass.png" alt="" id="comp">
        <h1>Contact Us</h1>
        <p>Let us know how we can help.</p>
    </section>
    <section class="services">
        <table>
            <tr>
                <td>
                    <a href="#email">
                        <div class="service">
                            <div class="container">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>
                            <ul class="content">
                                <li><span>
                                        <h3>Email Us</h3>
                                    </span></li>
                                <li><span>
                                        <p>Speak to us</p>
                                    </span></li>
                                <li><span>axispoint@gmail.com</span></li>
                            </ul>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="#map">
                        <div class="service">
                            <div class="container">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <ul class="content">
                                <li><span>
                                        <h3>Visit Us</h3>
                                    </span></li>
                                <li><span>
                                        <p>Speak to us</p>
                                    </span></li>
                                <li><span></span></li>
                            </ul>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="tel:+1234567890">
                        <div class="service">
                            <div class="container">
                                <i class="fa-solid fa-phone-volume" style="transform: rotate(-45deg);"></i>
                            </div>
                            <ul class="content">
                                <li><span>
                                        <h3>Call Us</h3>
                                    </span></li>
                                <li><span>
                                        <p>Mon-Fri from 8am to 5pm</p>
                                    </span></li>
                                <li><span>+1234567890</span></li>
                            </ul>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="https://wa.me/905317750250">
                        <div class="service">
                            <div class="container">
                                <i class="fa-brands fa-whatsapp" style="font-size:35px;"></i>
                            </div>
                            <ul class="content">
                                <li><span>
                                        <h3>Text Us</h3>
                                    </span></li>
                                <li><span>
                                        <p>WhatsApp</p>
                                    </span></li>
                                <li><span>+1234567890</span></li>
                            </ul>
                        </div>
                    </a>
                </td>
            </tr>
        </table>
    </section>

    <div id="emailDiv" class="dark nav-item">
        <div id="compassBack">
            <h1 id="email" class="dark">Contact Us</h1>
            <div class="form-container" class="dark">
                <form action="/submit-form" method="post" id="form">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="E-mail" required>
                    <input type="tel" name="phone" placeholder="Phone" required>
                    <textarea name="comments" placeholder="Message" rows="4" required></textarea>
                    <input type="button" value="Book Now!" class="button">
                </form>
            </div>
        </div>
    </div>

    <div class="mil-map-frame mil-up nav-item" id="map">
        <div class="mil-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.71493642221!2d55.372732283115!3d25.145326620359967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f669ed1b35c09%3A0xccfac1a17b332e57!2sRepton%20School%20Dubai!5e0!3m2!1sen!2sfi!4v1730117587925!5m2!1sen!2sfi"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const navLinks = document.querySelectorAll("a[href^='#']");
            navLinks.forEach(link => {
                link.addEventListener("click", (event) => {
                    event.preventDefault();
                    const targetId = link.getAttribute("href").substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        const yOffset = -100; // Adjust offset if needed
                        const yPosition = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
                        window.scrollTo({
                            top: yPosition,
                            behavior: "smooth"
                        });
                    }
                });
            });
        });
    </script>

    <?php
        include_once "footer.php";
        renderFooter();
    ?>
</body>

</html>