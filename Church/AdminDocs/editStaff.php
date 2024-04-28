<!-- This page allows admin to edit all of the staff page. -->
<!-- All lines written by Brandon Eacho -->
<?php
include('../db_connection.php');

// Function to display staff information table
function displayMainStaffInfo() {
    global $connection_mysql;

    $sql = "SELECT StaffID, StaffName, StaffPicture FROM StaffInfo";
    $result = mysqli_query($connection_mysql, $sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Staff Name</th>
                <th>Staff Picture</th>
                <th>Action</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["StaffName"] . "</td>
                    <td><img src='" . $row["StaffPicture"] . "' alt='Staff Picture' style='max-width:200px; max-height:200px;'></td>
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

// Function to display main staff bio table
function displayMainStaffBio() {
    global $connection_mysql;

    $sql = "SELECT s.StaffID, s.StaffName, b.BioLineText , b.BioLineID
            FROM StaffInfo s JOIN StaffInfoBio b
                ON s.StaffID = b.StaffID
            ORDER BY s.StaffID, b.BioLineID";

    $result = mysqli_query($connection_mysql, $sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Staff Name</th>
                <th>Staff Bio Line</th>
                <th>Action</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["StaffName"] . "</td>
                    <td>" . $row["BioLineText"] . "</td>
                    <td>
                        <form method='post' action='" . $_SERVER['PHP_SELF'] . "' style='display: inline;'>
                            <input type='hidden' name='bioLineID' value='" . $row["BioLineID"] . "'>
                            <input type='submit' name='delete3' value='Delete'>
                        </form>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No staff members found.";
    }
}

//Function to display staffer info table
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

//Function to fetch staff names and ids so they can be used to add bio
function fetchStaffNamesAndIds() {
    global $connection_mysql;

    $sql = "SELECT StaffID, StaffName FROM StaffInfo";
    $result = mysqli_query($connection_mysql, $sql);
    
    $staff_list = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $staff_list[] = $row;
    }

    return $staff_list;
}



// Delete a staff member
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $staffId = $_POST["staffId"];

    // Delete associated bio links first
    $sqlDeleteBioLinks = "DELETE FROM StaffInfoBio WHERE StaffID = $staffId";
    if (mysqli_query($connection_mysql, $sqlDeleteBioLinks)) {
        echo "Associated bio links deleted successfully.";
    } else {
        echo "Error deleting associated bio links: " . mysqli_error($connection_mysql);
    }

    // Delete the staff member
    $sqlDeleteStaff = "DELETE FROM StaffInfo WHERE StaffID = $staffId";
    if (mysqli_query($connection_mysql, $sqlDeleteStaff)) {
        // Refresh the page after successful deletion
        header("Refresh:0");
    } else {
        echo "Error deleting staff member: " . mysqli_error($connection_mysql);
    }
}

// Delete a staff bio line
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete3"])) {
    $bioLineID = $_POST["bioLineID"];

    $sql = "DELETE FROM StaffInfoBio WHERE BioLineID = $bioLineID";

    if (mysqli_query($connection_mysql, $sql)) {
        echo "Staff member deleted successfully.";
    } else {
        echo "Error deleting staff member: " . mysqli_error($connection_mysql);
    }
}

// Delete church staffer
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

//Add new staff bio line
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_staff_bio"])) {
    $selected_staff_id = $_POST["selected_staff"];
    $staff_bio = $_POST["new_staff_bio"];

    $sql = "INSERT INTO StaffInfoBio (StaffID, BioLineText) VALUES ('$selected_staff_id', '$staff_bio')";

    if (mysqli_query($connection_mysql, $sql)) {
        echo "New staff bio added successfully.";
    } else {
        echo "Error adding staff bio: " . mysqli_error($connection_mysql);
    }
}

//Add new staffer
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

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Staff</title>
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
            
            <!-- Form to get information for new staff member -->
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

            <!-- Display main staff info table -->
            <div class="centered-table">
                <?php displayMainStaffInfo(); ?>
            </div>

            <br><br>

            <?php $staff_list = fetchStaffNamesAndIds(); ?>

            <h1>Main Staff Bio Lines</h1><br><br>

            <!-- Form to get information for new staff bio line -->
            <div class="centered-form">
                <div class="form-container">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                        <label for="selected_staff">Select Staff:</label>
                        <select name="selected_staff">
                            <?php
                            foreach ($staff_list as $staff) {
                                echo "<option value='" . $staff['StaffID'] . "'>" . $staff['StaffName'] . "</option>";
                            }
                            ?>
                        </select><br><br>
                        <label for="new_staff_bio">Staff Bio Line:</label>
                        <textarea name="new_staff_bio" required></textarea><br><br>
                        <button type="submit" name="add_staff_bio">Add Staff Bio Line</button>
                    </form>
                </div>
            </div>

            <br><br>
            <h2>Current Staff Bio</h2><br>

            <!-- Display main staff bio table -->
            <div class="centered-table">
                <?php displayMainStaffBio(); ?>
            </div><br><br>

            <h1>Other Staff</h1><br><br>

            <h2>Add New Other Staff Member</h2><br>

            <!-- Form to get information for new staffer -->
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

            <!-- Display staffer table -->
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