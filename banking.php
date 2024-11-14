<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Axis Point - Banking & Company Formation Services</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
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
            object-fit: cover;
            height: 330px;
            width: 500px;
            margin-right: 0;
        }

        .companyClass {
            width: 80%;
            margin: 100px auto;
            line-height: 30px;
        }

        ol {
            list-style-type: decimal;
            margin-left: 20px;
        }

        ol>li {
            padding: 10px;
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

    <!-- Banking Solutions Section -->
    <div id="companyDiv" class="sectionforbar companyClass">
        <div>
            <h1 style=" text-align: left">Banking Solutions</h1>
            <p>At Axis Point, we understand that effective banking solutions are essential for business success. Whether
                establishing a new venture or managing an existing one, we help you navigate the complexities of banking
                across different jurisdictions. Our goal is to provide access to the most suitable financial services
                tailored to your business needs, facilitating seamless local and international operations.</p>
        </div>
        <div><img src="./img/handshake.jpg" alt="Banking Solutions"></div>
    </div>

    <!-- Comprehensive Banking Services Section -->
    <div id="companyInfoDiv" class="companyClass">
        <h2>Comprehensive Banking Services</h2>
        <p>We offer a broad range of banking services to support your business. Our team collaborates with you to
            identify the right banking partners and solutions, from corporate bank account setup to trade finance and
            treasury management. With Axis Point, you’ll have the financial support necessary to streamline your
            operations and grow your business.</p>
        <br>
        <h2>Our Company Formation Process</h2>
        <p>We handle everything from initial consultation to final registration of your business. Here’s a step-by-step
            overview:</p>
        <ol>
            <li>
                <p><b>Initial Consultation</b><br>
                    We assess your business goals, industry, and target market. Our consultants guide you through
                    jurisdiction options, helping you select the ideal location based on tax advantages, legal
                    requirements, and operating costs.</p>
            </li>
            <li>
                <p><b>Jurisdiction Selection</b><br>
                    We offer expert advice on selecting the right jurisdiction—whether UAE, Europe, or Asia—to align
                    with your business strategy. Our services cover free zone, mainland, and offshore formations.</p>
            </li>
            <li>
                <p><b>Business Structure and Legal Advice</b><br>
                    Choosing the right structure (e.g., LLC, branch, subsidiary) is essential. We ensure that your
                    chosen structure meets your long-term goals and complies with all regulations.</p>
            </li>
            <li>
                <p><b>Document Preparation and Filing</b><br>
                    Our team manages all necessary documentation and filings, ensuring compliance with regulatory
                    standards and preventing delays.</p>
            </li>
            <li>
                <p><b>Business Licensing and Permits</b><br>
                    We assist with acquiring any required licenses or permits for legal operation, allowing your
                    business to start promptly.</p>
            </li>
            <li>
                <p><b>Bank Account Setup</b><br>
                    Opening a corporate bank account is vital. We facilitate partnerships with reputable banks to ensure
                    smooth account setup.</p>
            </li>
            <li>
                <p><b>Tax and Compliance Guidance</b><br>
                    We provide guidance on local tax and compliance requirements, including VAT and corporate tax, to
                    keep your business compliant.</p>
            </li>
            <li>
                <p><b>Visa and Immigration Support</b><br>
                    For business owners or foreign talent, we provide visa services to facilitate relocation and
                    residence in your chosen jurisdiction.</p>
            </li>
        </ol>
    </div>

    <?php
    include_once "footer.php";
    renderFooter();
    ?>
</body>

</html>