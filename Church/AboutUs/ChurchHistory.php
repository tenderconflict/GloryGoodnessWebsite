<?php
// All PHP written by Brandon Eacho
include('../db_connection.php');

$sql = "SELECT HistoryTitle, HistoryText FROM HistoryInfo;";
$result = $connection_mysql->query($sql);
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
            <?php 
                include('../../Header.php');
                include('../../Menu.php');
            ?>
        </div>


        <div class="content">
            <h1>History of the Glory Goodness Church</h1>
        </div>

        <div class="SloganBanner">
            <?php
                if ($result->num_rows > 0) {
                    // Output data for each row
                    while($row = $result->fetch_assoc()) {
                        echo "<h2>" . $row["HistoryTitle"]. "</h2> <br>";
                        echo "<p>" . $row["HistoryText"]. "</p>";
                    }
                } else {
                    echo "No results found.";
                }
            ?>

        </div>

        <?php 
            include('../../Footer.php');
        ?>

        
</body>

</html>