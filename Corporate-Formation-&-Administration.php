<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Buttons with Exclusive Text Display</title>
    <link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
     <style>
        .button-container {
            display: flex;
            justify-content: space-between; /* Closer spacing */
            margin-top: 50px;
            width: 60%; /* Adjust container width to bring buttons closer */
            margin-left: auto;
            margin-right: auto;
        }

        .button {
            width: 250px;
            height: 50px;
            /* border: 2px solid black; */
            border-radius: 30%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            background-color: white;
        }

        .button:hover {
            background-color: #f0f0f0;
        }

        .button.active {
            background-color: #253450; /* Active button color */
            color: #dbbf8b;
        }

        .displayText {
            display: none;
            margin-top: 50px;
            font-size: 24px;
            text-align: center;
            max-width: 70%;
            margin: 60px auto ;
        }

        /* Make sure only one class is visible at a time */
        .displayText.active {
            display: block;
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

     <section class="dark-section">
         <h2>Why Choose Axis Point for Company Formation?</h2>
         <p style="width: 66%;margin: 0 auto;">At Axis Point, we understand that each business is unique. Whether you’re a startup, an established company looking to expand, or an entrepreneur seeking opportunities in a new market, our tailored approach to company formation ensures your specific needs are met. With years of experience, our team has in-depth knowledge of local and international regulations, making us the ideal partner for businesses looking to establish a presence in various jurisdictions.</p>
     </section>

    <div class="button-container">
        <div id="button1" class="button active" onclick="showText('text1', 'button1')">Mainland</div>
        <div id="button2" class="button" onclick="showText('text2', 'button2')">Freezone</div>
        <div id="button3" class="button" onclick="showText('text3', 'button3')">Virtual Office Solutions</div>
    </div>

    <!-- Text Blocks -->
    <div id="text1" class="displayText active">
        <h1>Mainland</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam porro, tempora aliquam, voluptate dolores beatae obcaecati architecto harum error nam magni itaque possimus, cumque quis blanditiis quos tempore sit ut!
        </p>
    </div>
    <div id="text2" class="displayText">
        <h1>Freezone</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam porro, tempora aliquam, voluptate dolores beatae obcaecati architecto harum error nam magni itaque possimus, cumque quis blanditiis quos tempore sit ut!
        </p>
    </div>
    <div id="text3" class="displayText">
        <h1>Virtual Office Solutions</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam porro, tempora aliquam, voluptate dolores beatae obcaecati architecto harum error nam magni itaque possimus, cumque quis blanditiis quos tempore sit ut!
        </p>
    </div>

    <section class="dark-section">
        <h2>Our Accounting & Financial Services</h2>
        <!-- <p style="width: 56%;margin: 0 auto;">Second citizenship or residency offers a key to a better future for you and your family. Whether you are a businessman, a frequent international traveler, or want better security for your family, you will significantly benefit from obtaining a second citizenship.</p> -->
        <br>
        <div class="benefits">
            <div class="benefit">
                <h3>Visa-Free Travel</h3>
                <p>Travel freely to over 160 countries around the world.</p>
            </div>
            <div class="benefit">
                <h3>A Safe Future</h3>
                <p>Access the world’s best education and healthcare systems, and enjoy a higher quality of life.</p>
            </div>
            <div class="benefit">
                <h3>Financial Flexibility</h3>
                <p>Better tax planning and opportunities for global business expansion.</p>
            </div>
        </div>
    </section>

    <script>
        function showText(textId, buttonId) {
            // Hide all text blocks
            const allTexts = document.querySelectorAll('.displayText');
            allTexts.forEach(text => text.classList.remove('active'));

            // Remove active class from all buttons
            const allButtons = document.querySelectorAll('.button');
            allButtons.forEach(button => button.classList.remove('active'));

            // Show the clicked text block
            const selectedText = document.getElementById(textId);
            selectedText.classList.add('active');

            // Add active class to the clicked button
            const selectedButton = document.getElementById(buttonId);
            selectedButton.classList.add('active');
        }
    </script>

</body>
</html>
