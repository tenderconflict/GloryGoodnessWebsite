<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Weekly Activity -Admin View</title>
  <link rel="stylesheet" href="../Styles/stylesWeeklyMessage.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <style> 
/* .gridcontent h1 {
    text-align: center;
} */
.gridcontent p {
    padding-top: 1vw;
    line-height: 2.5vw;
}
.block-text {
    margin-left: 2vw;
    margin-right: 2vw;
    line-height: 2.5vw;


}

.notes {
  max-width: 250px;
    flex-basis: 30%;
    margin-top: 20px; /* Add margin to create space between the boxes */

    padding: 10px;
    box-sizing: border-box;
    /* overflow-y: auto;  
  */
    background-color: rgba(235, 235, 247, 0.7);
    margin-left: 20px;
    margin-right: 20px ;
    

}
.side-content {
    display: flex;
    flex-direction: column; /* Stack the items vertically */
}
.notes h1 { 
    font-size: 2vw;
    color: #2c3093;
    padding-bottom: 1vw;
    text-align: center;
  }
  .notes p {
    text-align: center;
    padding-top: .5vw;
  padding-bottom:.5vw;
  }
      .link-style {
        color: black;
    }
    .link-style:hover {
        color: #2c3093;
    }
    .link-style:active {
        color: gold;
    }

</style>
</head>

<body>

 <div class="main">
    <?php
        require_once('../../Header.php');
        require_once('../../Menu.php');
    ?>

    <div class ="space"><h1>Weekly Message</h1></div>





	  <div class="middle">


        <div class = "gridcontent">
      <h1 class = "dashed-linebottom">Schedule</h1>
      

      <h2><form action="../Church/upload.php" method="post" enctype="multipart/form-data">
        Select file to upload
        <input type="file" name="section" id="schedule">
        <input type="submit" value="Upload File" name="submit">
      </form></h2>

        <h1 class = "dashed-linebottom">Prayer</h1>
      

        <h2><form action="../Church/upload.php" method="post" enctype="multipart/form-data">
          Select file to upload
          <input type="file" name="section" id="prayer">
          <input type="submit" value="Upload File" name="submit">
        </form></h2>
        <h1 class = "dashed-linebottom">Bible Study</h1>
      

        <h2><form action="../Church/upload.php" method="post" enctype="multipart/form-data">
          Select file to upload
          <input type="file" name="section" id="bible_study">
          <input type="submit" value="Upload File" name="submit">
        </form></h2>
        <h1 class = "dashed-linebottom">Bible Reading</h1>
      

    
        <form action="../Church/upload.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="section" value="bible_reading">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
    </form>


    </div>
    <div class ="side-content">
    <div class = "servicetimes"><h1>Service Times</h1>
    <p class="dashed-line">Every Sunday at 11:00am</p></div>
    <div class="notes">
       <h1>Notes</h1>
       <form action="update_text.php" method="post">
        <label for="message">Update Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="30"></textarea><br>
        <input type="submit" value="Submit">
      </form>




    </div>
    </div>
		</div>


    <?php 
        require_once('../../Footer.php');
    ?>


</body>
</html>




