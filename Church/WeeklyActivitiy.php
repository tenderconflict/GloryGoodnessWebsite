<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Weekly Activity</title>
  <link rel="stylesheet" href="../Church/Styles/stylesWeeklyMessage.css">
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
  <?php
    $pdf_dir = "AdminDocs/uploads/";
    $pdf_fileschedule = $pdf_dir . "schedule.pdf";
    $pdf_fileprayer = $pdf_dir . "prayer_list.pdf";
    $pdf_filebible_study = $pdf_dir . "bible_study.pdf";
    $pdf_filebible_reading = $pdf_dir . "bible_reading.pdf";
?>
    
       
   

 <div class="main">
    <?php
    	include('../Header.php');
    	include('../Menu.php');
  	?>

  <div class="content">
      <h1>Weekly Activity</h1>       
  </div>





	  <div class="middle">


        <div class = "gridcontent">
      <h1 class = "dashed-linebottom">Schedule (Lịch)</h1>
      
      <a href = "<?php echo $pdf_fileschedule; ?>"><button type="button" class ="button">Schedule</button></a>
        <p>Click the button to access the Schedule PDF</p>

        <h1 class = "dashed-linebottom">Prayer (Cầu nguyện)</h1>
      
        <a href = "<?php echo $pdf_fileprayer; ?>" target="_blank"><button type="button" class ="button">Prayer List</button></a>
        <p>Click the button to access the Prayer List PDF</p>


       

        <h1 class = "dashed-linebottom">Bible Study (Học Kinh Thánh)</h1>
      
        <a href = "<?php echo $pdf_filebible_study; ?>" target="_blank"><button type="button" class ="button">Bible Study</button></a>
        <p>Click the button to access the Bible Study PDF</p>



    

        <h1 class = "dashed-linebottom">Bible Reading (Đọc Kinh Thánh)</h1>
        <a href = "<?php echo $pdf_filebible_reading; ?>" target="_blank"><button type="button" class ="button">Bible Reading</button></a>
        <p>Click the button to access the Bible Reading PDF</p>




      
       



    </div>
    <div class ="side-content">
    <div class = "servicetimes"><h1>Service Times</h1>
    <h2>Thời gian nhóm lại</h2>
    <p class="dashed-line">Every Sunday at 11:00am</p>
    <p class="dashed-line">Mỗi Chúa Nhật lúc<br> 11 giờ sáng</p></div>
    <div class="notes">
       <h1>Notes</h1>
       <h2>Ghi Chú</h2>
       <p>based on the weather, we will be meeting virtually this week</p>
       




    </div>
</div>
		</div>



	  <?php 
        include('../Footer.php');
    ?>
    </div>


</body>
</html>