<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Buttons with Exclusive Text Display</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/corporate.css">
    <style>
        p {
            font-size: 20px;
        }

        #companyDiv {
            display: flex;
            gap: calc(10%);
        }

        #companyDiv div {
            width: 45%;
        }

        #companyDiv>div>img {
            margin: auto;
            object-fit: cover;
            height: 330px;
            width: 500px;
            margin-right: 0;
        }

        .companyClass h1,
        .companyClass {
            text-align: left;
        }

        .companyClass {
            width: 80%;
            margin: 100px auto;
            line-height: 30px;
        }

        ol {
            list-style-type: none;
            margin-left: -10px;
        }

        ol>li {
            padding: 10px;
        }

        .countryImg {
            height: 80px;
        }

        #countries {
            margin: auto;
            padding: 20px;
            border-spacing: 50px;
        }

        #countries td {
            width: 250px;
            border-bottom: 1px solid #dbbf8b;
            text-align: center;
            padding-bottom: 20px;
            text-align: left;
            line-height: 20px;
        }

        #countries td span {
            font-size: 30px;
        }

        #countryTitle {
            margin: auto;
            margin-top: 80px;
            width: fit-content;
        }

        @media (max-width: 900px) {


            #companyDiv {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
                gap: 0;
                /* Full width on mobile */
            }

            #companyDiv div {
                min-width: 75%;
                /* Full width on mobile */
                margin-bottom: 70px;
            }

            .companyClass {
                margin: 0 auto;
            }
        }

        /* Media query for mobile screens */
        @media (max-width: 900px) {
            #countries {
                display: block;
                /* Change to block layout for stacking */
            }

            #countries tr {
                display: block;
                /* Make each row display as a block */
                margin-bottom: 20px;
                /* Add spacing between rows */
            }

            #countries td {
                display: block;
                /* Stack each cell vertically */
                width: 100%;
                /* Full width for each cell */
                text-align: left;
                padding-bottom: 10px;
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
    include_once "scrollbar.php";
    $ar = array("companyDiv", "Tax Planning & Offshore Service", "dark-section", "Why us?", "countriesforbar", "Countries");
    scrollbar($ar);
    ?>
    <div id="companyDiv" class="companyClass sectionforbar">
        <div>
            <h1>Tax Planning & Offshore Service</h1>
            <p>Starting a business is an exciting venture, but the process of setting up a company can be overwhelming.
                From legal documentation to compliance with local regulations, every step requires precision and careful
                planning. At Axis Point, we take the stress out of company formation by offering comprehensive services
                that cover every aspect of the process. Our expert team ensures that your business is set up smoothly,
                legally, and efficiently, allowing you to focus on what truly matters—growing your business.</p>
        </div>
        <div><img src="./img/tax.jpg" alt=""></div>
    </div>
    <div>
        <div id="companyInfoDiv" class="companyClass">
            <h2>Why Choose Axis Point for Company Formation?</h2>
            <p>At Axis Point, we understand that each business is unique. Whether you’re a startup, an established
                company looking to expand, or an entrepreneur seeking opportunities in a new market, our tailored
                approach to company formation ensures your specific needs are met. With years of experience, our team
                has in-depth knowledge of local and international regulations, making us the ideal partner for
                businesses looking to establish a presence in various jurisdictions.</p>
            <br>
            <h2>Our Company Formation Process</h2>
            <p>Our company formation services cover everything from initial consultation to the final registration of
                your business. Here’s a step-by-step look at how we make the process seamless:</p>
            <ol>
                <li>
                    <p>
                        <b>Offshore Company Formation</b><br>
                        We begin by understanding your business goals, industry, and target market. During this phase,
                        our consultants will discuss various jurisdiction options, helping you choose the most favorable
                        location for your business based on factors such as tax benefits, legal requirements, and
                        operational costs.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Offshore Trusts & Foundations</b><br>
                        Choosing the right jurisdiction is crucial to the success of your business. Whether you’re
                        setting up in the UAE, Europe, or Asia, we provide expert advice on the best location based on
                        your industry and objectives. We specialize in free zone, mainland, and offshore company
                        formations, ensuring flexibility and tailored solutions.
                    </p>
                </li>
                <li>
                    <p>
                        <b>International Tax Structuring</b><br>
                        Selecting the appropriate business structure is vital for your operations. We help you choose
                        from options such as sole proprietorship, limited liability company (LLC), branch office, or
                        subsidiary. Our legal team ensures that the chosen structure aligns with your long-term business
                        goals and complies with all relevant regulations.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Double Taxation Treaty Advisory</b><br>
                        Our experienced team handles all necessary paperwork, including drafting the Memorandum of
                        Association, Articles of Incorporation, and shareholder agreements. We take care of the
                        submission process, ensuring that all documents meet local regulatory requirements. With Axis
                        Point, you won’t have to worry about missing deadlines or incorrect filings.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Business Licensing and Permits</b><br>
                        Depending on the nature of your business, you may require specific licenses or permits to
                        operate legally. Our team ensures that all the necessary licenses—whether general trade,
                        industrial, or professional—are obtained promptly, allowing your business to start operations as
                        soon as possible.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Bank Account Setup</b><br>
                        Securing a corporate bank account is an essential part of company formation. We have established
                        partnerships with leading financial institutions and will assist in opening your business bank
                        account. Our team handles all the formalities, ensuring a smooth and hassle-free banking setup
                        that supports your financial operations.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Tax and Compliance Guidance</b><br>
                        Each jurisdiction has its own tax regulations and compliance requirements. We provide detailed
                        guidance on corporate tax, VAT, and other relevant taxes to ensure your business remains
                        compliant. Additionally, our team offers ongoing support with regulatory filings, annual
                        reports, and other legal obligations.
                    </p>
                </li>
                <li>
                    <p>
                        <b>Visa and Immigration Support</b><br>
                        If you’re planning to relocate to manage your business or hire foreign talent, our visa services
                        are here to help. We provide assistance with obtaining business owner, investor, and employee
                        visas, ensuring smooth entry and residency in your chosen jurisdiction.
                    </p>
                </li>
            </ol>
        </div>
        <div id="dark-section" class="dark-section sectionforbar">
            <h2>How Axis Point Can Help You with Tax Planning & Offshore Solutions?</h2>
            <p style="width: 66%;margin: 0 auto;">Axis Point provides a full suite of tax planning and offshore services
                that empower businesses and investors to operate securely, efficiently, and in compliance with
                international standards. By partnering with us, you gain access to a team of experts dedicated to
                protecting your interests, enhancing your financial efficiency, and ensuring the confidentiality and
                security of your operations. We handle every aspect of the setup, so you can focus on growing your
                business with confidence, knowing your assets and profits are optimized.</p>
        </div>
        <div id="countriesforbar" class="sectionforbar">
            <h1 id="countryTitle">Countries</h1>
            <table id="countries">
                <tr>
                    <td>
                        <div><img src="./gerb/singapore.png" alt="Singapore" class="countryImg"></div>
                        <br>
                        <div><span>Singapore</span><br><br>
                            Known for its stable economy and robust legal system, Singapore is a preferred location for
                            wealth management and business structuring. Its strategic location in Asia offers excellent
                            access to global markets, making it ideal for international business.
                        </div>
                    </td>
                    <td>
                        <div><img src="./gerb/malaysia.png" alt="Malaysia" class="countryImg"></div>
                        <br>
                        <div><span>Malaysia</span><br><br>
                            Malaysia offers a favorable environment for business with its diverse economy and growing
                            financial sector. The country is an attractive destination for offshore investments,
                            combining low operational costs with a supportive business climate.
                        </div>
                    </td>
                    <td>
                        <div><img src="./gerb/china.png" alt="China" class="countryImg"></div>
                        <br>
                        <div><span>China</span><br><br>
                            As one of the world’s leading economies, China presents vast opportunities for investment
                            and business growth. With numerous free trade zones and economic incentives, it remains a
                            key player in global trade and manufacturing.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div><img src="./gerb/hongkong.png" alt="Hong Kong" class="countryImg"></div>
                        <br>
                        <div><span>Hong Kong</span><br><br>
                            Renowned for its financial services and low tax regime, Hong Kong serves as a gateway to
                            mainland China and Asia. Its sophisticated banking infrastructure and business-friendly
                            policies attract investors worldwide.
                        </div>
                    </td>
                    <td>
                        <div><img src="./gerb/uk.png" alt="United Kingdom" class="countryImg"></div>
                        <br>
                        <div><span>United Kingdom</span><br><br>
                            The UK offers a rich history of financial services, a strong regulatory environment, and
                            access to European markets. It’s an excellent choice for businesses seeking stability and a
                            well-established legal framework.
                        </div>
                    </td>
                </tr>
            </table>
        </div>


        <?php
        include_once "footer.php";
        renderFooter();
        ?>

</body>

</html>