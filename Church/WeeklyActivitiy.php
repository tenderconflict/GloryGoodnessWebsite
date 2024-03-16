
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Weekly Activity</title>
  <link rel="stylesheet" href="../Church/Styles/stylesWeeklyMessage.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <style> 
/* .gridcontent h1 {
    text-align: center;
} */
.gridcontent p {
    padding-top: 1vw;
    line-height: 2.5vw;
}
.block-text {
    margin-left: 2vw;
    margin-right: 2vw;
    line-height: 2.5vw;


}

.notes {
  max-width: 250px;
    flex-basis: 30%;
    margin-top: 20px; /* Add margin to create space between the boxes */

    padding: 10px;
    box-sizing: border-box;
    /* overflow-y: auto;  
  */
    background-color: rgba(235, 235, 247, 0.7);
    margin-left: 20px;
    margin-right: 20px ;
    

}
.side-content {
    display: flex;
    flex-direction: column; /* Stack the items vertically */
}
.notes h1 { 
    font-size: 2vw;
    color: #2c3093;
    padding-bottom: 1vw;
    text-align: center;
  }
  .notes p {
    text-align: center;
    padding-top: .5vw;
  padding-bottom:.5vw;
  }
      .link-style {
        color: black;
    }
    .link-style:hover {
        color: #2c3093;
    }
    .link-style:active {
        color: gold;
    }

</style>
</head>

<body>
  <?php
    $pdf_dir = "uploads/";
    $pdf_fileschedule = $pdf_dir . "schedule.pdf";
    $pdf_fileprayer = $pdf_dir . "prayer.pdf";
    $pdf_filebible_study = $pdf_dir . "bible_study.pdf"
    $pdf_filebible_reading = $pdf_dir . "bible_reading.pdf";
?>
    
       
   

 <div class="main">
	  <div class="top">
		<div class="login">
			<span style="float:right;">
				<li type="none"><a href="../Church/LoginChurch.html">Sign in</a></li>
			</span>
		</div>
		<div class="logo">
			<li><a href="../GloryGHome.html"><img src="../Church/Pictures/GGCLogo.png" alt="ChurchLogo" height= "80"></a></li>			
		</div>

	  </div>
	  <div class="navbar">
		<!-- Lines 23-91 written by Thomas -->
		  <div class="menu">
			  <ul>
				  <!-- clicking home should bring you to the homepage-TD -->
				  <!-- <li><a href="#"><img src="GGCLogo.png" alt="ChurchLogo" height= "70"></a></li> -->


				  <!-- <li><a href="#">HOME</a></li>-->




				  <li><a href="../GloryGHome.html">Home <br><span style="color: rgb(18, 18, 161);">Chủ</span></a></li>



				  <li class="has-submenu"><a href="#">About Us <br> <span style="color: rgb(18, 18, 161);">Thông
							  tin</span></a>


					  <ul class="submenu">
						  <li><a href="../Church/AboutUs/MissionVision.html">Mission & Vision <br><span style="color: rgb(18, 18, 161);">Khát
									  vọng</span></a></li>
						  <li><a href="../Church/AboutUs/ChurchStaff.html">Church Staff <br><span style="color: rgb(18, 18, 161);">Nhân viên</span></a>
						  </li>
						  <li><a href="../Church/AboutUs/ChurchHistory.html">Church History <br> <span style="color: rgb(18, 18, 161);">Lịch
									  sử</span></a></li>
						  <!--more may be added in the future here -TD -->
					  </ul>


				  </li>


				  <li><a href="#">Ministries <br><span style="color: rgb(18, 18, 161);">Bộ</span></a>

					  <ul class="submenu">
						  <li><a href="../Church/ChurchEventCalandar.html">Church Event Calendar <br><span
									  style="color: rgb(18, 18, 161);">Lịch</span></a></li>
						  <li><a href="../Church/WeeklyActivitiy.html">Weekly Activity <br><span style="color: rgb(18, 18, 161);">Hoạt
									  động</span></a></li>
						  <li><a href="../Church/WeeklyBibleReadings.html">Yearly Bible Reading <br><span style="color: rgb(18, 18, 161);">Đọc Kinh
									  Thánh</span></a></li>

					  </ul>


				  </li>


				  <li><a href="../Church/Giving.html">Giving <br><span style="color: rgb(18, 18, 161);">Cho</span></a></li>



				  <li><a href="#">School <br><span style="color: rgb(18, 18, 161);">Trường học</span></a>

					  <ul class="submenu">
						  <li><a href="../School/GloryGSchool.html">Glory Goodness School <br><span
									  style="color: rgb(18, 18, 161);">Trường học</span></a></li>

					  </ul>


				  </li>

			  </ul>
		  </div>
		</div>

<div class ="space"><h1>Weekly Activity</h1></div>





	  <div class="middle">


        <div class = "gridcontent">
      <h1 class = "dashed-linebottom">Schedule</h1>
      

        <h2>  <a href="<?php echo $pdf_fileschedule; ?>" target="_blank"> Click this link to access this week's schedule!</a>
        </h2>

        <h1 class = "dashed-linebottom">Prayer</h1>
      

        <h2>  <a href="<?php echo $pdf_fileprayer; ?>" target="_blank"> Click this link to access this week's prayer list!</a>
        </h2>

        <h1 class = "dashed-linebottom">Bible Study</h1>
      

        <h2>  <a href="<?php echo $pdf_filebible_study; ?>" target="_blank"> Click this link to access this week's bible study!</a>
        </h2>

        <h1 class = "dashed-linebottom">Bible Reading</h1>
      

        <h2>  <a href="<?php echo $pdf_filebible_reading; ?>" target="_blank"> Click this link to access this week's bible reading!</a>
        </h2>
       



    </div>
    <div class ="side-content">
    <div class = "servicetimes"><h1>Service Times</h1>
    <p class="dashed-line">Every Sunday at 11:00am</p></div>
    <div class="notes">
       <h1>Notes</h1>
       <p>based on the weather, we will be meeting virtually this week</p>
       




    </div>
</div>
		</div>



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


</body>
</html>