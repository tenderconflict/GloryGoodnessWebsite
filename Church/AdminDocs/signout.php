<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="../Styles/GloryGHomeStyles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

</head>

<body>
    <div class="main">
        <div class="navbar">
            <?php 
                include('../../Header.php');
                include('../../Menu.php');
            ?>
        </div>
        
		<div class="content">
            <h1>Sign Out</h1>
        </div>

        <div class="AdminLinks">
                <?php if (isset($_SESSION['user'])): ?>
                    <a href="signoutCode.php">Log Out</a>
				<?php else: ?>
        			<a href="../loginChurch.php">Log In</a>
                <?php endif; ?>
            </div>
    </div>
</body>

</html>