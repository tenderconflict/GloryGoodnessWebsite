<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Glory Goodness School</title>
  <link rel="stylesheet" href="../School/Styles/stylesAboutUs.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
</head>

<body>
 <div class="main">
 	<?php
    	include('../Header2.php');
    	include('../Menu2.php');
		//header file is included for navigation links
  	?>


	  <div class="space">
			
	  </div>
	
	<!-- Lines 92-160 written by Jillian -->
	  <div class="grid-container">
		
		<div class ='grid-itemgreen'>
			<div class="schoollogin">
				<!-- maybe use the HREF for the moodle/LMS redirection in the future -->
				<li type="none"><span class="menu-icon" onclick="toggleMenu()">&#9776;</span><a href="../School/schoolLogin.php" id="school-login">Sign in</a></li>
			</div>
				
			 </div>
		<div class = 'grid-item'> </div> 
		<!-- the div above is supposed to be empty- jillian  -->
		<div class="grid-itemgreen">
			<div id ="school-menu" class = 'menu2'>   
			
	 
				<ul class = schoolmenu>
	
					
					<li><a href="../School/GloryGSchool.php">Home</a></li>
					<li><a href="../School/AboutUs.php">About GGS</a></li>
					<li><a href="../School/WhyGGS.php">Why GGS</a></li>
				<!-- <li> <a href="../School/calendar.php">Calendar</a></li>	 -->
				<li><a href="../School/Programs.php">Programs</a></li>
		
			
				</ul>		
		</div>
		 
		</div>
		<div class="grid-item">
			<div class="info">
				<h1>About Glory Goodness School</h1>
				<p2>Glory Goodness School is located in Lorton, Virgina and offers a unique classroom enviroment. The school is founded upon the 
					principles of the Bible, and allows students to grow both spirtually and academically. Glory Goodness School goes beyond academics, engaging students through 
					daily devotionals, and group Bible studies. 
				</p2>
			  </div>
		</div>
		
		</div>
	
	  <div class="middle">
		<div class="grid-container2">
			<!-- location uses a iframe for the maps, and a button linking to the google maps  -->
			<div class ="grid-item2"><h1>Location</h1>
			<p>9201 Treasure Oak Ct.
				   <br>Lorton, VA 22079
				</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6226.803420852257!2d-77.1995783!3d38.7085852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b6534df78189bb%3A0x7885c750292598c4!2s9201%20Treasure%20Oak%20Ct%2C%20Lorton%2C%20VA%2022079!5e0!3m2!1sen!2sus!4v1713637946929!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<div class="leftrightbutton"><a href = 'https://maps.app.goo.gl/U8LELSgGaia8vLMb6'><button class = "button">Google Maps</button></a></div>
				<!-- <div class="leftrightbutton"><a href = 'https://maps.app.goo.gl/U8LELSgGaia8vLMb6'><button class = "button">bản đồ Google</button></a></div> -->
				
				
			
					 
				  <!-- <div class ='leftrightbutton'><a href = '#'><button class = "button">Sự kiện</button></a></div>  -->
			  </div>
			<div class ="grid-item2">
			<?php
 //php that allows the email to be sent
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@glorygoodnesschurch.org";//replace with church email when fixed

    $subject = "New Church Member Message";//title

    $name = $_POST['Name'];//name of the sender

    $email = $_POST['Email'];//email of sender

    $message = $_POST['message']; //message of the email from the input box
    $headers = "From: $email";

    
    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    

    //checking to see if the email sent worked
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
				<h1>Contact GGS</h1>
				<form method="post" action="">
					<p2>Tên/Name: </p2><br>
					<input type="text" name="Name" placeholder="Enter your name"><br>
				
					<p2>Email: </p2><br>
					<input type="email" name="Email" placeholder="Enter your email"><br>
					
					<p2>Tin nhắn/Message:<br></p2>
					<textarea name="message" rows="14" cols="50" placeholder="Enter your message"></textarea><br>
					
					<input type="submit" id="search" value="Submit" style="height:35px; width:90px" />
				</form>
			
				<p>info@glorygoodnesschurch.org</p>
				
				
			  </div></div>
		</div>
	  	
		
	  	<!-- lines 160-169 written by Brandon -->
	  
	  <div class="verse">
			<p>James 1:17</p>
			<p2>Every good gift and every perfect gift is from above, coming down from the Father of lights, with whom there is no variation or shadow due to change.</p2>
	  </div>
	  <div class="bottomPage">
	  		<p>&copy; Glory Goodness Church 2023. All rights reserved.<p>
	  </div>
    </div>
	<!-- lines 170-169 written by Jillian -->
	<script>
		function toggleMenu() {
			var menu = document.getElementById("school-menu");
			menu.style.display = (menu.style.display === 'block' || menu.style.display === '') ? 'none' : 'block';
			var menu2 = document.getElementById("school-login");
			menu2.style.display = (menu2.style.display === 'inline' || menu2.style.display === '') ? 'none' : 'inline';
	
			var gridItems = document.querySelectorAll(".grid-itemgreen");
			gridItems.forEach(function(item) {
				item.classList.toggle("white-background");
			});
		}
	</script>
	
	
</body>
</html>

