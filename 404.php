<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page not Found</title>
    <style>
        body{
            color: black;
        }
        #errorDiv{
            margin: auto;
            width: fit-content;
            margin-top: 10%;
            text-align: center;
        }
        h1,h2{
            font-weight: normal;
            padding: 10px;
        }
        h2{
            margin-bottom: 20px;
        }
        .button{
            margin-top: 30px;
            background-color: #000080;
            padding: 15px 20px;
            border-radius: 30px;
            border : none;
            color: white;
            font-family: 'RoyalExquisite';
        }
        .button:hover{
            background-color: #323299;
        }
    </style>
</head>
<body>
    <?php
		require_once "topbar.php";
		renderHeader();
	?>
    <div id="errorDiv">
        <h1>This page is not available</h1>
        <h2>The link may be broken or the page may have been removed. Make sure the link you open is OK.</h2>
        <a href="index.php" class="button">Back to home page</a>
    </div>
</body>
</html>