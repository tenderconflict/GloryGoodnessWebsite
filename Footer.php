<!--Styled by Thomas Doss. All PHP by Brandon Eacho -->

<?php
include('Church/db_connection.php');

$sql = "SELECT EnglishVerse, EnglishVerseText, VietnameseVerse, VietnameseVerseText FROM FooterInfo";
$result = $connection_mysql->query($sql);
?>
<style>
    .ContactChurch{
    
    background: linear-gradient(#342e63, #48508f);
    width: 100%;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
    color: rgb(253, 238, 151);
    font-family: "Arial", sans-serif;
    color: #fff;
    flex-direction: column;

}

.ContactChurch::after {
    content: "";
    display: table;
    clear: both;
}

.ContactChurch p{

    padding: 0px;
    font-size: 19px; 

}
.ContactChurch h2{
    font-size: 30px;
}
.ContactChurch h1 {
    font-size: 30px;
    color: rgb(253, 238, 151);
}

/*Below is for the bible verse in gold -TD*/

.ContactChurch h3 {
    font-size: 23px; 
    color: rgb(253, 238, 151);
    padding-top: 30px;
text-align: center;    
}

.ContactChurch p3 {
  
    text-align: center;    
    padding: 2px;
    padding-left: 80px;
    padding-right: 80px;
    font-size: 19px; 
    color: rgb(253, 238, 151);
}




/*Copyright Information -TD*/
.ContactChurch p4 {
  width: 100%;
    position: relative;

    background-color: #333; 
    color: #fff;
    text-align: center; 
    font-size: 14px; 
}

.BottomContact{

    display: grid;
    grid-template-columns: 1fr 1fr; 
    gap: 20px;
    text-align: center;

}
.BottomInfo span{
    color: #fff;
    text-align: center; 
    font-size: 22px; 
}
.Bottominfo {
    
    display: grid;
    grid-template-columns: 1fr 1fr; 
    color: #fff;
    padding: 20px;
    text-align: center;
    position: absolute;
    color: #fff;
    text-align: center; 
    font-size: 14px; 
}

.Email {
    
    padding: 40px;
    color: #fff;
    text-align: center; 
    font-size: 24px; 
    display: flex;
    align-items: center;
    justify-content: center;
}

.PhoneNumber {
    font-size: 22px; 
    padding: 40px;
    margin: 0 10px;
}

</style>

<div class="Footer">
    <div class="ContactChurch">
        <?php
        if ($result->num_rows > 0) {
                    // Output data for each row
                    while($row = $result->fetch_assoc()) {
                        echo "<h3>" . $row["EnglishVerse"]. "</h3>";
                        echo "<p3>" . $row["EnglishVerseText"]. "</p3>";
                        echo "<h3>" . $row["VietnameseVerse"]. "</h3>";
                        echo "<p3>" . $row["VietnameseVerseText"]. "</p3>";
                    }
                } else {
                    echo "No results found.";
                }
        ?>

        <br><br>

                  <!--  keeping this in case client changes mind for 100th time
                    
                    <h2><br>Contact Information</h2>
                        <div class="BottomContact">
                            <div class="Email">
                                   
                                <span>Email: info@glorygoodnesschurch.org</span>
                            </div>
                            <div class="BottomInfo">
                            
                                <div class="PhoneNumber">
                                  
                                    <span>Phone number: 571-789-7855</span>
                                </div>
                            </div>
                        </div>
                    -->
        <p4>&copy; Glory Goodness Church 2023. All rights reserved.</p4>
            
    </div>


</div>