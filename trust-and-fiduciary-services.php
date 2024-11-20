<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Axis Point - Trust & Fiduciary Services</title>
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

		.section1>h1 {
			padding-top: 30px;
		}

		.section1 {
			margin-bottom: 30px;
		}

		ol {
			list-style-type: none;
			margin-left: -10px;
		}

		ol>li {
			padding: 10px;
		}

		.companyClass {
			width: 80%;
			margin: 50px auto;
			line-height: 30px;
		}

		p {
			font-size: 20px;
		}

		table {
			margin: 0 auto;
		}

		td {
			width: 500px;
			padding-bottom: 20px;
		}

		@media (max-width: 900px) {
			.section1 {
				border: 1px solid red;
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
		<img src="./img/trust.jpg" alt="Trust & Fiduciary Services" class="hero">
	</section>

	<section class="section1">
		<h1>Trust & Fiduciary Services</h1>
		<div class="text-content">
			<p>
				Axis Point is dedicated to providing high-net-worth individuals, families, and global
				enterprises with trusted Trust & Fiduciary Services that secure and enhance wealth across
				generations. Our focus on professionalism, integrity, and client success ensures every
				solution is tailored to meet unique needs, whether for asset protection, succession
				planning, or wealth growth.
				<br><br>
				With years of expertise and a global perspective, our team simplifies the complex world of
				trust
				formation, fiduciary management, and family office services. Axis Point’s services are
				built on
				confidentiality, stability, and strategic planning, helping you achieve lasting financial
				security.
			</p>
			<p>
				We offer efficient, compliant trust and fiduciary structures designed to meet
				international
				standards, often with minimal residency requirements. Our global programs provide a
				holistic
				approach to wealth preservation, combining asset protection, freedom of movement, and
				opportunities
				for profitable investments.
				<br><br>
				As a certified provider of Trust & Fiduciary Services, Axis Point guides clients through
				the setup
				and management of secure structures that align with their financial strategies and expand
				their
				global footprint.
			</p>
		</div>
		</div>
		<br><br>
	</section>
	<section class="dark-section">
		<h2>Why Invest in Trust & Fiduciary Services?</h2>
		<p style="width: 56%; margin: 0 auto;">
			Trust and fiduciary services provide a solid foundation for protecting, managing, and transferring wealth
			effectively. Whether you aim to secure assets for future generations, achieve tax efficiency, or ensure
			business continuity, Axis Point’s services deliver the stability, flexibility, and peace of mind that
			your wealth requires.
		</p>

		<div class="benefits">
			<div class="benefit">
				<h3>Asset Protection</h3>
				<p>Shield your assets from risks such as political instability, economic shifts, and personal
					liabilities.</p>
			</div>
			<div class="benefit">
				<h3>Legacy Planning</h3>
				<p>Establish a structured plan to pass on your wealth according to your values and wishes.</p>
			</div>
			<div class="benefit">
				<h3>Global Flexibility</h3>
				<p>Access international markets and optimize your wealth management across borders.</p>
			</div>
		</div>
	</section>

	<section>
		<div id="companyInfoDiv" class="companyClass">
			<h2>Our Trust & Fiduciary Services</h2>
			<ol>
				<li>
					<p><b>Trust Formation & Management</b><br>
						Axis Point assists in establishing and managing trust structures that align with your
						goals, providing a secure way to manage and transfer assets while safeguarding privacy.
					</p>
				</li>

				<li>
					<p><b>Trustee & Fiduciary Services</b><br>
						As a reliable trustee, we act in your best interests, fulfilling fiduciary
						responsibilities with professionalism and confidentiality, ensuring your assets are
						managed according to your wishes.</p>
				</li>

				<li>
					<p><b>Wealth Structuring & Succession Planning</b><br>
						Our experts design comprehensive wealth structuring and succession plans that preserve
						family wealth and ensure a smooth transfer of assets across generations.</p>
				</li>

				<li>
					<p><b>Family Office Services</b><br>
						Axis Point provides comprehensive family office services to manage financial, legal, and
						personal needs, creating a centralized approach to your family’s wealth and legacy
						management.</p>
				</li>

				<li>
					<p><b>Private Wealth Management Advisory</b><br>
						Our advisory services offer tailored investment strategies and portfolio management,
						empowering clients to grow and preserve wealth effectively over time.</p>
				</li>

				<li>
					<p><b>Foundation Setup & Administration</b><br>
						We assist with the setup and administration of charitable foundations, ensuring alignment
						with your values and effective management for meaningful impact.</p>
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