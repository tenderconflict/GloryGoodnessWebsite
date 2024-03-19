<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Glory Goodness Church</title>
  <link rel="stylesheet" href="stylesChurchCalendar.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
</head>

<body>
    <div class="main">
	  <div class="navbar">
			<?php 
                include('../Header.php');
                include('../Menu.php');
            ?>
	  </div>
	  
	  <div class="content">
		<h1>Glory Goodness Church Calendar</h1>
	  </div>
	  <div class="middle">
		<div class="calendar">
			
			<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FNew_York&src=ZWFjaG8uYnJhbmRvbkBnbWFpbC5jb20&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%237986CB&color=%2333B679&color=%230B8043" style="border:solid 1px #777" width="600" height="450" frameborder="0" scrolling="no"></iframe>
	  	</div>
		
	</div>	
	  </div>
	  
	  <div class="verse">
			<p>James 1:17</p>
			<p2>Every good gift and every perfect gift is from above, coming down from the Father of lights, with whom there is no variation or shadow due to change.</p2>
	  </div>
	  <div class="bottomPage">
	  		<p>&copy; Glory Goodness Church 2023. All rights reserved.<p>
	  </div>
    </div>
</body>
</html>

      <!-- created by zach -->