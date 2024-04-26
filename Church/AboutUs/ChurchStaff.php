<?php
// All PHP written by Brandon Eacho
include('../db_connection.php');

// Fetch staff information
$sql = "SELECT s.StaffID, s.StaffName, s.StaffPicture, b.BioLineText
        FROM StaffInfo s
        LEFT JOIN StaffInfoBio b ON s.StaffID = b.StaffID
        ORDER BY s.StaffID, b.BioLineID;";
$result = $connection_mysql->query($sql);

// Fetch other staff information
$sql2 = "SELECT StaffPosition, StaffInfoName FROM ChurchStaffInfo;";
$results = $connection_mysql->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="AboutUsStyles/ChurchStaff.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <style>
        .staff-info {
            margin-bottom: 20px;
            text-align: left;
        }

        .staff-name {
            margin-bottom: 10px;
        }

        .staff-image-bio {
            display: flex;
            align-items: flex-start;
        }

        .staff-image {
            margin-right: 20px;
        }

        .staff-image img {
            max-width: 200px;
            max-height: 200px;
        }

        .staff-bio {
            text-align: left;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="navbar">
        <?php include('../../Header.php'); include('../../Menu.php'); ?>
    </div>
    <div class="content">
        <h1>Church Staff</h1>
    </div>
    <div class="SloganBanner">
        <?php
        $currentStaffID = null;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["StaffID"] != $currentStaffID) {
                    if ($currentStaffID !== null) {
                        echo "</div>"; // Close staff-bio div
                        echo "</div>"; // Close staff-image-bio div
                        echo "</div>"; // Close staff-info div
                    }
                    echo "<div class='staff-info'>";
                    echo "<div class='staff-name'>";
                    echo "<h2>" . $row["StaffName"] . "</h2>";
                    echo "</div>"; // Close staff-name div
                    echo "<div class='staff-image-bio'>";
                    echo "<div class='staff-image'>";
                    echo "<img src='" . $row["StaffPicture"] . "' alt='Staff Picture'>";
                    echo "</div>"; // Close staff-image div
                    echo "<div class='staff-bio'>";
                    $currentStaffID = $row["StaffID"];
                }

                if (!empty($row["BioLineText"])) {
                    echo $row["BioLineText"] . "<br>";
                }
            }

            if ($currentStaffID !== null) {
                echo "</div>"; // Close staff-bio div
                echo "</div>"; // Close staff-image-bio div
                echo "</div>"; // Close staff-info div
            }
        } else {
            echo "No results found.";
        }
        ?>
    </div>
    <?php include('../../Footer.php'); ?>
</body>
</html>