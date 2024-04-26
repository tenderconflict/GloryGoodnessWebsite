<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Yearly Bible Reading Plan</title>
  <link rel="stylesheet" href="../Church/Styles/stylesGiving.css">   <!-- uses the giving styles since it is a small page -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
</head>

<body>

    <style> .middle {
        display: flex;
    justify-content: center;
    align-items: center;
    }
    </style>
<div class="main">
 		<?php
    		include('../Header.php');
    		include('../Menu.php');
        //header is included for navigation links
  	?>
	
	<div class="content">
            <h1>Yearly Bible Reading Plan</h1>  
  </div>

	<div class="middle">
<!-- i frame reference to a google sheets provided by the church -->
	  <iframe width="90%" height="1260" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTmU0vu4s7Ku-4uALo7qZUGn1k4fmq6FUwYHE6CPxEMfU7skG7_7WjJRKxS5D3uKsBlrRy1TlAqisLa/pubhtml?&amp;widget=true&amp;headers=false"></iframe>
		</div>
	  	
		
	  
	  <?php 
        include('../Footer.php');
    ?>
</div>
	
</body>
</html>