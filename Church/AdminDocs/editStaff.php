<?php
include('../db_connection.php');

// Function to display staff information table
function displayMainStaffInfo() {
    global $connection_mysql;

    $sql = "SELECT StaffID, StaffName, StaffPicture, StaffBio FROM StaffInfo";
    $result = mysqli_query($connection_mysql, $sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Staff Name</th>
                <th>Staff Picture</th>
                <th>Staff Bio</th>
                <th>Action</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["StaffName"] . "</td>
                    <td><img src='" . $row["StaffPicture"] . "' alt='Staff Picture' style='max-width:200px; max-height:200px;'></td>
                    <td>" . $row["StaffBio"] . "</td>
                    <td>
                        <form method='post' action='" . $_SERVER['PHP_SELF'] . "' style='display: inline;'>
                            <input type='hidden' name='staffId' value='" . $row["StaffID"] . "'>
                            <input type='submit' name='delete' value='Delete'>
                        </form>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No staff members found.";
    }
}

function displayStafferInfo()
{
    global $connection_mysql;

    $sql2 = "SELECT InfoID, StaffPosition, StaffInfoName FROM ChurchStaffInfo;";
    $results = $connection_mysql->query($sql2);

    if ($results->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Staff Position</th>
                <th>Staff Name</th>
                <th>Action</th>
              </tr>";

        while ($row = $results->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["StaffPosition"] . "</td>
                    <td>" . $row["StaffInfoName"] . "</td>
                    <td>
                        <form method='post' action='" . $_SERVER['PHP_SELF'] . "' style='display: inline;'>
                            <input type='hidden' name='infoId' value='" . $row["InfoID"] . "'>
                            <input type='submit' name='delete2' value='Delete'>
                        </form>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No staff members found.";
    }
}

// Delete a staff member
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $staffId = $_POST["staffId"];

    $sql = "DELETE FROM StaffInfo WHERE StaffID = $staffId";

    if (mysqli_query($connection_mysql, $sql)) {
        echo "Staff member deleted successfully.";
    } else {
        echo "Error deleting staff member: " . mysqli_error($connection_mysql);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete2"])) {
    $infoId = $_POST["infoId"];

    $sql = "DELETE FROM ChurchStaffInfo WHERE InfoID = $infoId";

    if (mysqli_query($connection_mysql, $sql)) {
        echo "Staff member deleted successfully.";
    } else {
        echo "Error deleting staff member: " . mysqli_error($connection_mysql);
    }
}

// Add a new staff member
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_staff"])) {
    $staffName = $_POST["new_staff_name"];
    $staffBio = $_POST["new_staff_bio"];

    // Check if a file was uploaded
    if (isset($_FILES["new_staff_picture"]) && $_FILES["new_staff_picture"]["error"] === UPLOAD_ERR_OK) {
        $file = $_FILES["new_staff_picture"];
        $fileName = $file["name"];
        $fileTmpName = $file["tmp_name"];
        $fileSize = $file["size"];
        $fileError = $file["error"];

        // Move the uploaded file to a desired location
        $uploadDir = "../../Church/AdminDocs/uploads/"; // Specify the directory where you want to save the uploaded files
        $uploadPath = $uploadDir . basename($fileName);

        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            // File uploaded successfully
            $staffPicture = $uploadPath; // Store the file path in the database
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "No file was uploaded.";
    }

    $sql = "INSERT INTO StaffInfo (StaffName, StaffPicture, StaffBio) VALUES ('$staffName', '$staffPicture', '$staffBio')";

    if (mysqli_query($connection_mysql, $sql)) {
        echo "New staff member added successfully.";
    } else {
        echo "Error adding staff member: " . mysqli_error($connection_mysql);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_staffer"])) {
    $stafferPosition = $_POST["new_staffer_position"];
    $stafferName = $_POST["new_staffer_name"];

    $sql = "INSERT INTO ChurchStaffInfo (StaffPosition, StaffInfoName) VALUES ('$stafferPosition', '$stafferName')";

    if (mysqli_query($connection_mysql, $sql)) {
        echo "New staff member added successfully.";
    } else {
        echo "Error adding staff member: " . mysqli_error($connection_mysql);
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
            <h1>Manage Staff Information</h1>
        </div>

        <div class="AddInfo">
            <br>
            <h1>Main Staff</h1><br><br>

            <h2>Add New Staff Member</h2><br>
            
            <div class="centered-form">
                <div class="form-container">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                        <label for="new_staff_name">Staff Title:</label>
                        <input type="text" name="new_staff_name" required><br><br>
                        <label for="new_staff_picture">Staff Picture:</label>
                        <input type="file" name="new_staff_picture" accept=".jpg,.jpeg" required><br><br>
                        <label for="new_staff_bio">Staff Bio:</label>
                        <textarea name="new_staff_bio" required></textarea><br><br>
                        <button type="submit" name="add_staff">Add Staff</button>
                    </form>
                </div>
            </div>

            <br><br>
            <h2>Current Added Staff</h2><br>

            <div class="centered-table">
                <?php displayMainStaffInfo(); ?>
            </div>

            <br><br>

            <h1>Other Staff</h1><br><br>

            <h2>Add New Other Staff Member</h2><br>

            <div class="centered-form">
                <div class="form-container">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <label for="new_staff_position">Staff Position:</label>
                        <input type="text" name="new_staffer_position" required><br><br>
                        <label for="new_staffer_name">Staff Name:</label>
                        <input type="text" name="new_staffer_name" required><br><br>
                        <button type="submit" name="add_staffer">Add Staffer</button>
                    </form>
                </div>
            </div>

            <br><br>
            <h2>Current Added Staff</h2><br>

            <div class="centered-table">
                <?php displayStafferInfo() ?>
            </div>
        </div>

        <?php
        include('../../Footer.php');
        mysqli_close($connection_mysql);
        ?>
    </div>
</body>
</html>