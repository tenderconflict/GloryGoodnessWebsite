<?php
session_start();
?>
<!-- Lines 1-147 written by Thomas -->
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
                    <li><a href="Church/loginChurch.php">Sign in</a></li>
                </span>
            </div>

            <p style="text-align:center;">
                <!-- clicking home should bring you to the homepage-TD -->
                <li><a href="GloryGHome.php#"><img src="Church/Pictures/GGCLogo.png" alt="ChurchLogo" height="80"></a>
                </li>


            </p>









            <div class="menu">
                <ul>
                    <!-- clicking home should bring you to the homepage-TD -->
                    <!-- <li><a href="#"><img src="GGCLogo.png" alt="ChurchLogo" height= "70"></a></li> -->


                    <!-- <li><a href="#">HOME</a></li>-->




                    <li><a href="GloryGHome.php#">Home <br><span style="color: rgb(18, 18, 161);">Trang chủ</span></a></li>



                    <li class="has-submenu"><a href="#">About Us <br> <span style="color: rgb(18, 18, 161);">Về Hội Thánh</span></a>


                        <ul class="submenu">
                            <li><a href="Church/AboutUs/MissionVision.php">Mission & Vision <br><span style="color: rgb(18, 18, 161);">Sứ Mạng và Tầm Nhìn</span></a></li>
                            <li><a href="Church/AboutUs/ChurchStaff.php">Church Staff <br><span style="color: rgb(18, 18, 161);">Thành viên</span></a>
                            </li>
                            <li><a href="Church/AboutUs/ChurchHistory.php">Church History <br> <span style="color: rgb(18, 18, 161);">Lịch sử</span></a></li>
                            <!--more may be added in the future here -TD -->
                        </ul>


                    </li>


                    <li><a href="#">Ministries <br><span style="color: rgb(18, 18, 161);">Mục Vụ</span></a>

                        <ul class="submenu">
                            <li><a href="Church/ChurchEventCalendar.php">Church Event Calendar <br><span
                                        style="color: rgb(18, 18, 161);">Thời Khoá Biểu của</span></a></li>
                            <li><a href="Church/WeeklyActivitiy.html">Weekly Activity <br><span style="color: rgb(18, 18, 161);">Hoạt Động Hằng Tuần</span></a></li>
                            <li><a href="Church/WeeklyBibleReadings.php">Weekly Bible Reading <br><span style="color: rgb(18, 18, 161);">Lịch đọc Kinh Thánh Hằng Năm</span></a></li>

                        </ul>


                    </li>


                    <li><a href="Church/Giving.php">Giving <br><span style="color: rgb(18, 18, 161);">Dâng Hiến</span></a></li>



                    <li><a href="#">Education <br><span style="color: rgb(18, 18, 161);">Giáo Dục</span></a>

                        <ul class="submenu">
                            <li><a href="School/GloryGSchool.php">School <br><span
                                        style="color: rgb(18, 18, 161);">Trường học</span></a></li>

                        </ul>


                    </li>

                </ul>
            </div>
        </div>


        <div class="content">
            <h1>Welcome to Glory Goodness Church!</h1>
        </div>

        <div class="SloganBanner">
            <h1>Glory to God. God is Good!<h1>
                    <p>Worshiping Every Sunday at 11:00 am</p>

        </div>




        <div class="UpcomingEventsSection">
            <div class="UpcomingEvents">
                <h1>Upcoming Events<br><span style="color: rgb(234, 255, 235);">Sự kiện sắp tới</span>
                   

                       
                        <div class="leftrightbutton"><a href = 'Church/WeeklyActivitiy.html'><button class = "button">View Events</button></a></div>
                        <div class="leftrightbutton"><a href = 'Church/WeeklyActivitiy.html'><button class = "button">Các sự kiện</button></a></div>

                        <!-- <p2>November 18th: The Book of Mark Service</p2>
            <p3>November 25th: Thanksgiving Service</p3>
            <p4>December 2nd: Special Service by Anna</p4>
 -->
            </div>

            <div class="ChurchCalendarSection">
                <!-- Changed class to "UpcomingEventsSection" -->
                <div class="ChurchCalendar">
                    <h1>Church Calendar<br><span style="color: rgb(234, 255, 235);">Lịch</span></h1>

                    <div class="leftrightbutton"><a href = 'Church/ChurchEventCalendar.php'><button class = "button">View Calendar</button></a></div>
                    <div class="leftrightbutton"><a href = 'Church/ChurchEventCalendar.php'><button class = "button">Lịch</button></a></div>
                </div>



            </div>


        </div>
 



        <div class="ContactChurch">
            <h1>Where to Find Us<br><span style="color: rgb(182, 182, 255);">Tìm Hội Thánh</span>
                <h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1336.9189201046015!2d-77.18205101753678!3d38.852572083540544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b35af65f1a27%3A0x58704cfba0b35009!2sBeech%20Tree%20Elementary%20School!5e0!3m2!1sen!2sus!4v1699143290662!5m2!1sen!2sus"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p5> <br> &nbsp Contact: info@glorygoodnesschurch.org</p5>

                    <h3>2nd Peter 1:3</h3>
                    <p3>By his divine power, God has given us everything we need for living a godly life. We have
                        received all of this by coming to know him, the one who called us to himself by means of his
                        marvelous glory and excellence.</p3>


                    <p4>&copy; Glory Goodness Church 2023. All rights reserved.</p4>

        </div>

</body>

</html>