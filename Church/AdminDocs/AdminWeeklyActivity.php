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

        <div class="content">
            <h1>Weekly Message</h1>
            
        </div>





	  <div class="middle">


        <div class = "gridcontent">
      <h1 class = "dashed-linebottom">Schedule</h1>
      

      <h2><form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="schedule_file" id="schedule_file">
        <input type="hidden" name="action" value="upload_schedule">
        <input type="submit" value="Upload Schedule">
    </form></h2>

        <h1 class = "dashed-linebottom">Prayer</h1>
      

        <h2><form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="prayer_list_file" id="prayer_list_file">
        <input type="hidden" name="action" value="upload_prayer_list">
        <input type="submit" value="Upload Prayer List">
    </form></h2>
        <h1 class = "dashed-linebottom">Bible Study</h1>
      

        <h2> <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="bible_study_file" id="bible_study_file">
        <input type="hidden" name="action" value="upload_bible_study">
        <input type="submit" value="Upload Bible Study">
    </form></h2>
        <h1 class = "dashed-linebottom">Bible Reading</h1>
      
        <h2><form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="bible_reading_file" id="bible_reading_file">
        <input type="hidden" name="action" value="upload_bible_reading">
        <input type="submit" value="Upload Bible Reading">
    </form></h2>
    
    


    </div>
    <div class ="side-content">
    <div class = "servicetimes"><h1>Service Times</h1>
    <p class="dashed-line">Every Sunday at 11:00am</p></div>
    <div class="notes">
       <h1>Notes</h1>
        <form action="update_message.php" method="post">
    <textarea name="content" rows="4" cols="30"><?php echo file_get_contents('message.txt'); ?></textarea><br>
    <input type="submit" value="Submit">
</form>


      </form>




    </div>
    </div>
		</div>


    <?php 
        require_once('../../Footer.php');
    ?>


</body>
</html>




