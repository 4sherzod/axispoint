<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <?php
          include_once "scrollbar.php";
          $ar = array("about", "About Antigua and Barbuda", "citizenship", "Citizenship by Investment", "real-estate", "Details on real estate options...");
          scrollbar($ar);
     ?> 
     <div id="about" class="section" style="padding: 100px 20px;min-height: 80vh;">
          <h1>About Antigua and Barbuda</h1>
          <p>Details about Antigua and Barbuda...</p>
     </div>
     <div id="citizenship" class="section" style="padding: 100px 20px;min-height: 80vh;">
          <h1>Citizenship by Investment</h1>
          <p>Information on citizenship by investment...</p>
     </div>
     <div id="real-estate" class="section" style="padding: 100px 20px;min-height: 80vh;">
          <h1>Real Estate</h1>
          <p>Details on real estate options...</p>
     </div>
</body>
</html>
