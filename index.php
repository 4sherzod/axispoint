<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AccessPoint - Citizenship by Investment Programs</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		.hero {
			background-image: url('your-image-path.jpg');
			background-size: cover;
			background-position: center;
			height: 400px;
			position: relative;
			text-align: center;
		}
		.hero h2 {
			position: absolute;
			bottom: 20px;
			left: 50%;
			transform: translateX(-50%);
			color: white;
			font-size: 36px;
			font-weight: bold;
		}
		.section {
			padding: 40px 20px;
		}
		.section img {
			margin-bottom: 20px;
		}
		.section p {
			font-size: 16px;
			margin: 0 auto 20px;
			max-width: 800px;
		}
		.section h1 {
			font-size: 40px;
			margin: 0 auto 20px;
			font-weight: normal;
			text-align: center;
		}
		.dark-section {
			background-color: #253450;
			color: white;
			padding: 60px 20px;
			color: #dbbf8b;
			text-align: center;
		}
		.dark-section h2 {
			/* margin: 0 auto; */
			margin-bottom: 30px;
		}
		.benefits {
			display: flex;
			justify-content: space-around;
			text-align: center;
			margin-top: 30px;
		}
		.benefit {
			max-width: 200px;
		}
		.benefit h3 {
			margin-bottom: 10px;
		}
		.benefit p {
			font-size: 14px;
		}
		table {
			width: 70%;
			margin: 40px auto;
			border-collapse: collapse;
		}
		table, th, td {
			border-bottom: 1px solid black;
			padding: 10px;
		}
		footer {
			background-color: #253450;
			color: white;
		}

		footer p, footer a {
			margin: 0;
		}

		footer a {
			color: #dbbf8b;
			text-decoration: none;
		}
		footer div {
			margin: 0 auto;
			max-width: 80%;
			text-align: center;
			padding: 20px;
			display: flex;
			justify-content: space-between; /* Align items to opposite corners */
			align-items: center;
		}
		.last{ 
			max-width: 350px;
		}
		
		.section1 div {
			display: flex;
			max-width: 70%;
			margin: 0 auto;
			font-size: 16px;
			flex-direction: row; /* Ensure the paragraphs are laid out horizontally */
		}

		.section1 div p {
			padding: 25px;
			width: 50%; /* Each paragraph will take 50% of the parent div */
			box-sizing: border-box; /* Ensure padding doesn't affect width */
		}
		.section1 {
			text-align: center;
		}
	</style>
</head>
<body>

<?php
	require_once "topbar.php";
	renderHeader();
?>

<section class="hero">
	<h2>ACCESSPOINT</h2>
</section>

<section class="section1">
	<img src="your-logo-image.jpg" alt="AccessPoint Logo" width="100">
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

<section class="section">
	<h1>Caribbean Citizenship by Investment Programs</h1>
	<table>
		<thead>
			<tr>
				<th></th>
				<th>Minimum Capital</th>
				<th class="last">Key Benefit</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><img src="" alt="countrylogo">Antigua and Barbuda</td>
				<td>USD 230,000</td>
				<td class="last">Visa-free or visa-on-arrival travel to over 150 destinations, including Hong Kong, Russia, Singapore, the UK, and Europe’s Schengen Area.</td>
			</tr>
			<tr>
				<td><img src="" alt="countrylogo">Dominicana</td>
				<td>dfhdjsgfhjdsbv</td>
				<td class="last">Visa-free or visa-on-arrival travel to over 150 destinations, including Hong Kong, Russia, Singapore, the UK, and Europe’s Schengen Area.</td>
			</tr>
			<tr>
				<td><img src="" alt="countrylogo">Grenada</td>
				<td>USD 230,000</td>
				<td class="last">Visa-free or visa-on-arrival travel to over 150 destinations, including Hong Kong, Russia, Singapore, the UK, and Europe’s Schengen Area.</td>
			</tr>
		</tbody>
	</table>
</section>

<footer>
	<div>
		<p>&copy;2024. ACCESSPOINT. All Rights Reserved.</p>
		<a href="#">IDK SOME LINK</a>
	</div>
</footer>

</body>
</html>