<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php
    include_once "load.php";
    renderLoader();
    include_once "topbar.php";
    renderHeader();
    ?>
    <br>
    <!-- <h1 style="font-weight:bold;">What We Offer</h1>
    <p id="desc">From company formation to visa services, Axis Point provides end-to-end solutions for all your business
        needs.</p> -->
        <br>
    <div style="height:1px; width:150px; margin: auto; background-color: #dbbf8b;"></div>
    <br>
    <h1 style="font-weight:bold;">Explore Our Services</h1>
    <p id="desc">From company formation to visa services, Axis Point provides end-to-end solutions for all your business
        needs.</p>
    <br>
    <div style="height:1px; width:150px; margin: auto; background-color: #dbbf8b;"></div>
    <br>
    <section class="services">
        <table>
            <tr>
                <td>
                    <a href="Corporate-Formation-&-Administration.php">
                        <div class="service">
                            <img src="./img/handshake.jpg" alt="Company Formation" class="homeImg">
                            <h3>Corporate Formation & Administration (UAE)</h3>
                            <div style="height:1px; width:50px; margin: auto; background-color: #dbbf8b;"></div> <br>
                            <p>Axis Point offers expert business solutions, including company formation, legal compliance, tax registration, visa assistance, and financial services. Whether you're starting a new venture or expanding globally, our tailored approach ensures a seamless setup and ongoing support for your business success.</p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="tax-planning.php">
                        <div class="service">
                            <img src="./img/tax.jpg" alt="Banking Solutions" class="homeImg">
                            <h3>Tax Planning & Offshore Service</h3>
                            <div style="height:1px; width:50px; margin: auto; background-color: #dbbf8b;"></div> <br>
                            <p>We provide expert tax planning and offshore solutions, including company formation, trusts, and international tax structuring. Our services help businesses optimize profits, protect assets, and stay compliant with global standards. Operating in key locations like Singapore, Hong Kong, and the UK, we assist with offshore setups, banking solutions, and double taxation advisory.</p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="hr.php">
                        <div class="service">
                            <img src="./img/hr.jpg" alt="Visa Services" class="homeImg">
                            <h3>Human Resources & Recruitment Services</h3>
                            <div style="height:1px; width:50px; margin: auto; background-color: #dbbf8b;"></div> <br>
                            <p>Talent acquisition, recruitment, HR outsourcing, payroll administration, employee benefits, training, performance management, executive search, headhunting, and expatriate services, including work permits and visas, all tailored to build efficient, compliant teams and support employee growth.</p>
                        </div>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="citizenship-by-investment.php">
                        <div class="service">
                            <img src="./img/pass.jpg" alt="Accounting & Auditing" class="homeImg">
                            <h3>Citizenship by Investment & Residency Solutions</h3>
                            <div style="height:1px; width:50px; margin: auto; background-color: #dbbf8b;"></div> <br>
                            <p>Citizenship by investment programs, due diligence for investment migration, and real estate investment advisory are offered to provide tailored residency and citizenship solutions. These services help individuals secure new opportunities while ensuring compliance and strategic investments for long-term benefits.</p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="trust-and-fiduciary-services.php">
                        <div class="service">
                            <img src="./img/trust.jpg" alt="Office Setup" class="homeImg">
                            <h3>Trust & Fiduciary Services</h3>
                            <div style="height:1px; width:50px; margin: auto; background-color: #dbbf8b;"></div> <br>
                            <p>Trust formation and management, trustee and fiduciary services, wealth structuring and succession planning, family office services, private wealth management advisory, and foundation setup and administration are provided to help individuals and families protect and grow their assets, ensuring long-term financial security and a smooth transition of wealth across generations.</p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="brand-protection.php">
                        <div class="service">
                            <img src="./img/brand.jpg" alt="Property Solutions">
                            <h3>Brand Protection</h3>
                            <div style="height:1px; width:50px; margin: auto; background-color: #dbbf8b;"></div> <br>
                            <p>Brand protection services include trademark and patent registration, along with copyright registration and management, to safeguard intellectual property and ensure long-term legal protection for your brand and creative works.</p>
                        </div>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="business-support.php">
                        <div class="service">
                            <img src="./img/support.jpg" alt="Business Launch Support">
                            <h3>Business Support & Outsourcing Services</h3>
                            <div style="height:1px; width:50px; margin: auto; background-color: #dbbf8b;"></div> <br>
                            <p>Business support and outsourcing services include IT support and solutions, document management and archiving, procurement services, and business process outsourcing (BPO), all designed to enhance operational efficiency and streamline business functions.</p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="banking.php">
                        <div class="service">
                            <img src="./img/banking.jpg" alt="Citizenship by Investment">
                            <h3>Banking Solutions</h3>
                            <div style="height:1px; width:50px; margin: auto; background-color: #dbbf8b;"></div> <br>
                            <p>Banking solutions include business and personal accounts, business finance, trade finance, TWC, mortgages, and auto finance. These services provide comprehensive financial support, helping businesses manage operations and individuals achieve personal financial goals with flexibility and security.</p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="concierge.php">
                        <div class="service">
                            <img src="./img/concierge.jpg" alt="UAE Tax Residence">
                            <h3>Concierge Services</h3>
                            <div style="height:1px; width:50px; margin: auto; background-color: #dbbf8b;"></div> <br>
                            <p>Concierge services offer personalized travel planning and booking, including flights, hotels, and car rentals, along with private jet and yacht charters. Additional services include airport meet and greet, luxury accommodation and villa rentals, custom travel itineraries, and exclusive access to events such as concerts, sports, and fashion shows, ensuring a seamless and luxurious experience.</p>
                        </div>
                    </a>
                </td>
            </tr>
        </table>
    </section>
    <?php
         include_once "footer.php";
         renderFooter();
    ?>
</body>

</html>