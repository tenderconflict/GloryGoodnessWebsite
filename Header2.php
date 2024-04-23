<?php 
session_start();
?>
<style>
    .login a {
    
    list-style-type: none;
    list-style: none;
    text-decoration: none;
    color: green;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;

}
</style>
<div class="top">
	<div class="login">
		<span style="float:right;">
        <?php
            if(isset($_SESSION['user'])) {
                // If logged in, show link to dashboard based on role
                $role = $_SESSION['user']['UserRole'];
                switch ($role) {
                    case 'admin':
                        echo '<li type="none"><a href="../../Church/dashboard.php">Dashboard</a></li>';
                        break;
                    default:
                        echo '<li type="none"><a href="../loginChurch.php">Login</a></li>';
                        break;
                }
            } else {
                // If not logged in, show link to login page
                echo '<li><a href="../../Church/loginChurch.php">Login</a></li>';
            }
        ?>
		</span>
	</div>
	<div class="logo">
		<li><a href="../../GloryGHome.php"><img src="../../Church/Pictures/GGCLogo.png" alt="ChurchLogo" height= "80"></a></li>			
	</div>

</div>