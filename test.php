<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>

     <style>
          footer {
               background-color: #253450;
               color: #dbbf8b;
               padding: 50px;
               display: flex;
          }

          #socials {
               margin-left: auto;
               margin-top: 57px;
               margin-right: 75px;
               width: auto;
               height: auto;
          }

          footer div {
               display: block;
               padding: 0;
               margin-left: 60px;
               text-align: left;
               width: 170px;
               min-width: 170px;
               /* Ensure minimum width */
               height: 150px;
               flex-shrink: 0;
               /* Prevent shrinking */
               border: 1px solid red;
          }

          #together {
               display: flex;
               border: 1px solid black;
               gap: 30px;
               margin-right: 75px;
               width: fit-content;
          }

          footer p {
               margin-top: 10px;
          }

          footer h2 {
               color: white;
               margin-bottom: 25px;
          }

          .hover-link {
               text-decoration: none;
               color: #dbbf8b;
               /* Original link color */
               position: relative;
               font-size: 20px;
               transition: color 0.3s ease;
          }

          /* Underline animation effect */
          .hover-link::before {
               content: " ";
               position: absolute;
               width: 0;
               height: 1px;
               bottom: -1px;
               /* Position just below the text */
               left: 0%;
               background-color: #dbbf8b;
               /* Line color */
               transition: width 0.3s ease, left 0.3s ease;
          }

          /* Hover effect for underline animation */
          .hover-link:hover::before {
               width: 100%;
               left: 0;

          }

          footer a img {
               background-color: lightgrey;
               border-radius: 30%;
               width: 36px;
               margin-right: 2px;
          }

          footer a img:hover {
               background-color: darkgrey;
               transition: 0.3s ease;
          }

          div {
               margin 0 auto;
          }

          @media (max-width: 900px) {
               footer {
                    align-items: center;
                    flex-direction: column;
               }

               footer div {
                    margin: 0 auto;
               }

               #socials {
                    margin-left: 0px;
               }

               #together {
                    margin: 0 auto;
                    box-sizing: border-box;
                    /* Include border in the total width and height */
                    width: fit-content;
                    /* Ensure #together wraps around its contents */
               }
          }
     </style>
     <?php
     include_once "load.php";
     renderLoader();
     include_once "topbar.php";
     renderHeader();
     ?>
     <footer>
          <div style="text-align: center; width: 200px;">
               <img src="./img/compass.png" alt="" width="60px">
               <p style="font-size: 25px; margin: 0 auto; text-align: center;">AXIS POINT</p>
               <p>Building business with you since 2020</p>
          </div>
          <div id="together">
               <div>
                    <h2>Quick Access</h2>
                    <a href="index.php" class="hover-link">Home</a>
                    <br>
                    <a href="about-us.php" class="hover-link">About Us</a>
                    <br>
                    <a href="services.php" class="hover-link">Services</a>
                    <br>
                    <a href="contact-us.php" class="hover-link">Contact Us</a>
               </div>
               <div>
                    <h2>Quick Info</h2>
                    <a href="tel:+97145580736" class="hover-link">+971 4 558 0736</a>
                    <br>
                    <a href="#" class="hover-link">contact@axispoint.me</a>
                    <br>
                    <a href="#" class="hover-link">Nad Al Sheba 3</a>
                    <br>
                    <a href="#" class="hover-link">Repton School Dubai</a>
               </div>
          </div>
          <div id="socials">
               <h2 style=" margin-bottom: 10px">Follow Us: </h2>
               <a href=""><img src="./img/instagram-icon.svg" alt=""></a>
               <a href=""><img src="./img/x-icon.svg" alt=""></a>
               <a href=""><img src="./img/youtube-icon.svg" alt=""></a>
               <a href=""><img src="./img/instagram-icon.svg" alt=""></a>
               <a href=""><img src="./img/x-icon.svg" alt=""></a>
          </div>
     </footer>
</body>

</html>