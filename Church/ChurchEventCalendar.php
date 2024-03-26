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
			
		<iframe src="http://calendar.google.com/calendar/embed?src=c_2b56cd83bd27a9c08d46e6fbaa518d688b220b040bf4717b00ed3a4bc80d4edb%40group.calendar.google.com&ctz=America%2FNew_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
	  	</div>
		
	</div>	
	  </div>
	  
	  <?php 
            include('../Footer.php');
        ?>
    </div>
</body>
</html>

      <!-- created by zach -->