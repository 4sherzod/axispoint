<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="./css/style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
     <style>
          main {
               padding: 40px;
          }
          .services {
               margin: 0 auto;
               width: 100%;
               max-width: 1200px;
          }
          table {
               width: 100%;
               border-collapse: collapse;
               border-bottom: none;
               table-layout: fixed;
          }
          td {
               padding: 15px;
               vertical-align: top;
               border-bottom: none;
               width: 33.33%; 
               height: 300px;
          }
          .service {
               background-color: #fff;
               padding: 20px;
               border-radius: 10px;
               box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
               text-align: center;
               height: 85%;
          }
          .service img {
               max-width: 100%;
               height: auto;
               border-radius: 10px;
               margin-bottom: 15px;
          }
          .service h3 {
               font-size: 18px;
               margin-bottom: 10px;
          }
          .service p {
               font-size: 14px;
               color: #666;
          }
          #loading-screen {
               position: fixed;
               top: 0;
               left: 0;
               width: 100%;
               height: 100%;
               background-color: rgba(255, 255, 255, 0.9);
               display: flex;
               justify-content: center;
               align-items: center;
               flex-direction: column;
               z-index: 9999;
               transition: opacity 0.5s ease;
          }
          /* Spinner style */
          .spinner {
               border: 8px solid #f3f3f3;
               border-top: 8px solid #007bff;
               border-radius: 50%;
               width: 60px;
               height: 60px;
               animation: spin 1s linear infinite;
               margin-bottom: 20px;
          }
          /* Spinner animation */
          @keyframes spin {
               0% { transform: rotate(0deg); }
               100% { transform: rotate(360deg); }
          }
          /* Style for the main content (initially hidden) */
          #main-content {
               text-align: center;
               padding: 50px;
          }
     </style>
</head>
<body>
     <?php
          include_once "topbar.php";
          renderHeader();
     ?>
     <section class="services">
            <table>
                <tr>
                    <td>
                        <div class="service">
                            <img src="image.png" alt="Company Formation">
                            <h3>Corporate Formation & Administration (UAE)</h3>
                            <p>We make setting up your business hassle-free with expert guidance.</p>
                        </div>
                    </td>
                    <td>
                        <div class="service">
                            <img src="image.png" alt="Banking Solutions">
                            <h3>Tax Planning & Offshore Service</h3>
                            <p>Secure the best banking solutions tailored to your business.</p>
                        </div>
                    </td>
                    <td>
                        <div class="service">
                            <img src="image.png" alt="Visa Services">
                            <h3>Human Resources & Recruitment Services</h3>
                            <p>Comprehensive visa solutions for your business and personal needs.</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="service">
                            <img src="image.png" alt="Accounting & Auditing">
                            <h3>Citizenship by Investment & Residency Solutions</h3>
                            <p>Professional accounting and auditing services to ensure financial accuracy.</p>
                        </div>
                    </td>
                    <td>
                        <div class="service">
                            <img src="image.png" alt="Office Setup">
                            <h3>Trust & Fiduciary Services</h3>
                            <p>Get everything in place with our office setup services.</p>
                        </div>
                    </td>
                    <td>
                        <div class="service">
                            <img src="image.png" alt="Property Solutions">
                            <h3>Brand Protection</h3>
                            <p>Find the right commercial or residential property with our experts.</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="service">
                            <img src="image.png" alt="Business Launch Support">
                            <h3>Business Support & Outsourcing Services</h3>
                            <p>Professional accounting and auditing services to ensure financial accuracy.</p>
                        </div>
                    </td>
                    <td>
                        <div class="service">
                            <img src="image.png" alt="Citizenship by Investment">
                            <h3>Banking Solutions</h3>
                            <p>Secure second citizenship through global investment programs for enhanced mobility.</p>
                        </div>
                    </td>
                    <td>
                        <div class="service">
                            <img src="image.png" alt="UAE Tax Residence">
                            <h3>Concierge Services</h3>
                            <p>Expert solutions for obtaining UAE tax residence for businesses.</p>
                        </div>
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