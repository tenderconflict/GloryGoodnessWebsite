<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Glory Goodness School</title>
  <link rel="stylesheet" href="Styles/stylesWhyGGS.css">
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
				<!-- sign in option for the school in the green box on the left. REPLACE THE A HREF FOR REDIRECTION TO MOODLE  -->
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
				<!-- <li> <a href="../School/calendar.php">Calendar</a></li> there is no calendar for the school atm	 -->
				<li><a href="../School/Programs.php">Programs</a></li>
		
			
				</ul>		
		</div>
		 
		</div>
		<div class="grid-item">
			<div class="info">
				<h1>Why Glory Goodness School</h1>
				<p2>Glory Goodness School offer a faith-centered education, that comes alongside Glory Goodness Church. Students have the opportunity to attend the 
					Accelerated Christian Education (A.C.E) convention where their skills learned at Glory Goodness School are showcased. In addition to this, they will 
					develop leadership skills through volunteer work within the community. 
				</p2>
			  </div>
		</div>
		
		</div>
	
	  <div class="middle">
		<div class="grid-container2">
			<!-- grid-item 2 are set at 50% 50% column, so two boxes next to each other -->
			<div class ="grid-item2"><h1>A.C.E Convention</h1>
				<p>A.C.E School of Tomorrow encourages development of leadership skills through A.C.E Student Conventions. Regional Conventions are followed by the
					<a href ='https://www.aceschooloftomorrow.com/about-isc'>International Student Convention (ISE)</a>.To compete in these competitions students must register on the ACE website.</a>
				</p>
			
				
				<div class ='side-by-side'>
					<!-- class puts buttons side by side  -->
					<div class="leftrightbutton"><a href = 'https://www.aceschooloftomorrow.com/convention-guidelines'><button class = "button">Guidelines</button></a></div>
				  <div class ='leftrightbutton'><a href = 'https://www.aceschooloftomorrow.com/media/pageimg/Guide3a-ISC_Student_Preparation_Handbook.pdf'><button class = "button">Handbook</button></a></div>
			  </div>	
			  </div>
			<div class ="grid-item2">
			
				<h1>Leadership</h1>
				<p>At Glory Goodness Church students will be presented with opportunities to lead in prayer, and class activities in order to improve their 
					leadership and communication skills. In addition to this, students will are encouraged to volunteer within the church during service and other events. 
				</p>
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
	<!-- lines 169-182 written by Jillian -->
	<script>
		//this script changes the background of the side school login with the hamburger icon is selected to white so that the 
		//options are not seen. 
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

