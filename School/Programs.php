<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Glory Goodness School</title>
  <link rel="stylesheet" href="Styles/stylesPrograms.css">
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
				<!-- maybe use the href for moodle in the future -->
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
				<h1>Programs</h1>
				<p2>Glory Goodness Church offers classes for grades K-12 through A.C.E School of Tomorrow program. The 
					A.C.E program contains Bible-based curriculum and opportunities to serve. The curriculum focuses 
					on the student mastering a skill before moving on to the next skill. This allows students to move quickly through the material, 
					or take as long as they need. 
				</p2>
			  </div>
		</div>
		
		</div>
	
	  <div class="middle">
		<div class="grid-container2">
			<div class ="grid-item2"><h1>K-12</h1>
					<p>Glory Goodness School offers classes for grades K-12 allowing students to both grow academically and spiritually. The A.C.E curriculum 
						allows students to succeed in their academic achievements and gain outstanding performance.
					</p>
					<!-- these buttons were removed as there is no event PDF for the school. But left just in case 
					they need to be added in the future -->
					<!-- <div class="leftrightbutton"><a href = '#'><button class = "button">Events</button></a></div>
				  <div class ='leftrightbutton'><a href = '#'><button class = "button">Sự kiện</button></a></div> -->
			  </div>
			<div class ="grid-item2">
				<h1>Activities</h1>
				<p>Glory Goodness School offers various activites for student engagement such as participating in A.C.E convention, 
				Bible study groups, and class field trips. 
				</p>
					
					
					<!-- these buttons were removed as there is no event calendar for the school. But left just in case 
					they need to be added in the future -->
				
				<!-- <div class="leftrightbutton"><a href = '../School/calendar.php'><button class = "button">Calendar</button></a></div>
				  <div class ='leftrightbutton'><a href = '../School/calendar.php'><button class = "button">Lịch sự kiện</button></a></div> -->
			  </div></div>
		</div>
	  	
		
	  	<!-- lines 159-169 written by Brandon -->
	  
	  <div class="verse">
			<p>James 1:17</p>
			<p2>Every good gift and every perfect gift is from above, coming down from the Father of lights, with whom there is no variation or shadow due to change.</p2>
	  </div>
	  <div class="bottomPage">
	  		<p>&copy; Glory Goodness Church 2023. All rights reserved.<p>
	  </div>
    </div>
	<!-- lines 169-183 written by Jillian -->
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

