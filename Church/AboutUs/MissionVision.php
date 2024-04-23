<?php
session_start();
?>

<!-- Lines 1-150 written by Thomas -->
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="AboutUsStyles/MissionVisionStyles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

</head>

<body>
    <div class= "main">
        <div class="navbar">
            <?php 
                include('../../Header.php');
                include('../../Menu.php');
            ?>
        </div>

        <div class="content">
            <h1>Glory Goodness Church</h1>
            <h2>Vision and Mission</h2>
        </div>

        <div class="container">
            <div class="box mission">
              <h2>Vision</h2>
              <p>To bridge the generations of Vietnamise affected by many wars and are i foreign lands.</p>

              <h3>Isaiah 61:4 NKJV</h3>
            </div>

            <div class="box vision">
              <h2>Mission</h2>
              <p>To the Vietnamese American</p>
              <h3>Isaiah 61:1 NKJV</h3>

         
            </div>

</div>
        
            <?php 
            include('../../Footer.php');
        ?>
          </div>

</body>

</html>