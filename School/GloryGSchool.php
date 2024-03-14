<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Glory Goodness School</title>
  <link rel="stylesheet" href="Styles/stylesSchool.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
</head>

<body>
 <div class="main">
	  <div class="top">
		<div class="login">
			<span style="float:right;">
				<li type="none"><a href="../Church/loginChurch.php">Church Sign in</a></li>
			</span>
		</div>
		<div class="logo">
			<li><a href="../GloryGHome.php"><img src="../Church/Pictures/GGCLogo.png" alt="ChurchLogo" height= "80"></a></li>			
		</div>
		
	  </div>
	  <!-- Lines 22-91 written by Thomas -->
	  <div class="navbar">
		<!-- Lines 23-91 written by Thomas -->
		  <div class="menu">
			  <ul>
				  <!-- clicking home should bring you to the homepage-TD -->
				  <!-- <li><a href="#"><img src="GGCLogo.png" alt="ChurchLogo" height= "70"></a></li> -->
  
  
				  <!-- <li><a href="#">HOME</a></li>-->
  
  
  
  
				  <li><a href="../GloryGHome.php">Home <br><span style="color: rgb(18, 18, 161);">Chủ</span></a></li>
  
  
  
				  <li class="has-submenu"><a href="#">About Us <br> <span style="color: rgb(18, 18, 161);">Thông
							  tin</span></a>
  
  
					  <ul class="submenu">
						  <li><a href="../Church/AboutUs/MissionVision.php">Mission & Vision <br><span style="color: rgb(18, 18, 161);">Khát
									  vọng</span></a></li>
						  <li><a href="../Church/AboutUs/ChurchStaff.php">Church Staff <br><span style="color: rgb(18, 18, 161);">Nhân viên</span></a>
						  </li>
						  <li><a href="../Church/AboutUs/ChurchHistory.php">Church History <br> <span style="color: rgb(18, 18, 161);">Lịch
									  sử</span></a></li>
						  <!--more may be added in the future here -TD -->
					  </ul>
  
  
				  </li>
  
  
				  <li><a href="#">Ministries <br><span style="color: rgb(18, 18, 161);">Bộ</span></a>
  
					  <ul class="submenu">
						  <li><a href="../Church/ChurchEventCalandar.php">Church Event Calendar <br><span
									  style="color: rgb(18, 18, 161);">Lịch</span></a></li>
						  <li><a href="../Church/WeeklyActivitiy.html">Weekly Activity <br><span style="color: rgb(18, 18, 161);">Hoạt
									  động</span></a></li>
						  <li><a href="../Church/WeeklyBibleReadings.php">Yearly Bible Reading <br><span style="color: rgb(18, 18, 161);">Đọc Kinh
									  Thánh</span></a></li>
  
					  </ul>
  
  
				  </li>
  
  
				  <li><a href="../Church/Giving.php">Giving <br><span style="color: rgb(18, 18, 161);">Cho</span></a></li>
  
  
  
				  <li><a href="#">School <br><span style="color: rgb(18, 18, 161);">Trường học</span></a>
  
					  <ul class="submenu">
						  <li><a href="../School/GloryGSchool.php">Glory Goodness School <br><span
									  style="color: rgb(18, 18, 161);">Trường học</span></a></li>
  
					  </ul>
  
  
				  </li>
  
			  </ul>
		  </div>

		  

		</div>

		<div class="space">

		</div>
	<!-- Lines 91-121 written by Jillian -->
		
	  <div class="grid-container">
		<div class ='grid-itemgreen'>
			<div class="schoollogin">
				
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
				<li> <a href="../School/calendar.php">Calendar</a></li>	
				<li><a href="../School/Programs.php">Programs</a></li>
		
			
				</ul>		
		</div>
		 
		</div>
		<div class="grid-item">
			<!-- lines 122-127 written by Brandon -->
			<div class="info">
				<h1>Welcome to Glory Goodness School</h1>
				
				<p2>Glory Goodness School uses Accelerated Christian Education (A.C.E). A.C.E provides a Christian K-12 education. They learn not only the skills they will need in life, but spiritual 
				materials as well. Students will have to show mastery of a subject, then will be allowed to move on to the next skill, better preparing them for future learning.</p2>
			  </div>
		</div>
		
		</div>
	<!-- Lines 131 - 144 written by Jillian -->
	  <div class="middle">
		<div class="grid-container2">
			<div class ="grid-item2"><h1>Upcoming Events</h1>
				
					<div class="leftrightbutton"><a href = '#'><button class = "button">Events</button></a></div>
				  <div class ='leftrightbutton'><a href = '#'><button class = "button">Sự kiện</button></a></div>
			  </div>
			<div class ="grid-item2">
				<h1>Event Calendar</h1>
				<div class="leftrightbutton"><a href = '../School/calendar.php'><button class = "button">Calendar</button></a></div>
				  <div class ='leftrightbutton'><a href = '../School/calendar.php'><button class = "button">Lịch sự kiện</button></a></div>
			  </div></div>
		</div>
	  	
		
	  	
	  <!-- lines 147-155 written by Brandon  -->
	  <div class="verse">
			<p>James 1:17</p>
			<p2>Every good gift and every perfect gift is from above, coming down from the Father of lights, with whom there is no variation or shadow due to change.</p2>
	  </div>
	  <div class="bottomPage">
	  		<p>&copy; Glory Goodness Church 2023. All rights reserved.<p>
	  </div>
    </div>
	<!--lines 156-169 written by Jillian -->
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

<!-- <!DOCTYPE html>
	OLD CODE BEFORE DESIGN CHANGE 
<html lang="en">
<head>
  <title>Glory Goodness School</title>
  <link rel="stylesheet" href="stylesSchool.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="main">
	  <div class="top">
		<div class="login">
			<span style="float:right;">
				<li type="none"><a href="../Church/LoginChurch.html">Sign in</a></li>
			</span>
		</div>
		<div class="logo">
			<li><a href="../GloryGHome.html"><img src="GGCLogo.png" alt="ChurchLogo" height= "80"></a></li>			
		</div>
		
	  </div>
	  <div class="navbar">
	   <div class="menu">
	      <ul>
		  
		  <li><a href="../School/calendar.html">Calendar</a></li>	

		  <li><a href="../School/convention.html">Convention Info</a></li>

		  <li><a href="#">School Handbook</a></li>

		  <li><a href="#">Education</a></li>
	      </ul>		


	   </div>
	  </div>

	  <div class="content">
		<h1>Welcome to Glory Goodness School!</h1>
	  </div>
	  <div class="middle">
	  	<div class="info">
			<h1>Information</h1>
			<p2>Glory Goodness School uses Accelerated Christian Education(ACE). ACE provides a Christian K-12 education. They learn not only the skills they will need in life, but spiritual 
			materials as well. Students will have to show mastery of a subject, then will be allowed to move on to the next skill, better preparing them for future learning.</p2>
	  	</div>
		<div class = 'UpcomingEvents'> 
			<h1>Upcoming Events</h1>
			<p>put events <br> here </p>
		</div>
	  	<div class="calendar">
			<p>Event Calendar</p>
			<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FNew_York&src=ZWFjaG8uYnJhbmRvbkBnbWFpbC5jb20&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%237986CB&color=%2333B679&color=%230B8043" style="border:solid 1px #777" width="600" height="450" frameborder="0" scrolling="no"></iframe>
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
</html> -->