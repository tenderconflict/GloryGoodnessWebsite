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
            <?php 
                include('Header.php');
                include('Menu.php');
            ?>
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
    </div>
</body>

</html>