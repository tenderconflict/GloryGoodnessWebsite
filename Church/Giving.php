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
	<button class="tablinks" onclick="openGiving(event, 'WhyGive')"id ="DefaultOpen">Why Give</button>
	<button class="tablinks" onclick="openGiving(event, 'Zelle')">Zelle</button>
	<!-- <button class="tablinks" onclick="openGiving(event, 'Text to Give')">Text to Give</button> -->
	<button class="tablinks" onclick="openGiving(event, 'PayPal')">PayPal</button>
	<button class="tablinks" onclick="openGiving(event, 'In-Person')">In-Person (Gửi trực tiếp)</button>
	<button class="tablinks" onclick="openGiving(event, 'Building Pledge')">Building Pledge</button>
  </div>

  <div id="WhyGive" class="tabcontent">
	<div class="grid-containerwhygive">
		<enh1>Importance of Donating</enh1>
		<vh1>translation here</vh1>
	  <div class="whygive-item">
		
		<p>The Bible calls believers to tithe a portion of their income. Leviticus 27:30 states, “A tithe of everything from the land, whether grain from the soil or fruit from the trees, belongs to the Lord; it is holy to the Lord."
			Tithing expresses our gratitude for all that God has done for us, and contributes to our church's spirtual growth. 
		</p>
	  </div>
	  <enh1>How to Donate</enh1>
	  <vh1>translation here</vh1>

	  <div class="whygive-item">
		
		
		<p>To submit your donation, click on the desired tab link above. You can donate through Zelle, PayPal, or in person. PayPal allows you to donate with your 
			credit/debit card online and does not require you to have a PayPal account. If you do not want to donate online, you can donate in person using cash or check. Finally, you can 
		read more about how to donate towards the construction of a permanent building for our church by viewing the "Donation Pledge" tab. Thank you for supporting the mission of Glory Goodness Church! </p>
	  
	</div>
	</div>
	</div>


  
  <div id="Zelle" class="tabcontent">
	
	
	
	<div class="grid-containerpayment">
	<enh1>Step 1</enh1>
		<vh1>Bước 1</vh1>
	  <div class="payment-item">
		<img src="../Church/Pictures/zelle1.PNG" alt="Zelle Image" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<img src="../Church/Pictures/zchase1.jpeg" alt="Zelle Image" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>If your bank supports Zelle (ex: Wells Fargo, Bank of America) navigate to your bank through their application or on their website <br> In the Pay & Transfer section, select <span style="color: #20ccfa; font-weight: bold;">Send Money</span></p>
	  	<p style = "padding-top: 5vw;">Nếu ngân hàng của quý vị có Zelle (Wells Fargo, Bank of America), kết nối với ngân hàng thông qua ứng dụng Zelle hoặc trên website của ngân hàng.
Ở mục Gửi Tiền và Chuyển tiền, nhấn vào Gửi Tiền</p>
<div style="clear: both;"></div> 
			
			<div style="float: left; margin-left: 10px;">
				<p>Wells Fargo</p>
			</div>
			<div style="float: left; margin-left: 140px;">
				<p>Chase Bank</p>
			</div>
	</div>
	<enh1>Step 2</enh1>
		<vh1>Bước 2</vh1>
	  <div class="payment-item">
		
		<img src="../Church/Pictures/zelle2.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Once in the send money section, select <span style="color: #20ccfa; font-weight: bold;">Send</span> </p>
		<p style = "padding-top: 5vw;">Khi đã vào mục Gửi Tiền, chọn Gửi</p>
	  </div>

	  <enh1>Step 3</enh1>
		<vh1>Bước 3</vh1>
	  <div class="payment-item">
		
		<img src="../Church/Pictures/zelle3.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Select search, and input "5717897855". Then press <span style="color: #20ccfa; font-weight: bold;">add "5717897855"</span> </p>
		<p style = "padding-top: 5vw;">Nhấn vào Tìm Kiếm, và điền vào số điện thoại "5717897855". Nhấn thêm vào "5717897855".</p>
	  </div>

	  <enh1>Step 4</enh1>
		<vh1>Bước 4</vh1>
	  <div class="payment-item">
		
		<img src="../Church/Pictures/zelle4.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Put Glory Goodness Church for the name and select add as business, and then select <span style="color: #20ccfa; font-weight: bold;">continue</span> </p>
		<p style = "padding-top: 5vw;">Điền tên là Glory Goodness Church và chọn thêm vào "as business", và chọn Tiếp Tục.</p>
	  </div>

	  <enh1>Step 5</enh1>
		<vh1>Bước 5</vh1>
	  <div class="payment-item">
	 
		<img src="../Church/Pictures/zelle5.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<img src="../Church/Pictures/zchase2.PNG" alt="Chase Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Double check the phone number you have entered, and that Zelle says "You're sending money to GLORY GOODNESS CHURCH INC Accounts" <br> select <span style="color: #20ccfa; font-weight: bold;">continue</span> </p>
		<p style = "padding-top: 5vw;">Kiểm tra lần nữa số điện thoại quý vị đã điền và Zelle cho bạn biết là "Bạn đang gửi tiền đến tài khoản Glory Goodness Church INC".
Chọn Tiếp Tục</p>
<div style="clear: both;"></div> 
			
			<div style="float: left; margin-left: 10px;">
				<p>Wells Fargo</p>
			</div>
			<div style="float: left; margin-left: 140px;">
				<p>Chase Bank</p>
			</div>
	  </div>

	  <enh1>Step 6</enh1>
		<vh1>Bước 6</vh1>
	  <div class="payment-item">
		
		<img src="../Church/Pictures/zelle6.PNG" alt="Zelle Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<img src="../Church/Pictures/zchase3.PNG" alt="Chase Image2" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Enter the donation amount along with a memo. The memo should include your name + donation amount + the current date. Select <span style="color: #20ccfa; font-weight: bold;">review</span> <br> After reviewing your donation amount, press send on the next page to finalize the payment</p>
	  	<p style = "padding-top: 5vw;">Chọn số tiền quý vị muốn gửi với lời nhắn kèm theo. Trong lời nhắn xin điền vào tên của quý vị + số tiền + ngày/tháng. 
Chọn Kiểm Tra lại
Sau khi kiểm tra lại số tiền muốn gửi, nhấn vào Gửi ở trang kế tiếp để hoàn thành quá trình gửi tiền. </p>
<div style="clear: both;"></div> 
			
			<div style="float: left; margin-left: 10px;">
				<p>Wells Fargo</p>
			</div>
			<div style="float: left; margin-left: 140px;">
				<p>Chase Bank</p>
			</div>
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
  <div id="PayPal" class="tabcontent">
	
	
	<div class="grid-containerpaypal">
	<enh1>Step 1</enh1>
		<vh1>Bước 1</vh1>
	  <div class="paypal-item">
		
		<a href = 'https://www.paypal.com/donate/?hosted_button_id=5CWW5HUH3TV8G'><button type="button" style="float: left; margin-right: 20px;" class ="button">Donate</button></a>
		<p>Click the donation button to the left to donate through PayPal <br style="padding-top: 5vw"> Nhấn vào nút "Donation" bên trái để dâng hiến bằng PayPal</p>
	
	  </div>
	  <enh1>Step 2</enh1>
		<vh1>Bước 2</vh1>
	  <div class="paypal-item">
		
		<img src="../Church/Pictures/paypal1.PNG" alt="Paypal Image 1" style="float: left; margin-right: 10px; width: 200px; height: 450px;" >
		<p>Enter your donation amount. If you would like to donate through your paypal account, select "Donate with PayPal." Otherwise 
			you can donate online with your credit/debit card through the PayPal link using the "Donate with Debit or Credit Card"
		</p>
		<p style = "padding-top: 5vw;">Nhấn vào số tiền muốn gửi. Nếu quý vị muốn gửi bằng tài khoản Paypal, xin nhấn vào "Donate with PayPal." Hoặc quý vị có thể dâng hiến online bằng thẻ credit/debit qua đường link của PayPal bằng cách nhấn vào "Donate with Debit or Credit Card"</p>
	  </div>

	  <enh1>Step 3</enh1>
		<vh1>Bước 3</vh1>
	  <div class="paypal-item">
		
		<img src="../Church/Pictures/paypal2.PNG" alt="Paypal Image 2" style="float: left; margin-right: 10px; width: 200px; height: 400px;" >
		<p>After signing into your PayPal account, or entering your card information, write a memo that includes your name + donation amount + current date. Ensure that the card that is selected is the one you want to use and then click "Donate Now" </p>
		<p style = "padding-top: 5vw;">Sau khi đăng nhập vào tài khoản PayPal, hoặc điền vào thông tin thẻ ngân hàng của quý vị, vui lòng viết ở phần ghi chú tên họ, số tiền, và ngày tháng hiện tại. Lưu ý thẻ ngân hàng quý vị chọn sẽ là tài khoản quý vị muốn sử dụng để dâng hiến, sau đó nhấn vào "Donate Now".</p>
	</div>

	  
	 
	</div>
	
  </div>
  




  <div id="In-Person" class="tabcontent">
	
	<div class="grid-containerinperson">
	<enh1>Cash</enh1>
		<vh1>Tiền mặt</vh1>
	  <div class="inperson-item">
		
		<p>During church service hours, find a staff member to give you an offering envelope. Place your cash donation in the envelope and return it to the staff member</p>
	  	<p style = "padding-top: 3vw;">Xuyên suốt thời gian nhóm, quý vị vui lòng tìm thành viên hội thánh để được nhận phong bì. Tiền sẽ được bỏ vào phong bì và đưa lại cho thành viên của hội thánh. </p>
	</div>
	<enh1>Check</enh1>
	  <vh1>Bằng ngân phiếu</vh1>
	  <div class="inperson-item">
		
	 
	  <p>During church service hours, head to the reception area and tell a staff member that you want to donate with a check. The check should be made out to Glory Goodness Church.  </p>
	  <p style = "padding-top: 3vw;">Xuyên suốt thời gian nhóm, quý vị vui lòng tới quầy tiếp tân và nói với nhân sự của HTVHTL rằng quý vị muốn dâng hiến bằng ngân phiếu. Ngân phiếu nên được ghi chuyển tới Glory Goodness Church </p>
	</div>

	  


	 
	</div>
	</div>
	<div id="Building Pledge" class="tabcontent">
	
		<div class="grid-containerbld">
		<enh1> Donations Building Pledge</enh1>
			<vh1>Dâng hiến cho cam kết xây dựng</vh1>
			
			
		
		  <div class="bldpledge-item">
			
			<p>
			As we continue to grow in faith and community, we envision a space that reflects the warmth and inclusivity of our congregation—a place where we can gather in worship, celebration, and support. Your generous donations towards our building pledge will bring us closer to realizing this dream. With your support, we can lay the foundation for a permanent home, a sanctuary where all are welcome to find solace, inspiration, and belonging. Every contribution, big or small, brings us one step closer to creating a space that will serve as a beacon of hope and love for generations to come. Thank you for your generosity and belief in our shared vision.</p>
		<p style = "padding-top: 3vw;">Khi chúng tôi tiếp tục phát triển về đức tin và cộng đồng, chúng tôi mong muốn tạo ra một không gian phản ánh sự ấm áp và hòa nhập của hội thánh chúng tôi—một nơi mà chúng ta có thể tụ họp để thờ phượng, ăn mừng và hỗ trợ lẫn nhau. Những khoản quyên góp hào phóng của quý vị cho việc cam kết xây dựng của chúng tôi sẽ mang chúng ta đến gần hơn với việc thực hiện giấc mơ này. Với sự hỗ trợ của bạn, chúng tôi có thể đặt nền móng cho một ngôi nhà lâu dài, một nơi tôn nghiêm, nơi mà tất cả đều được chào đón để tìm thấy niềm an ủi, nguồn cảm hứng và sự thuộc về. Mỗi đóng góp, dù lớn hay nhỏ, đều đưa chúng ta tiến một bước gần hơn đến việc tạo ra một không gian như ngọn hải đăng của hy vọng và tình yêu cho các thế hệ mai sau. Cảm ơn sự hào phóng và niềm tin của quý vị vào tầm nhìn chung của chúng tôi.</p>
		</div>
		<enh1>How to Donate for Building Pledge</enh1>
			<vh1>Cách để dâng hiến cho Cam kết xây dựng</vh1>
		  <div class="bldpledge-item">
			
			<p>to donate for the building pledge, follow the instructions in the previous tabs (ex: Zelle, PayPal, in person) and include a note "Building Pledge"</p>
			<p style = "padding-top: 3vw;">Để dâng hiến cho cam kết xây dựng, vui lòng thực hiện các bước chỉ dẫn của phần trước (ví dụ: Zelle, PayPal, hoặc trực tiếp) và trong phần ghi chú sẽ là "Building Pledge"</p>
		  </div>
	
		  
	
	
		
	</div>
		</div>
	  	</div>
		
	  	<!-- lines 136-146 written by Brandon -->
	  
		<?php 
            include('../Footer.php');
        ?>
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