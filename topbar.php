<?php
function renderHeader() {
    echo '<style>
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: white;
            border-bottom: 1px solid lightgrey;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Keeps the header above other content */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        body {
            margin-top: 80px; /* Adjust to match header height */
        }
        header h1 {
            font-size: 24px;
            color: #b28e50;
        }
        header nav a {
            margin-left: 20px;
            color: #333;
            text-decoration: none;
            font-size: 16px;
        }
          header div {
            display: flex;
            justify-content: space-between;
            align-items: center;
            top: 0;
            left: 0;
            width: 80%;
            margin: 0 auto;
          }
    </style>
    <header>
         <div> 
        <h1>ACCESSPOINT</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Dual Nationality</a>
            <a href="#">Business Setup</a>
            <a href="#">Contacts</a>
        </nav>
         </div>
    </header>';
}
?>
