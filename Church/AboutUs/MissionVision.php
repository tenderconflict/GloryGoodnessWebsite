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
    <div class="main">
        <div class="navbar">
            <?php 
                include('../../Header.php');
                include('../../Menu.php');
            ?>
        </div>
    
        <div class="content">
        <h1>Vision & Mission</h1>
    </div>

    <div class="info-text">
        <p>Commanded by the Lord in Isaiah 61 in NIV</p>
        <p>2-24-1998</p>
        <p>5-16-1998</p>
        <p>9-27-2001</p>
      </div>

      <div class="container">
    <div class="box vision">
      <h2>Vision</h2>
      <p>To bridge the generations of Vietnamese affected by many wars and are in foreign lands</p>
      <div class="verse">
        <p><strong>Isaiah 61:4 NKJV</strong></p>
        <ol>
          <li>They shall rebuild the old ruins,</li>
          <li>They shall raise up the former desolations,</li>
          <li>And they shall repair the ruined cities,</li>
          <li>The desolations of many generations.</li>
        </ol>
      </div>
    </div>

    <div class="box mission">
      <h2>Mission</h2>
      <p>To the Vietnamese Americans</p>
      <div class="verse">
        <p><strong>Isaiah 61:1 NKJV</strong></p>
        <ol>
          <li>To preach good tidings to the poor;</li>
          <li>To heal the brokenhearted,</li>
          <li>To proclaim liberty to the captives,</li>
          <li>And the opening of the prison to those who are bound;</li>
        </ol>
      </div>
    </div>
  </div>



        <?php 
        include('../../Footer.php');
    ?>

</body>
    </html>