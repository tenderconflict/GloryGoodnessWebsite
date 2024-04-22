<?php
include('Church/db_connection.php');

function displayHeader() {
    global $connection_mysql;

    $sql = "SELECT EnglishHeader, VietnameseHeader FROM MainPageHeader";
    $result = $connection_mysql->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h1>" . $row["EnglishHeader"] . "<br>" . $row["VietnameseHeader"] . "</h1>";
        } 
    } else {
        echo "No results found.";
    }
}
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
            <?php
                displayHeader();
            ?>

        </div>

        <div class="SloganBanner">
            <div class="englishSlogan">
                <h2>Glory to God.<br> God is Good!</h2>
            </div>


            <div class="VietnameseSlogan">
                <h2>Vinh Hiển Danh Chúa,<br> Chúa là Tốt Lành!</h2>
            </div>


            <p>Worshiping Every Sunday at 11:00 am <br>Nhóm lại vào mỗi Chúa Nhật lúc 11 giờ sáng </p>
        </div>




        <div class="middle">
            <div class="grid-container2">
                <div class ="grid-item2"><h1>Weekly Activities</h1>
                    
                        <div class="leftrightbutton"><a href = '#'><button class = "button">View Events<br>Các sự kiện</button></a></div>
                  </div>
                <div class ="grid-item2">
                    <h1>Church Calendar</h1>
                    <div class="leftrightbutton"><a href = '../School/calendar.php'><button class = "button">View Calendar<br>Lịch</button></a></div>
                  
            </div>

            <div class ="grid-item2"><h1>Where to Find Us <br>Tìm Hội Thánh</h1>
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1336.9189201046015!2d-77.18205101753678!3d38.852572083540544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b35af65f1a27%3A0x58704cfba0b35009!2sBeech%20Tree%20Elementary%20School!5e0!3m2!1sen!2sus!4v1699143290662!5m2!1sen!2sus"
                width="600" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>



                <div class ="grid-item2">
                   
<?php
 //php that allows the email to be sent
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@glorygoodnesschurch.org";//replace with church email when fixed

    $subject = "New Church Member Message";//title

    $name = $_POST['Name'];//name of the sender

    $email = $_POST['Email'];//email of sender

    $message = $_POST['message']; //message of the email from the input box
    $headers = "From: $email";

    
    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    

    //checking to see if the email sent worked
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>

<h1>Contact us <br> Danh bạ</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <p2>Tên/Name: </p2><br>
    <input type="text" name="Name" placeholder="Enter your name"><br>

    <p2>Email: </p2><br>
    <input type="email" name="Email" placeholder="Enter your email"><br>
    
    <p2>Tin nhắn/Message:<br></p2>
    <textarea name="message" rows="14" cols="50" placeholder="Enter your message"></textarea><br>
    
    <input type="submit" id="search" value="Submit" style="height:35px; width:90px" />
</form>

                </div>
        </div>

        <?php 
            include('Footer.php');
        ?>

    </div>
</body>

</html>