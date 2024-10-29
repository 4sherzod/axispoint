<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Auto-Underline Navigation</title>
     <style>
          body {
               font-family: Arial, sans-serif;
               margin: 0;
               padding: 0;
          }

          .nav-bar {
               display: flex;
               justify-content: center;
               padding: 20px;
               background-color: #f8f8f8;
               border-bottom: 1px solid #ddd;
               position: sticky;
               top: 0;
               z-index: 1000;
          }

          .nav-item {
               margin: 0 20px;
               padding-bottom: 10px;
               position: relative;
               font-size: 18px;
               color: #333;
               text-decoration: none;
          }

          .nav-item.active::after {
               content: "";
               position: absolute;
               left: 0;
               bottom: 0;
               width: 100%;
               height: 3px;
               background-color: #333;
          }

          .section {
               padding: 100px 20px;
               min-height: 80vh;
          }

          #about { background-color: #f0f0f0; }
          #citizenship { background-color: #e0e0e0; }
          #real-estate { background-color: #d0d0d0; }
     </style>
</head>
<body>

     <!-- Navigation Bar -->
     <div class="nav-bar">
          <a href="#about" class="nav-item" data-section="about">About Antigua and Barbuda</a>
          <a href="#citizenship" class="nav-item" data-section="citizenship">Citizenship by Investment</a>
          <a href="#real-estate" class="nav-item" data-section="real-estate">Real Estate</a>
     </div>

     <!-- Content Sections -->
     <div id="about" class="section">
          <h1>About Antigua and Barbuda</h1>
          <p>Details about Antigua and Barbuda...</p>
     </div>
     <div id="citizenship" class="section">
          <h1>Citizenship by Investment</h1>
          <p>Information on citizenship by investment...</p>
     </div>
     <div id="real-estate" class="section">
          <h1>Real Estate</h1>
          <p>Details on real estate options...</p>
     </div>

     <script>
          // Select all navigation links
          const navItems = document.querySelectorAll('.nav-item');

          // Observer options
          const options = {
               root: null, // viewport
               rootMargin: '0px',
               threshold: 0.5 // Trigger when 50% of the section is in view
          };

          // Create an intersection observer
          const observer = new IntersectionObserver((entries) => {
               entries.forEach(entry => {
                    const sectionId = entry.target.getAttribute('id');
                    const navLink = document.querySelector(`.nav-item[data-section="${sectionId}"]`);
                    
                    // Add active class to the nav item if the section is in view
                    if (entry.isIntersecting) {
                         navItems.forEach(item => item.classList.remove('active'));
                         navLink.classList.add('active');
                    }
               });
          }, options);

          // Observe each section
          document.querySelectorAll('.section').forEach(section => {
               observer.observe(section);
          });
     </script>
</body>
</html>
