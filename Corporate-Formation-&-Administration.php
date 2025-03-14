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
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
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
            align-items: center;
            /* Center items vertically */
            display: flex;
            gap: calc(10%);
            /* border: 1px solid blue; */
        }

        .companyClass {
            width: 80%;
            margin: 100px auto;
            line-height: 30px;
        }


        #companyDiv div {
            width: 45%;
            /* border: 1px solid red; */
        }

        #companyDiv>div>img {
            margin: auto;
            /* width: 100%; */
            width: 100%;
            height: auto;
            object-fit: cover;
            max-width: 500px;
            margin-right: 0;
        }

        .companyClass h1,
        .companyClass {
            text-align: left;
            /* font-weight: normal; */
            /* margin-bottom: 20px; */
        }

        ol {
            list-style-type: decimal;
            /* Ensure this is set to decimal */
            margin-left: 20px;
            /* Add some left margin for better visibility */
        }

        ol>li {
            padding: 10px;
        }

        .asd {
            width: 80%;
            margin: auto;
            margin-bottom: 50px;
        }

        .displayText {
            line-height: 1.6;
            width: 900px;
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
    $ar = array("companyDiv", "Company Formation", "dark-section", "Why us?", "buttons", "Locations");
    scrollbar($ar);
    ?>
    <div id="companyDiv" class="sectionforbar companyClass">
        <div>
            <h1>Company Formation</h1>
            <p>Starting a business is an exciting venture, but the process of setting up a company can be overwhelming.
                From legal documentation to compliance with local regulations, every step requires precision and careful
                planning. At Axis Point, we take the stress out of company formation by offering comprehensive services
                that cover every aspect of the process. Our expert team ensures that your business is set up smoothly,
                legally, and efficiently, allowing you to focus on what truly matters—growing your business.</p>
        </div>
        <div><img src="./img/handshake.jpg" alt=""></div>
    </div>
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
                    <b>Initial Consultation</b><br>
                    We begin by understanding your business goals, industry, and target market. During this phase,
                    our consultants will discuss various jurisdiction options, helping you choose the most favorable
                    location for your business based on factors such as tax benefits, legal requirements, and
                    operational costs.
                </p>
            </li>
            <li>
                <p>
                    <b>Jurisdiction Selection</b><br>
                    Choosing the right jurisdiction is crucial to the success of your business. Whether you’re
                    setting up in the UAE, Europe, or Asia, we provide expert advice on the best location based on
                    your industry and objectives. We specialize in free zone, mainland, and offshore company
                    formations, ensuring flexibility and tailored solutions.
                </p>
            </li>
            <li>
                <p>
                    <b>Business Structure and Legal Advice</b><br>
                    Selecting the appropriate business structure is vital for your operations. We help you choose
                    from options such as sole proprietorship, limited liability company (LLC), branch office, or
                    subsidiary. Our legal team ensures that the chosen structure aligns with your long-term business
                    goals and complies with all relevant regulations.
                </p>
            </li>
            <li>
                <p>
                    <b>Document Preparation and Filing</b><br>
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
        <h2>Why Choose Axis Point for Company Formation?</h2>
        <p style="width: 66%;margin: 0 auto;">At Axis Point, we understand that each business is unique. Whether
            you’re a startup, an established company looking to expand, or an entrepreneur seeking opportunities in
            a new market, our tailored approach to company formation ensures your specific needs are met. With years
            of experience, our team has in-depth knowledge of local and international regulations, making us the
            ideal partner for businesses looking to establish a presence in various jurisdictions.</p>


        <h2 style=" margin-top: 50px">Our Accounting & Financial Services</h2>
        <!-- <p style="width: 56%;margin: 0 auto;">Second citizenship or residency offers a key to a better future for you and your family. Whether you are a businessman, a frequent international traveler, or want better security for your family, you will significantly benefit from obtaining a second citizenship.</p> -->
        <div class="benefits">
            <div class="benefit">
                <h3>Bookkeeping & Accounting Services</h3>
                <p>Reliable management of your finances with precise, tailored accounting solutions.</p>
            </div>
            <div class="benefit">
                <h3>Corporate Tax Registration</h3>
                <p>Seamless corporate tax registration for full compliance and simplified business growth.</p>
            </div>
            <div class="benefit">
                <h3>Financial Flexibility</h3>
                <p>Better tax planning and opportunities for global business expansion.</p>
            </div>
        </div>
        <br>
    </div>
    <div class="sectionforbar" id="buttons">
        <div class="button-container">
            <div id="button1" class="button active" onclick="showText('text1', 'button1')">Mainland</div>
            <div id="button2" class="button" onclick="showText('text2', 'button2')">Freezone</div>
            <div id="button3" class="button" onclick="showText('text3', 'button3')">Virtual Office Solutions</div>
        </div>

        <!-- Text Blocks -->
        <div id="text1" class="displayText active">
            <h1>Mainland</h1>
            <p>
                Establishing a business in the UAE mainland requires a comprehensive understanding of the local market,
                and the team at Axis Point is here to provide expert support every step of the way! With extensive
                experience in UAE company formation, we help businesses set up within the UAE mainland, enabling
                unrestricted trade both locally and internationally.
                At Axis Point, our core services include mainland business registration, obtaining trade licenses,
                managing PRO services, and handling visa processes. As a reliable business formation consultant in
                Dubai, we ensure efficient processing of all paperwork and approvals required for business
                incorporation, fully compliant with UAE regulations.
            </p>
        </div>
        <div id="text2" class="displayText">
            <h1>Freezone</h1>
            <p>For overseas investors, setting up an offshore business in the UAE is one of the most attractive options
                due to the exceptional tax benefits. While many countries offer privacy to high-net-worth individuals,
                Dubai stands out as a premier and secure tax haven, implementing stringent policies to protect the
                confidentiality of offshore clients' information from their home countries.

                By establishing an offshore company in Dubai, you gain the status of a recognized local business, with
                easy access to markets across the Middle East. With extensive experience, Axis Point, a leading business
                setup firm in Dubai, provides expert guidance on offshore company formation. Our specialized solutions
                assist foreign investors in making the right choices for setting up a business in the UAE.
            </p>
        </div>
        <div id="text3" class="displayText">
            <h1>Virtual Office Solutions</h1>
            <p>For businesses looking to establish a professional presence in the UAE without the need for a physical
                office, virtual office solutions offer the ideal choice. This setup allows companies to benefit from a
                prestigious business address in Dubai, helping to enhance their credibility and image in the local and
                international markets.

                With a virtual office, businesses can maintain a local presence in the UAE, access mail handling and
                reception services, and benefit from flexible meeting spaces when needed. Virtual office solutions are
                perfect for startups, freelancers, and international businesses looking to expand into the UAE without
                the overhead costs associated with a traditional office.

                Axis Point provides tailored virtual office solutions in Dubai, designed to meet the diverse needs of
                modern businesses. With our comprehensive services, we ensure a smooth and professional setup, allowing
                you to focus on your business growth while enjoying the advantages of a local UAE presence.
            </p>
        </div>
    </div>
    <div>
        <script>
            function showText(textId, buttonId) {
                // Hide all text blocks
                const allTexts = document.querySelectorAll('.displayText');
                allTexts.forEach(text => text.classList.remove('active'));

                // Remove active class from all buttons
                const allButtons = document.querySelectorAll('.button');
                allButtons.forEach(button => button.classList.remove('active'));

                // Show the clicked text block
                const selectedText = document.getElementById(textId);
                selectedText.classList.add('active');

                // Add active class to the clicked button
                const selectedButton = document.getElementById(buttonId);
                selectedButton.classList.add('active');
            }
        </script>
        <?php
        include_once "footer.php";
        renderFooter();
        ?>
</body>

</html>