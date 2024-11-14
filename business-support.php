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
			/* height: 80px; */
			width: 80px;
		}

		.section1>h1 {
			padding-top: 30px;
		}

		ol {
			list-style-type: none;
			/* Ensure this is set to decimal */
			margin-left: -10px;
			/* Add some left margin for better visibility */
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
		<h1>Citizenship by Investment</h1>
		<table>
			<tr>
				<td>
					<p>
						Axis Point is a trusted provider for governments around the world, facilitating
						Citizenship by Investment programs and Residency solutions for individuals seeking
						enhanced global mobility and financial freedom. Our commitment to transparency and ethical
						practices ensures a smooth, secure process for obtaining a second citizenship or
						residency.
					</p>
				</td>
				<td>
					<p>
						We offer efficient and legal pathways to second citizenship through investment, often with
						minimal or no residency requirements. Our global programs combine the advantages of secure
						residency, unrestricted travel, and lucrative investment opportunities, allowing you to
						expand your global reach.
					</p>
				</td>
			</tr>
			<tr>
				<td>
					<p>
						With a strong foundation and a team of experienced international consultants, Axis Point
						brings a deep understanding of investor immigration programs across multiple
						jurisdictions. We provide tailored guidance to meet the unique needs of each client,
						helping them achieve flexibility and security as global citizens.
					</p>
				</td>
				<td>
					<p>
						As an approved provider of Citizenship by Investment services, Axis Point supports clients
						at every stage of the process. From initial consultation to final documentation, we ensure
						that each step is handled professionally, enabling clients to realize their ambitions of
						global citizenship and financial independence.
					</p>
				</td>
			</tr>
		</table>
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