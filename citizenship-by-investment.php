<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AxisPoint Citizenship by Investment Programs</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">
	<style>
		.hero {
			object-fit: cover;
			object-position: center;
			height: 400px;
			width: 100%;
		}

		#darkImg {
			padding: 0;
			margin: 0;
			height: 400px;
		}

		.countryImg {
			width: 80px;
		}

		table td:first-child {
			display: flex;
		}

		table td:first-child div:nth-child(2) {
			height: fit-content;
			margin: auto;
		}

		h1 {
			padding-top: 30px;
		}

		.section1 .text-content {
			display: flex;
			gap: 20px;
		}

		.section1 .text-content p {
			width: 50%;
			/* Two-column layout by default */
			line-height: 1.6;
		}


		/* Media query for mobile to switch to single-column layout */
		@media (max-width: 900px) {
			.section1 {
				/* border: 1px solid red; */
				width: 100%;
				/* Full width on mobile */
				max-width: 100%;
				margin: 0 auto;
				/* Center the section */
			}

			.section1 h1 {
				/* border: 1px solid red; */
				font-size: 1.8em;
				margin-top: 20px;
				text-align: center;
			}

			.section1 .text-content {
				/* border: 1px solid red; */
				display: block;
				min-width: 80%;
				/* Stack content vertically */
				padding: 0;
				/* Remove any padding */
			}

			.section1 .text-content p {
				width: 100%;
				/* Full width for each paragraph */
			}
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

	<section id="darkImg" class="dark-section">
		<img src="./img/pass.jpg" alt="" class="hero">
	</section>
	<section class="section1">
		<h1>Citizenship by Investment</h1>
		<div class="text-content">
			<p>
				Axis Point is a trusted provider for governments around the world, facilitating Citizenship by
				Investment programs and Residency solutions for individuals seeking enhanced global mobility and
				financial freedom.
				<br><br>
				With a strong foundation and a commitment to ethical practices, Axis Point ensures a smooth,
				transparent process for obtaining second citizenship or residency. Our team of international
				consultants brings deep expertise in investor immigration programs worldwide.
			</p>
			<p>
				We offer efficient, legal pathways to second citizenship through investment, often with minimal or
				no residency requirements. Our global programs combine the benefits of secure residency, global
				mobility, and attractive investment opportunities.
				<br><br>
				As an approved provider of Citizenship by Investment services, Axis Point guides clients through
				every step of the process, helping them achieve global reach and flexibility as global citizens.
			</p>
		</div>
		</div>
		<br><br>
	</section>

	<section class="dark-section">
		<h2>Why Invest in a Second Citizenship?</h2>
		<p style="width: 56%; margin: 0 auto;">A second citizenship or residency offers security, mobility, and
			financial flexibility for you and your family. Whether you're a global entrepreneur, frequent traveler,
			or looking for improved lifestyle options, second citizenship brings multiple benefits.</p>

		<div class="benefits">
			<div class="benefit">
				<h3>Visa-Free Travel</h3>
				<p>Access over 150 countries with ease, enhancing your personal and business travel capabilities.
				</p>
			</div>
			<div class="benefit">
				<h3>Enhanced Security</h3>
				<p>Provide your family with access to top-tier education, healthcare, and a better quality of life
					in a secure environment.</p>
			</div>
			<div class="benefit">
				<h3>Financial Flexibility</h3>
				<p>Explore tax-efficient opportunities and expand your global business footprint with strategic
					investments.</p>
			</div>
		</div>
	</section>

	<section class="section" id="tablecountries">
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
					<td><img src="./gerb/antigua.png" alt="Antigua and Barbuda" class="countryImg">
						<div>Antigua and Barbuda</div>
					</td>
					<td>USD 100,000</td>
					<td class="last">Visa-free or visa-on-arrival travel to over 150 countries, including the UK,
						Schengen Area, Hong Kong, and Singapore.</td>
				</tr>
				<tr>
					<td><img src="./gerb/dominica.png" alt="Dominica" class="countryImg">
						<div>Dominica</div>
					</td>
					<td>USD 100,000</td>
					<td class="last">Visa-free access to over 140 countries, with no physical residency
						requirements to maintain citizenship.</td>
				</tr>
				<tr>
					<td><img src="./gerb/grenada.png" alt="Grenada" class="countryImg">
						<div>Grenada</div>
					</td>
					<td>USD 150,000</td>
					<td class="last">Only Caribbean citizenship program offering visa-free access to China, plus
						E-2 visa eligibility for the United States.</td>
				</tr>
				<tr>
					<td><img src="./gerb/st-kitts.png" alt="St Kitts & Nevis" class="countryImg">
						<div>St Kitts & Nevis</div>
					</td>
					<td>USD 150,000</td>
					<td class="last">Visa-free or visa-on-arrival travel to over 150 destinations, including the
						UK, Schengen Area, and Russia.</td>
				</tr>
				<tr>
					<td><img src="./gerb/st-lucia.png" alt="St Lucia" class="countryImg">
						<div>St Lucia</div>
					</td>
					<td>USD 100,000</td>
					<td class="last">Visa-free access to over 140 countries, with options for both real estate and
						donation investments.</td>
				</tr>
			</tbody>
		</table>
	</section>

	<?php
	include_once "footer.php";
	renderFooter();
	?>

</body>

</html>