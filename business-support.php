<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AxisPoint Business Support & Outsourcing Services</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap"
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

		.section1 {
			margin: 20px;
		}

		@media (max-width: 900px) {
			.section1 {
				width: 100%;
				max-width: 100%;
				margin: 0 auto;
			}

			.section1 h1 {
				font-size: 1.8em;
				margin-top: 20px;
				text-align: center;
			}

			.section1 .text-content {
				display: block;
				min-width: 80%;
				padding: 0;
			}

			.section1 .text-content p {
				width: 100%;
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

	<section id="darkImg">
		<img src="./img/support.jpg" alt="Business Support & Outsourcing Services" class="hero">
	</section>

	<section class="section1">
		<h1>Business Support & Outsourcing Services</h1>
		<div class="text-content">
			<p>
				Axis Point offers a wide range of Business Support & Outsourcing Services, aimed at helping
				businesses streamline their operations, reduce costs, and enhance efficiency. We understand that
				managing non-core functions can be time-consuming, and our services are designed to allow you to
				focus on your main business goals.
				<br><br>
				With our expertise in IT Support, Document Management, Procurement, and Business Process Outsourcing
				(BPO), we provide reliable, flexible, and scalable solutions tailored to meet the unique needs of
				each client.
			</p>
			<p>
				Our team of professionals ensures a seamless integration of these services into your existing
				operations, so you can benefit from reduced operational complexity and improved productivity. Axis
				Point’s outsourcing solutions are structured to adapt to your business growth, providing long-term
				value and sustainability.
				<br><br>
				As a trusted partner in business support, Axis Point is committed to delivering high-quality
				services that enable your organization to operate efficiently, scale effectively, and stay
				competitive in today’s fast-paced business environment.
			</p>
		</div>
		<br><br>
	</section>

	<section class="dark-section">
		<h2>Why Choose Business Support & Outsourcing?</h2>
		<p style="width: 56%;margin: 0 auto;">
			Outsourcing your non-core business functions allows you to streamline operations, reduce costs, and focus
			on what matters most—growing your business. By partnering with Axis Point, you gain access to specialized
			expertise and reliable support, ensuring that your operations are efficient and scalable.
		</p>

		<div class="benefits">
			<div class="benefit">
				<h3>Enhanced Efficiency</h3>
				<p>Access dedicated resources to optimize workflows and increase productivity without overburdening
					your team.</p>
			</div>
			<div class="benefit">
				<h3>Cost Savings</h3>
				<p>Reduce operational expenses by outsourcing key services, enabling you to allocate resources more
					strategically.</p>
			</div>
			<div class="benefit">
				<h3>Scalable Solutions</h3>
				<p>Leverage flexible support that scales with your business needs, adapting as your organization
					grows.</p>
			</div>
		</div>
	</section>

	<section>
		<div id="companyInfoDiv" class="companyClass">
			<h2>Our Business Support & Outsourcing Services</h2>
			<ol>
				<li>
					<p><b>IT Support & Solutions</b><br>
						Providing reliable IT support and customized technology solutions to enhance operational
						efficiency and secure digital infrastructure. From troubleshooting to system optimization,
						we ensure your IT environment is robust and responsive.</p>
				</li>

				<li>
					<p><b>Document Management & Archiving</b><br>
						Delivering organized and secure document storage and retrieval solutions to streamline
						information management, ensuring compliance and easy access to critical business records.
					</p>
				</li>

				<li>
					<p><b>Procurement Services</b><br>
						Simplifying procurement processes with tailored solutions that support cost-effective
						sourcing and supply management, meeting business requirements for materials, equipment,
						and services.</p>
				</li>

				<li>
					<p><b>Business Process Outsourcing (BPO)</b><br>
						Enabling businesses to focus on their core competencies by outsourcing non-essential
						functions, such as customer service, HR, and accounting, to increase efficiency and
						improve service quality.</p>
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