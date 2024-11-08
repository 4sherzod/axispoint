<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Buttons with Exclusive Text Display</title>
    <link rel="stylesheet" href="./css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/corporate.css">
    <style>
        p{
            font-size: 20px;
        }
        #companyDiv{
            display: flex;
            gap: calc(10%);
            /* border: 1px solid blue; */
        }
        #companyDiv div{
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
            margin: 30px auto;
            line-height: 30px;
        }
        ol>li{
            padding: 10px;
        }
        .countryImg{
            height: 80px;
        }
        #countries{
            margin: auto;
            padding: 20px;
            border-spacing: 50px;
        }
        #countries td{
            width: 250px;
            border-bottom: 1px solid #dbbf8b;
            text-align: center;
            padding-bottom: 20px;
            text-align: left;
            line-height: 20px;
        }
        #countries td span{
            font-size: 30px;
        }
        #countryTitle{
            margin: auto;
            margin-top: 80px;
            width: fit-content;
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
     <br><br>
    <div id="companyDiv" class="companyClass sectionforbar">
        <div> 
            <h1>Concierge services</h1>
            <p>Our exclusive concierge services are designed to cater to both business and personal needs, ensuring a seamless and luxurious experience. From organizing travel bookings—including flights, hotels, and private jet charters—to securing exclusive access to sought-after events, we handle every detail. Our team also manages comprehensive relocation support, visa assistance, and tailored transportation arrangements, ensuring you arrive with ease and style. For those seeking unique experiences, we offer curated private tours, luxury accommodations, and event planning. With our concierge services, every aspect of your journey is managed with professionalism and precision, allowing you to focus on what truly matters.</p>
        </div>
        <div><img src="./img/concierge.jpg" alt=""></div>
    </div>
    <!-- <div style="height:1px; width:700px; margin: auto; background-color: #dbbf8b;"></div> -->
    <div id="companyInfoDiv" class="companyClass"> 
        <h2 style="font-size:30px;line-height:50px;">Types of Services</h2>
    <ol>
        <li>
            <p>
                <b>Travel Planning & Booking (Flights, Hotels, Car Rentals)</b><br>
                We handle all travel arrangements, from flights and hotels to car rentals, ensuring seamless transportation and accommodations tailored to your needs.
            </p>
        </li>
        <li>
            <p>
                <b>Private Jet & Yacht Charters</b><br>
                For an elevated experience, we offer private jet and yacht charter services, providing luxurious and convenient options for business or leisure travel.
            </p>
        </li>
        <li>
            <p>
                <b>Airport Meet & Greet Services</b><br>
                Our meet-and-greet service ensures a warm welcome and smooth navigation through airports, enhancing your travel experience with convenience and comfort.
            </p>
        </li>
        <li>
            <p>
                <b>Luxury Accommodation & Villa Rentals</b><br>
                We arrange top-tier accommodations, including luxury hotels and private villas, to ensure comfort and style at your destination.
            </p>
        </li>
        <li>
            <p>
                <b>Travel Itinerary Creation</b><br>
                Our team crafts detailed, personalized itineraries to enhance your travel experience, blending essential meetings with exclusive leisure activities.
            </p>
        </li>
        <li>
            <p>
                <b>Exclusive Access to Events (Concerts, Sports, Fashion Shows)</b><br>
                Enjoy exclusive entry to prestigious events, including concerts, sports games, and fashion shows, for a memorable and unique experience.
            </p>
        </li>
        <li>
            <p>
                <b>Transportation Arrangements (Chauffeurs, Limousines)</b><br>
                We coordinate high-end transportation, including chauffeurs and limousines, for seamless travel and convenience at your destination.
            </p>
        </li>
        <li>
            <p>
                <b>Visa & Passport Assistance</b><br>
                Our team assists with visa and passport applications, making sure all necessary documentation is handled accurately and efficiently.
            </p>
        </li>
        <li>
            <p>
                <b>Private Tours & Experiences (e.g., Guided City Tours, Adventure Tours)</b><br>
                We organize private tours and unique experiences tailored to your interests, from cultural city tours to adventurous excursions.
            </p>
        </li>
        <li>
            <p>
                <b>Relocation Assistance</b><br>
                Moving to a new location? Our relocation support covers everything from housing arrangements to local orientation, making transitions smooth.
            </p>
        </li>
        <li>
            <p>
                <b>Business Travel Arrangements</b><br>
                We handle every detail of your business travel, ensuring timely and efficient arrangements so you can focus on what matters most.
            </p>
        </li>
        <li>
            <p>
                <b>Corporate Event Planning (Conferences, Team-Building)</b><br>
                Our event planning services help organize conferences and team-building activities, tailored to enhance corporate cohesion and success.
            </p>
        </li>
        <li>
            <p>
                <b>Event Planning & Coordination</b><br>
                From private gatherings to large-scale events, we coordinate every detail to ensure a successful and memorable occasion.
            </p>
        </li>
        <li>
            <p>
                <b>Home Management (Housekeeping, Repairs)</b><br>
                Our home management services cover housekeeping and repair coordination, giving you peace of mind for a well-maintained residence.
            </p>
        </li>
        <li>
            <p>
                <b>Reservation Services (Restaurants, Events)</b><br>
                We handle restaurant and event reservations, securing bookings at sought-after locations to match your preferences.
            </p>
        </li>
    </ol>

    </div>

    <?php
         include_once "footer.php";
         renderFooter();
    ?>

</body>
</html>
