<!-- Styled by Thomas Doss. All PHP by Brandon Eacho -->
<?php 
session_start();
?>

<style>
    .login-container {
        margin-top: 20px; /* Adjust this value to move the login links down */
        margin-right: 10px;
        float: right; /* Float the login container to the right */
    }
    .login-container a {
        list-style-type: none;
        list-style: none;
        text-decoration: none;
        color: green;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        transition: .5s ease-in-out;
        font-size: 18px;
        padding-right: 10px;
        padding-top: 20px; /* You can remove this padding if not needed */
    }
</style>

<div class="icon">
    <h2 class="logo"> </h2>
</div>

<!-- Makes it so the logo is in the top left and login is in the top right-TD -->
<div class="login-container">
    <?php
    if(isset($_SESSION['user'])) {
        // If logged in, show link to dashboard based on role
        $role = $_SESSION['user']['UserRole'];
        switch ($role) {
            case 'admin':
                echo '<li><a href="../../Church/dashboard.php">Dashboard</a></li>';
                break;
            default:
                echo '<li><a href="../../Church/loginChurch.php">Login<br>Đăng Nhập</a></li>';
                break;
        }
    } else {
        // If not logged in, show link to login page
        echo '<li><a href="../../Church/loginChurch.php">Login<br>Đăng Nhập</a></li>';
    }
    ?>
</div>

<p style="text-align:center;">
    <!-- Clicking home should bring you to the homepage-TD -->
    <li><a href="../../GloryGHome.php#"><img src="../../Church/Pictures/GGCLogo.png" alt="ChurchLogo" height="80"></a></li>
</p>