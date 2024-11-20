<?php
function renderFooter()
{
    echo '
    <style>
    footer {
        background-color: #253450;
        color: #dbbf8b;
        padding: 50px;
        display: flex;
        min-height: 150px;

    footer div {
        display: block;
        padding: 0;
        margin-left: 60px;
        text-align: left;
        width: 170px;
        min-width: 170px; /* Ensure minimum width */
        height: 150px;
    }
    #together {
        display: flex;
        gap: 120px;
        margin: auto;
        width: fit-content;
    }
    footer p {
        margin-top: 10px;
    }

    #together>div>h2 {
        color: white;
        margin-bottom: 20px;
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

    div {
        margin 0 auto;
    }
    .line{
        height: 1px;
        display: none;
    }

    @media (max-width: 900px) {
        footer {
            align-items: center;
            flex-direction: column;
            height: fit-content;
        }

        footer div {
            margin: 0 auto;
        }

        #together {
            display: block;
            margin: 0 auto;
            /* Include border in the total width and height */
            width: fit-content;
            height: fit-content;
            /* Ensure #together wraps around its contents */
            margin-top: 30px;
            height: fit-content;
            text-align: center;
        }
        #together h2{
            margin-bottom: 5px;
        }

        #together div {
            margin-bottom: 10px;
            padding-bottom: 10px;
        }
        .line{
            display: block;
            height: 1px;
            width: 50px; 
            margin: auto; 
            border-top: 1px solid #dbbf8b;
        }
    }
</style>
<footer>
  
    <div id="together">
        <div class="together" id="axisFooter" style="text-align: center; width: 200px;">
            <img src="./img/compass.png" alt="" width="60px">
            <p style="font-size: 25px; margin: 0 auto; text-align: center;">AXIS POINT</p>
            <p>Building business with you since 2020</p>
        </div>
        <div class="line"></div>
        <div class="together">
            <h2>Quick Access</h2>
            <a href="index.php" class="hover-link">Home</a>
            <br>
            <a href="about-us.php" class="hover-link">About Us</a>
            <br>
            <a href="services.php" class="hover-link">Services</a>
            <br>
            <a href="contact-us.php" class="hover-link">Contact Us</a>
        </div>
        <div class="line"></div>
        <div class="together">
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
</footer>
    
    ';
}
// <div id="socials">
//         <h2 style=" margin-bottom: 10px">Follow Us: </h2>
//         <a href=""><img src="./img/instagram-icon.svg" alt=""></a>
//         <a href=""><img src="./img/x-icon.svg" alt=""></a>
//         <a href=""><img src="./img/youtube-icon.svg" alt=""></a>
//         <a href=""><img src="./img/instagram-icon.svg" alt=""></a>
//         <a href=""><img src="./img/x-icon.svg" alt=""></a>
//     </div>