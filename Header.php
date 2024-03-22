<?php 
session_start();
?>

<div class="icon">
    <h2 class="logo"> </h2>
</div>


<!-- makes it so logo's in the top left and login is in the top right-TD -->
<div class="login">
    <span style="float:right;">
    <?php
    if(isset($_SESSION['user'])) {
        // If logged in, show link to dashboard based on role
        $role = $_SESSION['user']['UserRole'];
        switch ($role) {
            case 'admin':
                echo '<li><a href="../../Church/dashboard.php">Dashboard</a></li>';
                break;
            default:
                echo '<li><a href="../../Church/loginChurch.php">Login</a></li>';
                break;
        }
    } else {
        // If not logged in, show link to login page
        echo '<li><a href="../../Church/loginChurch.php">Login</a></li>';
    }
?>
    </span>
</div>

<p style="text-align:center;">
<!-- clicking home should bring you to the homepage-TD -->
    <li><a href="../../GloryGHome.php#"><img src="../../Church/Pictures/GGCLogo.png" alt="ChurchLogo" height="80"></a></li>
</p>