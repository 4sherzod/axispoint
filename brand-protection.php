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
               <p>Starting a business is an exciting venture, but the process of setting up a company can be
                    overwhelming. From legal documentation to compliance with local regulations, every step requires
                    precision and careful planning. At Axis Point, we take the stress out of company formation by
                    offering comprehensive services that cover every aspect of the process. Our expert team ensures that
                    your business is set up smoothly, legally, and efficiently, allowing you to focus on what truly
                    matters—growing your business.</p>
          </div>
          <div><img src="./img/fingerprint.jpg" alt=""></div>
     </div>
     <div>
          <div id="companyInfoDiv" class="companyClass">
               <h2>Trademark & Patent Registration</h2>
               <p>At Axis Point, we understand that each business is unique. Whether you’re a startup, an established
                    company looking to expand, or an entrepreneur seeking opportunities in a new market, our tailored
                    approach to company formation ensures your specific needs are met. With years of experience, our
                    team has in-depth knowledge of local and international regulations, making us the ideal partner for
                    businesses looking to establish a presence in various jurisdictions.</p>
               <br>
               <h2>Our Company Formation Process</h2>
               <p>Our company formation services cover everything from initial consultation to the final registration of
                    your business. Here’s a step-by-step look at how we make the process seamless:</p>
               <ol>
                    <li>
                         <p>
                              <b>Offshore Company Formation</b><br>
                              We begin by understanding your business goals, industry, and target market. During this
                              phase, our consultants will discuss various jurisdiction options, helping you choose the
                              most favorable location for your business based on factors such as tax benefits, legal
                              requirements, and operational costs.
                         </p>
                    </li>
                    <li>
                         <p>
                              <b>Offshore Trusts & Foundations</b><br>
                              Choosing the right jurisdiction is crucial to the success of your business. Whether you’re
                              setting up in the UAE, Europe, or Asia, we provide expert advice on the best location
                              based on your industry and objectives. We specialize in free zone, mainland, and offshore
                              company formations, ensuring flexibility and tailored solutions.
                         </p>
                    </li>
                    <li>
                         <p>
                              <b>International Tax Structuring</b><br>
                              Selecting the appropriate business structure is vital for your operations. We help you
                              choose from options such as sole proprietorship, limited liability company (LLC), branch
                              office, or subsidiary. Our legal team ensures that the chosen structure aligns with your
                              long-term business goals and complies with all relevant regulations.
                         </p>
                    </li>
                    <li>
                         <p>
                              <b>Double Taxation Treaty Advisory</b><br>
                              Our experienced team handles all necessary paperwork, including drafting the Memorandum of
                              Association, Articles of Incorporation, and shareholder agreements. We take care of the
                              submission process, ensuring that all documents meet local regulatory requirements. With
                              Axis Point, you won’t have to worry about missing deadlines or incorrect filings.
                         </p>
                    </li>
                    <li>
                         <p>
                              <b>Business Licensing and Permits</b><br>
                              Depending on the nature of your business, you may require specific licenses or permits to
                              operate legally. Our team ensures that all the necessary licenses—whether general trade,
                              industrial, or professional—are obtained promptly, allowing your business to start
                              operations as soon as possible.
                         </p>
                    </li>
               </ol>
          </div>
          <div id="dark-section" class="dark-section">
               <h2>Copyright Registration & Management</h2>
               <div style="display: flex; width: 80%; margin: 0 auto; gap: 20px;">
                    <!-- Adjusted gap for better spacing -->
                    <p style="flex: 1; margin: 0;"> <!-- Ensures each <p> takes equal space -->
                         At Axis Point, we understand that each business is unique.
                         Whether you’re a startup, an established company looking to expand, or an entrepreneur seeking
                         opportunities in a new market, our tailored approach to company formation ensures your specific
                         needs are met. With years of experience, our team has in-depth knowledge of local and
                         international regulations, making us the ideal partner for businesses looking to establish a
                         presence in various jurisdictions.
                    </p>
                    <p style="flex: 1; margin: 0;"> <!-- Also set to flex: 1 for equal width -->
                         At Axis Point, we understand that each business is unique.
                         Whether you’re a startup, an established company looking to expand, or an entrepreneur seeking
                         opportunities in a new market, our tailored approach to company formation ensures your specific
                         needs are met. With years of experience, our team has in-depth knowledge of local and
                         international regulations, making us the ideal partner for businesses looking to establish a
                         presence in various jurisdictions.
                    </p>
               </div>
               <div style="display: flex; width: 80%; margin: 50px auto; gap: 20px;">
                    <!-- Adjusted gap for better spacing -->
                    <p style="flex: 1; margin: 0;"> <!-- Ensures each <p> takes equal space -->
                         At Axis Point, we understand that each business is unique.
                         Whether you’re a startup, an established company looking to expand, or an entrepreneur seeking
                         opportunities in a new market, our tailored approach to company formation ensures your specific
                         needs are met. With years of experience, our team has in-depth knowledge of local and
                         international regulations, making us the ideal partner for businesses looking to establish a
                         presence in various jurisdictions.
                    </p>
                    <p style="flex: 1; margin: 0;"> <!-- Also set to flex: 1 for equal width -->
                         At Axis Point, we understand that each business is unique.
                         Whether you’re a startup, an established company looking to expand, or an entrepreneur seeking
                         opportunities in a new market, our tailored approach to company formation ensures your specific
                         needs are met. With years of experience, our team has in-depth knowledge of local and
                         international regulations, making us the ideal partner for businesses looking to establish a
                         presence in various jurisdictions.
                    </p>
               </div>
          </div>


          <footer>
               <div>
                    <p>&copy;2024. ACCESSPOINT. All Rights Reserved.</p>
                    <a href="#">IDK SOME LINK</a>
               </div>
          </footer>

</body>

</html>