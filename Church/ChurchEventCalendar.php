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
	  
	  <div class="ContactChurch">
            <h3>2nd Peter 1:3</h3>
                    <p3>By his divine power, God has given us everything we need for living a godly life. We have
                        received all of this by coming to know him, the one who called us to himself by means of his
                        marvelous glory and excellence.</p3>

                        <h2><br>Contact Information</h2>
                        <div class="BottomContact">
                            <div class="Email">
                                   
                                <span>Email: info@glorygoodnesschurch.org</span>
                            </div>
                            <div class="BottomInfo">
                            
                                <div class="PhoneNumber">
                                  
                                    <span>Phone number: +1 (123) 456-7890</span>
                                </div>
                            </div>
                        </div>
                        <p4>&copy; Glory Goodness Church 2023. All rights reserved.</p4>
            
        </div>
    </div>
</body>
</html>

      <!-- created by zach -->