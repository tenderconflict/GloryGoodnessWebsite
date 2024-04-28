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
    <link rel="stylesheet" href="AboutUsStyles/MissionVisionStyles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <style>
        /* Put the modified CSS here */
        /*code may be messy, sorry!! -TD*/
        /* Lines 1-450 written by TD*/
        *{
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .main{
            max-width: 100%;
            overflow-x: hidden;
            width: 100%;
            background: linear-gradient(to bottom, white, rgb(52, 52, 156));
            position: relative;
            background-position: center;
            background-size: cover;
            height: fit-content;
            overflow: hidden;
        }

        .navbar{
            width: 100%;
            height: auto;
            background-color: white;
        }

        .menu{
            display:flex;
            justify-content: space-around;
            text-align: center;
            align-items: center;
            list-style: none;
            margin: 0;
        }

        .menu ul li {
            margin-left: 25px;
            margin-right: 25px;
            font-size: 20px;
            position: relative;
        }

        .menu ul li a:hover {
            color: rgb(214, 193, 0);
        }

        ul li a{
            text-decoration: none;
            color: green;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            transition: .5s ease-in-out;
        }

        ul li a:hover{
            color: rgb(214, 193, 0);
        }

        ul .submenu {
            text-align: left;
            margin: 0;
            z-index: 2;
            display: none;
            position: absolute;
            top: 90%; 
            left: 0;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            padding: 5px;
            width: 300%; 
            line-height: 26px;
        }

        ul li:hover .submenu {
            display:block; 
        }

        .content {
            background: linear-gradient(to bottom, white, rgb(243, 219, 83));
            font-family: Arial, Helvetica, sans-serif;
            color: royalblue;
            text-shadow: 0 0 3px #ffffff, 0 0 5px #ffffff;
            padding: 40px;
        }

        .container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            padding: 20px;
            background-color: rgb(0, 0, 145)
        }

        .header-content {
            text-align: center;
            margin-bottom: 20px;
            list-style-type: none;
        }

        .paragraph-content {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(1, 19, 37);
        }

        .SloganBanner2 {
            z-index: 1;
            width: 100%;
            position: relative;
            top: 0px;
            display: flex;
            justify-content: flex-start;
            align-items: left;
            height: auto;
            font-size: 24px;
            font-family: "Arial", sans-serif;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            opacity: 0.9;
            flex-direction: column;
        }

        .SloganBanner2 p {
            color: #777;
            align-items: left;
            font-size: 22px;
            font-family: "Arial", sans-serif;
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
    <div class="SloganBanner2">
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

        if ($results->num_rows > 0) {
            // Output data for each row
            while($row = $results->fetch_assoc()) {
                echo "<h2>" . $row["StaffPosition"]. "</h2> <br>";
                echo "<p>" . $row["StaffInfoName"]. "</p>";
            }
        } else {
            echo "No results found.";
        }
        ?>
    </div>
    <?php include('../../Footer.php'); ?>
</body>
</html>