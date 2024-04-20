<?php
include('../db_connection.php');

// Function to display history information table
function displayHistory() {
    global $connection_mysql;

    $sql = "SELECT HistoryID, HistoryTitle, HistoryText FROM HistoryInfo;";
    $result = $connection_mysql->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Title</th>
                <th>Text</th>
                <th>Action</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["HistoryTitle"] . "</td>
                    <td>" . $row["HistoryText"] . "</td>
                    <td>
                        <form method='post' action='" . $_SERVER['PHP_SELF'] . "' style='display: inline;'>
                            <input type='hidden' name='historyId' value='" . $row["HistoryID"] . "'>
                            <input type='submit' name='delete' value='Delete'>
                        </form>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No history found.";
    }
}

// Delete history
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $historyId = $_POST["historyId"];

    $sql = "DELETE FROM HistoryInfo WHERE HistoryID = $historyId";

    if (mysqli_query($connection_mysql, $sql)) {
        echo "History deleted successfully.";
    } else {
        echo "Error deleting history: " . mysqli_error($connection_mysql);
    }
}



// Add a new history
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_history"])) {
    $historyTitle = $_POST["new_history_title"];
    $historyText = $_POST["new_history_text"];

    $sql = "INSERT INTO HistoryInfo (HistoryTitle, HistoryText) VALUES ('$historyTitle', '$historyText')";

    if (mysqli_query($connection_mysql, $sql)) {
        echo "New history added successfully.";
    } else {
        echo "Error adding history: " . mysqli_error($connection_mysql);
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
            <h1>Manage History Information</h1>
        </div>

        <div class="AddInfo">
            <br>
            <h1>Add New History</h1><br>
            
            <div class="centered-form">
                <div class="form-container">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                        <label for="new_history_title">Title:</label>
                        <input type="text" name="new_history_title" required><br><br>
                        <label for="new_history_text">Text:</label>
                        <textarea name="new_history_text" required></textarea><br><br>
                        <button type="submit" name="add_history">Add History</button>
                    </form>
                </div>
            </div>

            <br><br>

            <h1>Current Users</h1><br>
            <div class="centered-table">
                <?php displayHistory(); ?>
            </div>
        </div>

        <?php
        include('../../Footer.php');
        mysqli_close($connection_mysql);
        ?>
    </div>
</body>
</html>