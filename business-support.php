<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AxisPoint Citizenship by Investment Programs</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
	<style>
		.hero {
		 object-fit: cover;
		 object-position: center;
		 height: 400px;
		 width: 100%;
		}
		#darkImg{
			padding: 0;
            margin: 0;
            height: 400px;
		}

		.countryImg{
            /* height: 80px; */
			width: 80px;
        }
        .section1>h1{
            padding-top: 30px;
        }
        ol {
            list-style-type: none; /* Ensure this is set to decimal */
            margin-left: -10px; /* Add some left margin for better visibility */
        }
        ol>li{
            padding: 10px;
        }
        .companyClass{
            width: 80%;
            margin: 50px auto;
            line-height: 30px;
        }
        p{
            font-size: 20px;
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

<section id="darkImg">
	<img src="./img/support.jpg" alt="" class="hero">
	<!-- <h2>AXISPOINT</h2> -->
</section>
<section class="section1">
	<!-- <img src="pass.jpg" alt="AxisPoint Logo" width="100%"> -->
	<h1>Business Support & Outsourcing Services</h1>
	<div>
		<p>
			Savory & Partners are trusted by Governments around the world to source individuals of the highest calibre and to successfully process second Citizenship by investment programmes and Residency solutions for them.
			<br>
			<br>
			A British family company with roots established over two centuries ago, Savory & Partners prides itself on traditional values, professional conduct and the highest ethical standards. Our team of international consultants have an unrivalled knowledge of Investor Immigration Programs across the globe.
		</p>
		<p>
			We provide quick, legal, second passport and citizenship by investment programs with little or no residency requirements. Our Global Programs combine the benefits of Safe Haven, Freedom of Movement and Profitable Investment all in one.
			<br>
			<br>
			Savory & Partners is a Government Approved Citizenship through Investment programs and services Provider, guiding potential applicants to acquire citizenship through investment to avail global reach and become global citizens.
		</p>
	</div>
	<br><br>
	</section>

<section class="dark-section">
	<h2>Why should you invest in a second citizenship?</h2>
	<p style="width: 56%;margin: 0 auto;">Second citizenship or residency offers a key to a better future for you and your family. Whether you are a businessman, a frequent international traveler, or want better security for your family, you will significantly benefit from obtaining a second citizenship.</p>

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

<section>
    <div id="companyInfoDiv" class="companyClass"> 
        <h2>Business Support & Outsourcing Services</h2>
        <ol>
            <li>
                <p><b>IT Support & Solutions</b><br>
                Delivering reliable IT support and tailored technology solutions to enhance business efficiency and maintain secure digital operations.</p>
            </li>
            
            <li>
                <p><b>Document Management & Archiving</b><br>
                Providing secure and organized solutions for document storage and retrieval, ensuring easy access to critical information.</p>
            </li>
            
            <li>
                <p><b>Procurement Services</b><br>
                Streamlining procurement processes to achieve cost-effective, efficient sourcing and supply management tailored to business needs.</p>
            </li>
            
            <li>
                <p><b>Business Process Outsourcing (BPO)</b><br>
                Offering outsourcing solutions for non-core business functions, allowing organizations to focus on core activities and increase operational efficiency.</p>
            </li>
        </ol>
     </div>

</section>

<?php
         include_once "footer.php";
         renderFooter();
?>

</body>
</html>