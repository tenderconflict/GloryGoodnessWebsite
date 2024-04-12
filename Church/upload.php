<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["action"] == "upload_schedule") {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["schedule_file"]["name"]);
        $uploadOk = 1;
        $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is a PDF
        if ($pdfFileType != "pdf") {
            echo "Only PDF files are allowed.";
            $uploadOk = 0;
        }

        // Delete existing file if exists
        if (file_exists($target_file)) {
            unlink($target_file);
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // Rename and upload the file
            $new_file_name = "schedule.pdf";
            if (move_uploaded_file($_FILES["schedule_file"]["tmp_name"], $target_dir . $new_file_name)) {
                echo "The file " . htmlspecialchars(basename($_FILES["schedule_file"]["name"])) . " has been uploaded as schedule.pdf.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    if ($_POST["action"] == "upload_bible_reading") {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["bible_reading_file"]["name"]);
        $uploadOk = 1;
        $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is a PDF
        if ($pdfFileType != "pdf") {
            echo "Only PDF files are allowed.";
            $uploadOk = 0;
        }

        // Delete existing file if exists
        if (file_exists($target_file)) {
            unlink($target_file);
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // Rename and upload the file
            $new_file_name = "bible_reading.pdf";
            if (move_uploaded_file($_FILES["bible_reading_file"]["tmp_name"], $target_dir . $new_file_name)) {
                echo "The file " . htmlspecialchars(basename($_FILES["bible_reading_file"]["name"])) . " has been uploaded as bible_reading.pdf.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    if ($_POST["action"] == "upload_bible_study") {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["bible_study_file"]["name"]);
        $uploadOk = 1;
        $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is a PDF
        if ($pdfFileType != "pdf") {
            echo "Only PDF files are allowed.";
            $uploadOk = 0;
        }

        // Delete existing file if exists
        if (file_exists($target_file)) {
            unlink($target_file);
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // Rename and upload the file
            $new_file_name = "bible_study.pdf";
            if (move_uploaded_file($_FILES["bible_study_file"]["tmp_name"], $target_dir . $new_file_name)) {
                echo "The file " . htmlspecialchars(basename($_FILES["bible_study_file"]["name"])) . " has been uploaded as bible_study.pdf.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    if ($_POST["action"] == "upload_prayer_list") {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["prayer_list_file"]["name"]);
        $uploadOk = 1;
        $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is a PDF
        if ($pdfFileType != "pdf") {
            echo "Only PDF files are allowed.";
            $uploadOk = 0;
        }

        // Delete existing file if exists
        if (file_exists($target_file)) {
            unlink($target_file);
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // Rename and upload the file
            $new_file_name = "prayer_list.pdf";
            if (move_uploaded_file($_FILES["prayer_list_file"]["tmp_name"], $target_dir . $new_file_name)) {
                echo "The file " . htmlspecialchars(basename($_FILES["prayer_list_file"]["name"])) . " has been uploaded as prayer_list.pdf.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
?>
