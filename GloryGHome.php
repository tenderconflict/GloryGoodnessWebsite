<?php
session_start();
?>

<!-- Lines 1-147 written by Thomas -->
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Glory Goodness Church Home</title>
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
            <div class="englishSlogan">
                <h2>Glory to God.<br> God is Good!</h2>
            </div>


            <div class="VietnameseSlogan">
                <h2>Vinh Hiển Danh <br>Chúa. Chúa là<br> Tốt Lành!</h2>
            </div>


            <p>Worshiping Every Sunday at 11:00 am</p>
        </div>




        <div class="middle">
            <div class="grid-container2">
                <div class ="grid-item2"><h1>Weekly Activities</h1>
                    
                        <div class="leftrightbutton"><a href = '#'><button class = "button">View Events</button></a></div>
                      <div class ='leftrightbutton'><a href = '#'><button class = "button">Các sự kiện</button></a></div>
                  </div>
                <div class ="grid-item2">
                    <h1>Church Calendar</h1>
                    <div class="leftrightbutton"><a href = '../School/calendar.php'><button class = "button">View Calendar</button></a></div>
                      <div class ='leftrightbutton'><a href = '../School/calendar.php'><button class = "button">Lịch</button></a></div>
                  
            </div>

            <div class ="grid-item2"><h1>Where to Find Us</h1>
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1336.9189201046015!2d-77.18205101753678!3d38.852572083540544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b35af65f1a27%3A0x58704cfba0b35009!2sBeech%20Tree%20Elementary%20School!5e0!3m2!1sen!2sus!4v1699143290662!5m2!1sen!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>



                <div class ="grid-item2"><h1>Contact us</h1>
                    
                    <p2>Email: </p2>
                    <textarea name="Email" rows="1" cols="30">example@email.com</textarea>
                   <br>
                    <p2>Message<br></p2>
                    <textarea name="message" rows="14" cols="50" >Send messages here.</textarea>
                    <br>
                    <input type="submit" id="search" value="Submit" style="height:35px; width:90px" />
                    
                </div>
        </div>

        <?php 
            include('Footer.php');
        ?>

    </div>
</body>

</html>