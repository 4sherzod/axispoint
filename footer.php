<?php
function renderFooter() {
    echo '
    <style>
    footer {
        background-color: #253450;
        color: #dbbf8b;
        padding: 50px;
        display: flex;
    }

    footer div {
        display: block;
        padding: 0;
        margin-left: 60px;
        text-align: left;
        width: 130px;
        height: 150px;
        /* border: 1px solid red; */
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
</style>
<footer>
    <div style="text-align: center; width: 200px;">
        <img src="./img/compass.png" alt="" width="60px">
        <p style="font-size: 25px; margin: 0 auto; text-align: center;">AXIS POINT</p>
        <p>Building business with you since 2020</p>
    </div>
    <div>
        <h2>Quick Access</h2>
        <a href="#" class="hover-link">Home</a>
        <br>
        <a href="#" class="hover-link">About Us</a>
        <br>
        <a href="#" class="hover-link">Services</a>
        <br>
        <a href="#" class="hover-link">Contact Us</a>
    </div>
    <div>
        <h2>Quick Info</h2>
        <a href="#" class="hover-link">Home</a>
        <br>
        <a href="#" class="hover-link">About Us</a>
        <br>
        <a href="#" class="hover-link">Services</a>
        <br>
        <a href="#" class="hover-link">Contact Us</a>
    </div>
    <div style="margin-left: auto; margin-top: 57px; margin-right: 150px; width: auto; height: auto">
        <h2 style=" margin-bottom: 10px">Follow Us: </h2>
        <a href=""><img src="./img/instagram-icon.svg" alt=""></a>
        <a href=""><img src="./img/x-icon.svg" alt=""></a>
        <a href=""><img src="./img/youtube-icon.svg" alt=""></a>
        <a href=""><img src="./img/instagram-icon.svg" alt=""></a>
        <a href=""><img src="./img/x-icon.svg" alt=""></a>
    </div>
</footer>
    
    ';}
?>