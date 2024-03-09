<?php
//echo"hello";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="Church/Styles/GloryGHomeStyles.css">
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
                    <li><a href="Church/LoginChurch.html">Sign in</a></li>
                </span>
            </div>

            <p style="text-align:center;">
                <!-- clicking home should bring you to the homepage-TD -->
                <li><a href="GloryGHome.html#"><img src="Church/Pictures/GGCLogo.png" alt="ChurchLogo" height="80"></a>
                </li>


            </p>









            <div class="menu">
                <ul>
                    <!-- clicking home should bring you to the homepage-TD -->
                    <!-- <li><a href="#"><img src="GGCLogo.png" alt="ChurchLogo" height= "70"></a></li> -->


                    <!-- <li><a href="#">HOME</a></li>-->




                    <li><a href="GloryGHome.html#">Home <br><span style="color: rgb(18, 18, 161);">Trang chủ</span></a></li>



                    <li class="has-submenu"><a href="#">About Us <br> <span style="color: rgb(18, 18, 161);">Về Hội Thánh</span></a>


                        <ul class="submenu">
                            <li><a href="Church/AboutUs/MissionVision.html">Mission & Vision <br><span style="color: rgb(18, 18, 161);">Sứ Mạng và Tầm Nhìn</span></a></li>
                            <li><a href="Church/AboutUs/ChurchStaff.html">Church Staff <br><span style="color: rgb(18, 18, 161);">Thành viên</span></a>
                            </li>
                            <li><a href="Church/AboutUs/ChurchHistory.html">Church History <br> <span style="color: rgb(18, 18, 161);">Lịch sử</span></a></li>
                            <!--more may be added in the future here -TD -->
                        </ul>


                    </li>


                    <li><a href="#">Ministries <br><span style="color: rgb(18, 18, 161);">Mục Vụ</span></a>

                        <ul class="submenu">
                            <li><a href="Church/ChurchEventCalandar.html">Church Event Calendar <br><span
                                        style="color: rgb(18, 18, 161);">Thời Khoá Biểu của</span></a></li>
                            <li><a href="Church/WeeklyActivitiy.html">Weekly Activity <br><span style="color: rgb(18, 18, 161);">Hoạt Động Hằng Tuần</span></a></li>
                            <li><a href="Church/WeeklyBibleReadings.html">Weekly Bible Reading <br><span style="color: rgb(18, 18, 161);">Lịch đọc Kinh Thánh Hằng Năm</span></a></li>

                        </ul>


                    </li>


                    <li><a href="Church/Giving.html">Giving <br><span style="color: rgb(18, 18, 161);">Dâng Hiến</span></a></li>



                    <li><a href="#">Education <br><span style="color: rgb(18, 18, 161);">Giáo Dục</span></a>

                        <ul class="submenu">
                            <li><a href="School/GloryGSchool.html">School <br><span
                                        style="color: rgb(18, 18, 161);">Trường học</span></a></li>

                        </ul>


                    </li>

                </ul>
            </div>
        </div>

<!-- lines 123-137 written by Jillian -->
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