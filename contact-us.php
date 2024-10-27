<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            height: 300px;
        }

        .service {
            position: relative;
            background-color: #fff;
            padding: 20px;
            padding-top: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
            height: 50%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
        }

        .service img {
            height: auto;
            border-radius: 10px;
            text-align: left;
        }

        .service h3 {
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

        /* Style for the compass icon */
        section i {
            font-size: 80px;
            color: #dbbf8b;
            display: block;
        }

        /* Style for the "Contact Us" heading */
        section h1 {
            font-size: 80px;
            font-weight: bold;
        }

        section p {
            font-size: 20px;
        }

        .container {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            border: 1px solid lightgrey;
            text-align: center;
            line-height: 42px;
            margin-bottom: 10%;
        }

        .container img {
            margin: 0 auto;
            text-align: center;
            max-width: 70%;
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
            display: none; /* Hidden by default */
            margin-top: -10px; /* Slight overlap to visually connect the boxes */
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
        <i class="fa-regular fa-compass"></i>
        <h1>Contact Us</h1>
        <p>Let us know how we can help.</p>
    </section>
    <section class="services">
        <table>
            <tr>
                <td>
                    <div class="service">
                        <div class="container">
                            <img src="message.svg" alt="">
                        </div>
                        <ul class="content">
                            <li><span>
                                    <h3>Email Us</h3>
                                </span></li>
                            <li><span>
                                    <p>Speak to us</p>
                                </span></li>
                            <li><span><a href="asdsa">SOMEEMAIL@GMAIL.COM</a></span></li>
                        </ul>
                    </div>
                </td>
                <td>
                    <div class="service">
                        <div class="container">
                            <img src="message.svg" alt="">
                        </div>
                        <ul class="content">
                            <li><span>
                                    <h3>Visit Us</h3>
                                </span></li>
                            <li><span>
                                    <p>Speak to us</p>
                                </span></li>
                            <li><span><a href="asdsa">Place</a></span></li>
                        </ul>
                    </div>
                </td>
                <td>
                    <div class="service">
                        <div class="container">
                            <img src="message.svg" alt="">
                        </div>
                        <ul class="content">
                            <li><span>
                                    <h3>Call Us</h3>
                                </span></li>
                            <li><span>
                                    <p>Mon-Fri from 8am to 5pm</p>
                                </span></li>
                            <li><span><a href="asdsa">+1234567890</a></span></li>
                        </ul>
                    </div>
                </td>
                <td>
                    <div class="service">
                        <div class="container">
                            <img src="message.svg" alt="">
                        </div>
                        <ul class="content">
                            <li><span>
                                    <h3>Email Us</h3>
                                </span></li>
                            <li><span>
                                    <p>Speak to us</p>
                                </span></li>
                            <li><span><a href="asdsa">SOMEEMAIL@GMAIL.COM</a></span></li>
                        </ul>
                    </div>
                </td>
            </tr>
        </table>
    </section>
    <div id="box1" class="box" onclick="toggleBox()">SMTH</div>
    <div id="box2" class="box">TEXT</div>

    <script>
        function toggleBox() {
            const box2 = document.getElementById('box2');

            // Toggle the display property between none and flex
            if (box2.style.display === "none") {
                box2.style.display = "flex"; // Show box2
            } else {
                box2.style.display = "none"; // Hide box2
            }
        }
    </script>

</body>

</html>