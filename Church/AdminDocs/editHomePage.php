<?php
include('../db_connection.php');

// Function to display history information table
function displayHeader() {
    global $connection_mysql;

    $sql = "SELECT EnglishHeader, VietnameseHeader FROM MainPageHeader";
    $result = $connection_mysql->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='header-info'>";
            echo "<h1> Current Header Info: </h1>";
            echo "<div class='header-details'>";
            echo "<p class='english-header'>English: " . $row["EnglishHeader"] . "</p>";
            echo "<p class='vietnamese-header'>Vietnamese: " . $row["VietnameseHeader"] . "</p>";
            echo "</div>"; // Close .header-details
            echo "</div>"; // Close .header-info
        } 
    } else {
        echo "No results found.";
    }
}

function displayVerse() {
    global $connection_mysql;

    $sql = "SELECT EnglishVerse, EnglishVerseText, VietnameseVerse, VietnameseVerseText FROM FooterInfo";
    $result = $connection_mysql->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='header-info'>";
            echo "<h1> Current Verse Info: </h1>";
            echo "<div class='header-details'>";
            echo "<p class='english-header'>English Verse: " . $row["EnglishVerse"] . "</p>";
            echo "<p class='english-header'>English Verse Text: " . $row["EnglishVerseText"] . "</p>";
            echo "<p class='vietnamese-header'>Vietnamese Verse: " . $row["VietnameseVerse"] . "</p>";
            echo "<p class='vietnamese-header'>Vietnamese Verse Text: " . $row["VietnameseVerseText"] . "</p>";
            echo "</div>"; // Close .header-details
            echo "</div>"; // Close .header-info
        } 
    } else {
        echo "No results found.";
    }
}

// Add a new header
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["replace_header"])) {
    $englishHeader = $_POST["replace_english_header"];
    $vietnameseHeader = $_POST["replace_vietnamese_header"];

    $sql = "UPDATE MainPageHeader SET EnglishHeader = '$englishHeader', VietnameseHeader = '$vietnameseHeader' WHERE HeaderID = 1";

    if (mysqli_query($connection_mysql, $sql)) {
        echo "Header replaced successfully.";
    } else {
        echo "Error replacing header: " . mysqli_error($connection_mysql);
    }

}

//Add a new verse
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["replace_verse"])) {
    $englishVerse = $_POST["replace_english_verse"];
    $englishVerseText = $_POST["replace_english_verse_text"];
    $vietnameseVerse = $_POST["replace_vietnamese_verse"];
    $vietnameseVerseText = $_POST["replace_vietnamese_verse_text"];

    $sql = "UPDATE FooterInfo 
            SET EnglishVerse = '$englishVerse', EnglishVerseText = '$englishVerseText', 
                VietnameseVerse = '$vietnameseVerse', VietnameseVerseText = '$vietnameseVerseText'
            WHERE FooterID = 1";

    if (mysqli_query($connection_mysql, $sql)) {
        echo "Verse replaced successfully.";
    } else {
        echo "Error replacing verse: " . mysqli_error($connection_mysql);
    }

}

?>

<!-- Lines 1-147 written by Thomas -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="../../Church/Styles/Dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <style>
        .centered-table {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .centered-table h3 {
            color: grey;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin-bottom: 20px;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 2px solid black;
            border-top: 2px solid black;
            border-left: 2px solid black;
            border-right: 2px solid black;
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: grey;
        }

        .content {
            padding: 20px;
        }

        .AddInfo {
            padding: 20px;
        }

        .header-info {
            margin-bottom: 20px; /* Adjust margin as needed */
        }

        .header-details {
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .english-header {
            font-size: 1.2em; /* Adjust font size as needed */
            font-weight: bold;
            color: #133; /* Adjust color as needed */
        }

        .vietnamese-header {
            font-size: 1.2em; /* Adjust font size as needed */
            font-weight: bold;
            color: #133; /* Adjust color as needed */
        }
    </style>
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
            <h1>Manage Main Page Information</h1>
        </div>

        <div class="AddInfo">
            <div class="centered-table">
                <?php displayHeader(); ?>
            </div>

            <br><br>
            <h2>Replace Main Page Header</h2><br>
            
            <div class="centered-form">
                <div class="form-container">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                        <label for="replace_english_header">English Header:</label>
                        <textarea name="replace_english_header" required></textarea><br><br>
                        <label for="replace_vietnamese_header">Vietnamese Header:</label>
                        <textarea name="replace_vietnamese_header" required></textarea><br><br>
                        <button type="submit" name="replace_header">Replace Header</button>
                    </form>
                </div>
            </div>

            <br><br>

            <div class="centered-table">
                <?php displayVerse(); ?>
            </div>

            <br><br>
            <h2>Replace Footer Verses</h2><br>

            <div class="centered-form">
                <div class="form-container">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                        <label for="replace_english_verse">English Verse:</label>
                        <textarea name="replace_english_verse" required></textarea><br><br>
                        <label for="replace_english_verse_text">English Verse Text:</label>
                        <textarea name="replace_english_verse_text" required></textarea><br><br>
                        <label for="replace_vietnamese_verse">Vietnamese Verse:</label>
                        <textarea name="replace_vietnamese_verse" required></textarea><br><br>
                        <label for="replace_vietnamese_verse_text">Vietnamese Verse Text:</label>
                        <textarea name="replace_vietnamese_verse_text" required></textarea><br><br>
                        <button type="submit" name="replace_verse">Replace Header</button>
                    </form>
                </div>
            </div>
        </div>

        <?php
        include('../../Footer.php');
        mysqli_close($connection_mysql);
        ?>
    </div>
</body>
</html>