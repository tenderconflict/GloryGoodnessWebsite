<?php
include('../db_connection.php');

$sql = "SELECT StaffName, StaffPicture, StaffBio FROM StaffInfo;";
$result = $connection_mysql->query($sql);

$sql2 = "SELECT StaffPosition, StaffInfoName FROM ChurchStaffInfo;";
$results = $connection_mysql->query($sql2);
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
            <h1>Church Staff</h1>
        </div>

        <div class="SloganBanner">
            <?php
                if ($result->num_rows > 0) {
                    // Output data for each row
                    while($row = $result->fetch_assoc()) {
                        echo "<h2>" . $row["StaffName"]. "</h2> <br>";
                        echo "<td><img src='" . $row["StaffPicture"] . "' alt='Staff Picture' style='max-width:200px; max-height:200px;'></td><br>";
                        echo "<p>" . $row["StaffBio"]. "</p><br><br>";
                    }
                } else {
                    echo "No results found.";
                }

                echo"<br><br><br>";

                echo "<h1>Other Staff</h1><br>";

                if ($results->num_rows > 0) {
                    // Output data for each row
                    while($row = $results->fetch_assoc()) {
                        echo "<p>" . $row["StaffPosition"] . ": " . $row["StaffInfoName"] . "</p> <br>";
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