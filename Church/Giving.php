<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Glory Goodness Church Giving</title>
  <link rel="stylesheet" href="../Church/Styles/stylesGiving.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
</head>

<body>
 <div class="main">
 	<?php
    	include('../Header.php');
    	include('../Menu.php');
  	?>

	<div class="content">
        <h1>Tithe/Offering Guide</h1>  
    </div>


    
	
	
	  <div class="middle">
	<div class="tab">
	<button class="tablinks" onclick="openGiving(event, 'Zelle')"id ="DefaultOpen">Zelle</button>
	<!-- <button class="tablinks" onclick="openGiving(event, 'Text to Give')">Text to Give</button> -->
	<!-- <button class="tablinks" onclick="openGiving(event, 'PayPal')">PayPal</button> -->
	<button class="tablinks" onclick="openGiving(event, 'In-Person')">In-Person</button>
	<button class="tablinks" onclick="openGiving(event, 'Building Pledge')">Building Pledge</button>
  </div>
  
  <div id="Zelle" class="tabcontent">
	
	
	<h3>Step 1</h3>
	<div class="grid-containerpayment">
	
	  <div class="payment-item">
		<img src="../Church/Pictures/zelle1.PNG" alt="Zelle Image" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>If your bank supports Zelle (ex: Wells Fargo, Bank of America) navigate to your bank through their application or on their website <br> In the Pay & Transfer section, select <span style="color: #20ccfa; font-weight: bold;">Send Money</span></p>
	  </div>
	  <h3>Step 2</h3>
	  <div class="payment-item">
		
		<img src="../Church/Pictures/zelle2.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Once in the send money section, select <span style="color: #20ccfa; font-weight: bold;">Send</span> </p>
	  </div>

	  <h3>Step 3</h3>
	  <div class="payment-item">
		
		<img src="../Church/Pictures/zelle3.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Select search, and input "5717897855". Then press <span style="color: #20ccfa; font-weight: bold;">add 5717897855</span> </p>
	  </div>

	  <h3>Step 4</h3>
	  <div class="payment-item">
		
		<img src="../Church/Pictures/zelle4.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Put Glory Goodness Church for name and select add as business, and then select <span style="color: #20ccfa; font-weight: bold;">continue</span> </p>
	  </div>

	  <h3>Step 5</h3>
	  <div class="payment-item">
		
		<img src="../Church/Pictures/zelle5.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Double check the phone number you have entered, and that Zelle says "You're sending money to GLORY GOODNESS CHURCH INC Accounts" <br> select <span style="color: #20ccfa; font-weight: bold;">continue</span> </p>
	  </div>

	  <h3>Step 6</h3>
	  <div class="payment-item">
		
		<img src="../Church/Pictures/zelle6.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Enter the donation amount along with a memo. The memo should include your name + donation amount + the current date. Select <span style="color: #20ccfa; font-weight: bold;">review</span> <br> After reviewing your donation amount, press send on the next page to finalize the payment</p>
	  
	</div>
	 
	</div>
	
 
  </div>
  
  <!-- <div id="Text to Give" class="tabcontent">
	
	<h3>Step 1</h3>
	<div class="grid-containertxt2give">
	
	  <div class="txt2give-item">
		<img src="../Church/Pictures/txt2give1.PNG" alt="Zelle Image" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>On your phone, navigate to your text message application and input the phone number ""</p>
	  </div>
	  <h3>Step 2</h3>
	  <div class="txt2give-item">
		
		<img src="../Church/Pictures/zelle2.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Once in the send money section, select <span style="color: #20ccfa; font-weight: bold;">Send</span> </p>
	  </div>

	  <h3>Step 3</h3>
	  <div class="txt2give-item">
		
		<img src="../Church/Pictures/zelle3.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Select search, and input "5717897855". Then press <span style="color: #20ccfa; font-weight: bold;">add 5717897855</span> </p>
	  </div>


	 
	</div>
  </div> -->

  




  <!-- <div id="PayPal" class="tabcontent">
	
	<h3>Step 1</h3>
	<div class="grid-containerpaypal"> -->
	
		<!-- <div class="paypal-item">
		
			<button type="button" style="float: left; margin-right: 20px;" class ="button">Donate</button>
			<p>Click the donation button to the left to donate through PayPal</p>
		</div>
		<h3>Step 2</h3>
		<div class="paypal-item">
			
			<img src="../Church/Pictures/zelle2.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
			<p>Once in the send money section, select <span style="color: #20ccfa; font-weight: bold;">Send</span> </p>
		</div>

		<h3>Step 3</h3>
		<div class="paypal-item">
			
			<img src="../Church/Pictures/zelle3.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
			<p>Select search, and input "5717897855". Then press <span style="color: #20ccfa; font-weight: bold;">add 5717897855</span> </p>
		</div>

		<h3>Step 4</h3>
		<div class="paypal-item">
			
			<img src="../Church/Pictures/zelle4.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
			<p>Put Glory Goodness Church for name, and then select <span style="color: #20ccfa; font-weight: bold;">continue</span> </p>
		</div>

		<h3>Step 5</h3>
		<div class="paypal-item">
			
			<img src="../Church/Pictures/zelle5.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
			<p>Double check the phone number you have entered, and that Zelle says "You're sending money to GLORY GOODNESS CHURCH INC Accounts" <br> select <span style="color: #20ccfa; font-weight: bold;">continue</span> </p>
		</div>

		<h3>Step 6</h3>
		<div class="paypal-item">
			
			<img src="../Church/Pictures/zelle6.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
			<p>Enter the donation amount along with a memo. Select <span style="color: #20ccfa; font-weight: bold;">review</span> <br> On the next screen, select send to send your donation</p>
		</div>
		
		</div>
		
	</div> -->
  <div id="In-Person" class="tabcontent">
	<h3>Cash</h3>
	<div class="grid-containerinperson">
	
	  <div class="inperson-item">
		
		<p>During church service hours, find a staff member to give you an offering envelope. Place your cash donation in the envelope and return it to the staff member</p>
	  </div>
	  <h3>Check</h3>
	  <div class="inperson-item">
		
		
	  <p>During church service hours, head to the reception area and tell a staff member that you want to donate with a check. The check should be made out to Glory Goodness Church.  </p>
	  </div>

	  


	 
	</div>
	</div>
	<div id="Building Pledge" class="tabcontent">
	
		<div class="grid-containerbld">
			<h3> Donations Building Pledge</h3>
		
		  <div class="bldpledge-item">
			
			<p>
			As we continue to grow in faith and community, we envision a space that reflects the warmth and inclusivity of our congregation—a place where we can gather in worship, celebration, and support. Your generous donations towards our building pledge will bring us closer to realizing this dream. With your support, we can lay the foundation for a permanent home, a sanctuary where all are welcome to find solace, inspiration, and belonging. Every contribution, big or small, brings us one step closer to creating a space that will serve as a beacon of hope and love for generations to come. Thank you for your generosity and belief in our shared vision.</p>
		
		</div>
		  <div class="bldpledge-item">
			<h3>How to Donate for Building Pledge</h3>
			<p>to donate for the building pledge, follow the instructions in the previous tabs (ex: Zelle, Text to Give, PayPal, In-Person, B) and include a note "Building Pledge"</p>
	
		  </div>
	
		  
	
	
		
	</div>
		</div>
	  	</div>
		
	  	<!-- lines 136-146 written by Brandon -->
	  
	  <div class="verse">
			<p>2nd Peter 1:3</p>
			
	  
	  
                    <p2>By his divine power, God has given us everything we need for living a godly life. We have
                        received all of this by coming to know him, the one who called us to himself by means of his
                        marvelous glory and excellence.</p2>
					</div>

                  
	  <div class="bottomPage">
	  		<p>&copy; Glory Goodness Church 2023. All rights reserved.<p>
	  </div>
    </div>
	<!-- lines 146-159 written by Jillian -->
	<script>

		function openGiving(evt, givingName) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(givingName).style.display = "block";
		  evt.currentTarget.className += " active";
		}
		document.getElementById("DefaultOpen").click();
		</script>
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
</div>
	
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