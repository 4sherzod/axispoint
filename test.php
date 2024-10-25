<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Screen Example</title>
    <link rel="stylesheet" href="styles.css">
    <style>
     /* Style for the loading screen */
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
    <script>
          function hideLoadingScreen() {
               const loadingScreen = document.getElementById('loading-screen');
               const mainContent = document.getElementById('main-content');
               
               // Fade out the loading screen
               loadingScreen.style.opacity = '0';
               
               // Wait for the transition to finish, then hide the element completely
               setTimeout(() => {
                    loadingScreen.style.display = 'none';
                    mainContent.style.display = 'block'; // Show the main content
               }, 500); // The same duration as the transition in the CSS
          }

          // Simulate a loading process by waiting 2 seconds before hiding the loading screen
          window.addEventListener('load', () => {
               setTimeout(hideLoadingScreen, 1000); // Simulate loading delay of 2 seconds
          });
    </script>
</head>
<body>
    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="spinner"></div>
        <p>Loading, please wait...</p>
    </div>

    <!-- Main Content -->
    <div id="main-content" style="display: none;">
        <h1>Welcome to the Main Content!</h1>
        <p>This content is displayed after the loading screen is hidden.</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
