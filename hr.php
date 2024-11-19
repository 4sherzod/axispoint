<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Axis Point - Shaping Your Business Future</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
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

        h1 {
            line-height: 40px;
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
    </style>
</head>

<body>
    <?php
    include_once "load.php";
    renderLoader();
    include_once "topbar.php";
    renderHeader();
    ?>

    <div id="companyDiv" class="companyClass">
        <div>
            <h1>Human Resources & Recruitment Services</h1>
            <p>Shaping the future of your business starts with building the right team. At Axis Point, we understand
                that a strong, dedicated workforce is key to success. Our Human Resources and Recruitment Services are
                designed to connect you with top talent, ensuring your company is equipped to thrive in a competitive
                market. From recruitment strategy to onboarding, we handle every step, so you can focus on what truly
                matters—growing your business.</p>
        </div>
        <div><img src="./img/hr.jpg" alt="Human Resources Image"></div>
    </div>

    <div id="companyInfoDiv" class="companyClass">
        <h2>Why Choose Axis Point for Business Setup?</h2>
        <p>At Axis Point, we believe that every business journey is unique. Whether you’re a startup, an established
            company looking to expand, or an entrepreneur exploring new markets, we offer customized solutions that meet
            your specific needs. With extensive experience and knowledge of international regulations, Axis Point is the
            ideal partner to guide your business setup process globally.</p>
        <br>
        <h2>Our Comprehensive Business Setup and HR Process</h2>
        <p>Our approach covers every aspect of establishing your business, from initial planning to operational setup.
            Here's how we help shape your business future:</p>
        <ol>
            <li>
                <p>
                    <b>Talent Acquisition & Recruitment Strategy</b><br>
                    We begin by understanding your business goals and culture to create a recruitment strategy that
                    attracts the right talent. Our team uses industry insights to find candidates who align with your
                    company’s vision, ensuring a strong and motivated workforce.
                </p>
            </li>
            <li>
                <p>
                    <b>Employee Onboarding & Training</b><br>
                    A successful onboarding process is key to employee engagement and retention. We design customized
                    onboarding programs and training sessions that integrate new hires smoothly into your business,
                    setting them up for success from day one.
                </p>
            </li>
            <li>
                <p>
                    <b>Regulatory Compliance & HR Policies</b><br>
                    Compliance with local labor laws and regulations is crucial for any business. We help you establish
                    clear HR policies and ensure all employment practices meet legal standards, minimizing risk and
                    building a stable organizational foundation.
                </p>
            </li>
            <li>
                <p>
                    <b>Payroll & Benefits Administration</b><br>
                    Managing payroll and benefits can be complex, especially in a new market. We provide solutions for
                    payroll processing, benefits management, and statutory compliance, making sure your team is
                    well-supported and compensated accurately.
                </p>
            </li>
            <li>
                <p>
                    <b>Office Space & Infrastructure Setup</b><br>
                    A productive workspace is vital for any team. We assist in finding office spaces that fit your
                    budget and requirements, along with guidance on setting up essential infrastructure, from IT
                    solutions to furniture and facility management.
                </p>
            </li>
            <li>
                <p>
                    <b>Business Licensing & Operational Permits</b><br>
                    Navigating licensing requirements can be complex. Our team handles the entire process of obtaining
                    necessary business licenses and permits to ensure your business operates smoothly and legally from
                    day one.
                </p>
            </li>
            <li>
                <p>
                    <b>Corporate Culture & Employee Engagement</b><br>
                    A positive corporate culture boosts productivity and job satisfaction. We work with you to build a
                    cohesive culture that encourages employee engagement, fosters teamwork, and reflects your brand’s
                    values.
                </p>
            </li>
            <li>
                <p>
                    <b>Visa and Immigration Support</b><br>
                    Expanding your team internationally? We provide end-to-end support with visas and immigration
                    paperwork for business owners and foreign employees, making it easy for you to bring in the talent
                    you need.
                </p>
            </li>
        </ol>
    </div>

    <?php
    include_once "footer.php";
    renderFooter();
    ?>
</body>

</html>