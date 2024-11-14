<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Interactive Buttons with Exclusive Text Display</title>
     <link rel="stylesheet" href="./css/style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
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
               /* border: 1px solid blue; */
          }

          #companyDiv div {
               width: 45%;
               /* border: 1px solid red; */
          }

          #companyDiv>div>img {
               margin: auto;
               /* width: 100%; */
               object-fit: cover;
               height: 330px;
               width: 500px;
               margin-right: 0;
          }

          .companyClass h1,
          .companyClass {
               text-align: left;
               /* font-weight: normal; */
               /* margin-bottom: 20px; */
          }

          .companyClass {
               width: 80%;
               margin: 100px auto;
               line-height: 30px;
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
               <h1>Brand Protection</h1>
               <p>Securing your brand’s identity and intellectual property is vital in today’s competitive market. At
                    Axis Point, we provide comprehensive brand protection services that shield your assets and ensure
                    your unique ideas remain secure. Our experienced team manages every step—from legal documentation to
                    compliance—allowing you to focus on growth without the burden of brand management challenges.</p>
          </div>
          <div><img src="./img/fingerprint.jpg" alt="Brand Protection"></div>
     </div>
     <div>
          <div id="companyInfoDiv" class="companyClass">
               <h2>Trademark & Patent Registration</h2>
               <p>Axis Point’s trademark and patent registration services are designed for businesses of all sizes, from
                    startups to global enterprises. We understand the nuances of local and international intellectual
                    property regulations and provide tailored solutions to protect your innovations and brand identity.
                    Our team will help you navigate the complexities of trademark and patent registration, ensuring your
                    intellectual assets are safeguarded.</p>
               <br>
               <h2>Our Brand Protection Process</h2>
               <p>Our streamlined process covers every stage, from consultation to securing your brand’s rights. Here’s
                    how we assist:</p>
               <ol>
                    <li>
                         <p>
                              <b>Trademark Assessment & Strategy</b><br>
                              We begin by assessing your brand’s unique aspects and identifying potential risks. Our
                              experts create a strategy tailored to your business needs, helping you establish a robust
                              trademark presence.
                         </p>
                    </li>
                    <li>
                         <p>
                              <b>Patent Consultation & Filing</b><br>
                              Protecting your inventions is essential for sustained growth. We offer patent consultation
                              to determine the best approach, and assist in filing patents in relevant jurisdictions for
                              maximum security.
                         </p>
                    </li>
                    <li>
                         <p>
                              <b>International IP Structuring</b><br>
                              Expanding into global markets requires an efficient IP structure. Our team advises on
                              international structuring to ensure your brand is protected wherever you do business.
                         </p>
                    </li>
                    <li>
                         <p>
                              <b>Brand Monitoring & Enforcement</b><br>
                              We continuously monitor your brand for potential infringements and handle enforcement to
                              prevent unauthorized use. Our proactive approach ensures that your brand remains secure.
                         </p>
                    </li>
                    <li>
                         <p>
                              <b>IP Licensing & Contracts</b><br>
                              For businesses looking to license their brand, we assist with IP licensing and contract
                              management. Our services ensure clear, legally sound agreements that protect your rights
                              and revenue.
                         </p>
                    </li>
               </ol>
          </div>
          <div id="dark-section" class="dark-section">
               <h2>Copyright Registration & Management</h2>
               <div style="display: flex; width: 80%; margin: 0 auto; gap: 20px;">
                    <p style="flex: 1; margin: 0;">
                         Protecting creative works is a crucial part of safeguarding your business's intellectual
                         assets. Our copyright registration and management services ensure your work is secured from
                         unauthorized use. Whether it’s digital content, designs, or written material, Axis Point helps
                         you retain full control over your creations.
                    </p>
                    <p style="flex: 1; margin: 0;">
                         From registration to enforcement, our team guides you through every aspect of copyright
                         management. We align our services with your business goals, providing continuous support to
                         keep your creative assets safe from potential infringements.
                    </p>
               </div>
               <div style="display: flex; width: 80%; margin: 50px auto; gap: 20px;">
                    <p style="flex: 1; margin: 0;">
                         Our proactive approach to copyright management includes monitoring and enforcement, giving you
                         peace of mind in the digital age. With Axis Point, your creative works remain protected,
                         enabling you to leverage them for long-term growth and profitability.
                    </p>
                    <p style="flex: 1; margin: 0;">
                         We work closely with you to customize our copyright solutions, adapting to the specific needs
                         of your industry and brand. Our services help you maximize the value of your intellectual
                         property while minimizing risk.
                    </p>
               </div>
          </div>


          <?php
          include_once "footer.php";
          renderFooter();
          ?>

</body>

</html>