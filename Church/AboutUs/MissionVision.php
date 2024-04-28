<?php
session_start();
?>

<!-- Lines 1-150 written by Thomas -->
<!DOCTYPE html>
<html lang="en">

<head>
     
<title>Glory Goodness Church</title>
    <link rel="stylesheet" href="AboutUsStyles/MissionVisionStyles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> </h2>

            </div>


            <!-- makes it so logo's in the top left and login is in the top right-TD -->
            <div class="login">
                <span style="float:right;">
                    <li><a href="../../Church/LoginChurch.html">Sign in </a></li>
                </span>
            </div>

            <p style="text-align:center;">
                <!-- clicking home should bring you to the homepage-TD -->
                <li><a href="../../GloryGHome.html#"><img src="../../Church/Pictures/GGCLogo.png" alt="ChurchLogo" height="80"></a>
                </li>


            </p>









            <div class="menu">
                <ul>
                    <!-- clicking home should bring you to the homepage-TD -->
                    <!-- <li><a href="#"><img src="GGCLogo.png" alt="ChurchLogo" height= "70"></a></li> -->


                    <!-- <li><a href="#">HOME</a></li>-->




                    <li><a href="../../GloryGHome.html#">Home <br><span style="color: rgb(18, 18, 161);">Chủ</span></a></li>



                    <li class="has-submenu"><a href="#">About Us <br> <span style="color: rgb(18, 18, 161);">Thông
                                tin</span></a>


                        <ul class="submenu">
                            <li><a href="MissionVision.html">Mission & Vision <br><span style="color: rgb(18, 18, 161);">Khát
                                        vọng</span></a></li>
                            <li><a href="ChurchStaff.html">Church Staff <br><span style="color: rgb(18, 18, 161);">Nhân viên</span></a>
                            </li>
                            <li><a href="ChurchHistory.html">Church History <br> <span style="color: rgb(18, 18, 161);">Lịch
                                        sử</span></a></li>
                            <!--more may be added in the future here -TD -->
                        </ul>


                    </li>


                    <li><a href="#">Ministries <br><span style="color: rgb(18, 18, 161);">Bộ</span></a>

                        <ul class="submenu">
                            <li><a href="../ChurchEventCalandar.html">Church Event Calendar <br><span
                                        style="color: rgb(18, 18, 161);">Lịch</span></a></li>
                            <li><a href="../WeeklyActivitiy.html">Weekly Activity <br><span style="color: rgb(18, 18, 161);">Hoạt
                                        động</span></a></li>
                            <li><a href="../WeeklyBibleReadings.html">Yearly Bible Reading <br><span style="color: rgb(18, 18, 161);">Đọc Kinh
                                        Thánh</span></a></li>

                        </ul>


                    </li>


                    <li><a href="../Giving.html">Giving <br><span style="color: rgb(18, 18, 161);">Cho</span></a></li>



                    <li><a href="#">School <br><span style="color: rgb(18, 18, 161);">Trường học</span></a>

                        <ul class="submenu">
                            <li><a href="../../School/GloryGSchool.html">Glory Goodness School <br><span
                                        style="color: rgb(18, 18, 161);">Trường học</span></a></li>

                        </ul>


                    </li>

                </ul>
            </div>
        </div>

<body>
    <div class="main">
	  <div class="navbar">
			<?php 
                include('../Header.php');
                include('../Menu.php');
            ?>
	  </div>
	  
	  <div class="content">
		<h1>Glory Goodness Church Vision and Mission</h1>
	  </div>
          

</div>
        
<?php include('../../Footer.php'); ?>
          </div>

</body>

</html>

