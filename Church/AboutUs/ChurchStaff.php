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
                    <li><a href="../../Church/loginChurch.php">Sign in </a></li>
                </span>
            </div>

            <p style="text-align:center;">
                <!-- clicking home should bring you to the homepage-TD -->
                <li><a href="../../GloryGHome.php#"><img src="../../Church/Pictures/GGCLogo.png" alt="ChurchLogo" height="80"></a>
                </li>


            </p>









            <div class="menu">
                <ul>
                    <!-- clicking home should bring you to the homepage-TD -->
                    <!-- <li><a href="#"><img src="GGCLogo.png" alt="ChurchLogo" height= "70"></a></li> -->


                    <!-- <li><a href="#">HOME</a></li>-->




                    <li><a href="../../GloryGHome.php#">Home <br><span style="color: rgb(18, 18, 161);">Chủ</span></a></li>



                    <li class="has-submenu"><a href="#">About Us <br> <span style="color: rgb(18, 18, 161);">Thông
                                tin</span></a>


                        <ul class="submenu">
                            <li><a href="MissionVision.php">Mission & Vision <br><span style="color: rgb(18, 18, 161);">Khát
                                        vọng</span></a></li>
                            <li><a href="ChurchStaff.php">Church Staff <br><span style="color: rgb(18, 18, 161);">Nhân viên</span></a>
                            </li>
                            <li><a href="ChurchHistory.php">Church History <br> <span style="color: rgb(18, 18, 161);">Lịch
                                        sử</span></a></li>
                            <!--more may be added in the future here -TD -->
                        </ul>


                    </li>


                    <li><a href="#">Ministries <br><span style="color: rgb(18, 18, 161);">Bộ</span></a>

                        <ul class="submenu">
                            <li><a href="../ChurchEventCalendar.php">Church Event Calendar <br><span
                                        style="color: rgb(18, 18, 161);">Lịch</span></a></li>
                            <li><a href="../WeeklyActivitiy.html">Weekly Activity <br><span style="color: rgb(18, 18, 161);">Hoạt
                                        động</span></a></li>
                            <li><a href="../WeeklyBibleReadings.php">Yearly Bible Reading <br><span style="color: rgb(18, 18, 161);">Đọc Kinh
                                        Thánh</span></a></li>

                        </ul>


                    </li>


                    <li><a href="../Giving.php">Giving <br><span style="color: rgb(18, 18, 161);">Cho</span></a></li>



                    <li><a href="#">School <br><span style="color: rgb(18, 18, 161);">Trường học</span></a>

                        <ul class="submenu">
                            <li><a href="../../School/GloryGSchool.php">Glory Goodness School <br><span
                                        style="color: rgb(18, 18, 161);">Trường học</span></a></li>

                        </ul>


                    </li>

                </ul>
            </div>
        </div>


        <div class="content">
            <h1>Church Staff</h1>
        </div>

        <div class="SloganBanner">
            <h2>Pastor:<h2>
                    <p>Auctor augue mauris augue neque gravida in fermentum et. Faucibus et molestie ac feugiat sed lectus vestibulum.</p>
                    <h2>Volunteers:<h2>
                        <p>Nunc sed velit dignissim sodales ut eu. Posuere lorem ipsum dolor sit amet consectetur adipiscing elit duis.</p>
                        <h2>Elders:<h2>
                            <p>Mattis rhoncus urna neque viverra justo nec ultrices dui sapien. In fermentum posuere urna nec tincidunt. Eu consequat ac felis donec et odio. Enim facilisis gravida neque convallis a cras. </p>
        </div>





        <div class="ContactChurch">


                    <h3>Revelation 4:11</h3>
                    <p3>Worthy are you, our Lord and God,
                        to receive glory and honor and power,
                        for you created all things,
                        and by your will they existed and were created.</p3>


                    <p4>&copy; Glory Goodness Church 2023. All rights reserved.</p4>

        </div>

</body>

</html>