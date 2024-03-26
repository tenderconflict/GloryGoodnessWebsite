<style>
    .navbar{
    /*background: linear-gradient(to top, white, #7393B3);*/
    width: 100%;
    height: auto;
    background-color: white;
    padding-bottom: 20px;
}

    .header {
    list-style-type: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px; 
}

    .menu{
    display:flex;
    justify-content: space-around;
    text-align: center;
    align-items: center;
    list-style: none;
    margin: 0;/* -40 margin makes it go up. might be useful*/
    

   /* padding-left: 30px;
    padding-right: 30px;*/
}

/* This deals with the navigation and menu bars-TD*/
ul{
list-style-type: none;
list-style: none;
float:left;
display: flex;
justify-content: center;
align-items: center;
}

.menu ul li {
    list-style: none;
    margin-left: 25px;
    margin-right: 25px;/* This spaces out the tabs-TD*/
    font-size: 20px;
    position: relative;
}


.menu ul li a:hover {
    color: rgb(214, 193, 0);
}


/*cosmetics Home, About, Ministries, ETC...-TD*/
ul li a{
    text-decoration: none;
    color: green;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    transition: .5s ease-in-out;
}


/*transition hovering color-TD*/
ul li a:hover{
    color: rgb(214, 193, 0);
}






/*when hovering this will show the submenus-TD*/
ul .submenu {
    
    text-align: left;
    margin: 0;
    z-index: 2;/*wow now it finally doesnt go under the banner, big headache figuring this out*/
    display: none;
    position: absolute;
    top: 90%; 
    left: 0;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    padding: 5px;
    width: 300%; 
    /*gives it some space between submenu lines, so annoying initially-TD*/
    line-height: 120%;
}



.sub-menu li {
    padding: 15px 20px;
}



ul li:hover .submenu {
    display:block; 
}






@media only screen and (max-width: 623px) {/*mobile view -TD*/
    .menu ul li {

        font-size: 15px; 
        margin: 0; 


    }
    ul .submenu {
    
        width: 110%; 
  
    }


ul .button{
    width: 92%;
}



    .Email span,
    .PhoneNumber span,
    .BottomInfo span {
        font-size: 17px;
        margin: 0;
    }
}
</style>

<div class="menu">
                <ul>
                    <!-- clicking home should bring you to the homepage-TD -->
                    <!-- <li><a href="#"><img src="GGCLogo.png" alt="ChurchLogo" height= "70"></a></li> -->


                    <!-- <li><a href="#">HOME</a></li>-->




                    <li><a href="../../GloryGHome.php#">Home <br><span style="color: rgb(18, 18, 161);">Trang chủ</span></a></li>



                    <li class="has-submenu"><a href="#">About Us <br> <span style="color: rgb(18, 18, 161);">Về Hội Thánh</span></a>


                        <ul class="submenu">
                            <li><a href="../../Church/AboutUs/MissionVision.php">Mission & Vision <br><span style="color: rgb(18, 18, 161);">Sứ Mạng và Tầm Nhìn</span></a></li>
                            <li><a href="../../Church/AboutUs/ChurchStaff.php">Church Staff <br><span style="color: rgb(18, 18, 161);">Thành viên</span></a>
                            </li>
                            <li><a href="../../Church/AboutUs/ChurchHistory.php">Church History <br> <span style="color: rgb(18, 18, 161);">Lịch sử</span></a></li>
                            <!--more may be added in the future here -TD -->
                        </ul>


                    </li>


                    <li><a href="#">Ministries <br><span style="color: rgb(18, 18, 161);">Mục Vụ</span></a>

                        <ul class="submenu">
                            <li><a href="../../Church/ChurchEventCalendar.php">Church Event Calendar <br><span
                                        style="color: rgb(18, 18, 161);">Thời Khoá Biểu của</span></a></li>
                            <li><a href="../../Church/WeeklyActivitiy.php">Weekly Activity <br><span style="color: rgb(18, 18, 161);">Hoạt Động Hằng Tuần</span></a></li>
                            <li><a href="../../Church/WeeklyBibleReadings.php">Weekly Bible Reading <br><span style="color: rgb(18, 18, 161);">Lịch đọc Kinh Thánh Hằng Năm</span></a></li>

                        </ul>


                    </li>


                    <li><a href="../../Church/Giving.php">Giving <br><span style="color: rgb(18, 18, 161);">Dâng Hiến</span></a></li>



                    <li><a href="#">Education <br><span style="color: rgb(18, 18, 161);">Giáo Dục</span></a>

                        <ul class="submenu">
                            <li><a href="../../School/GloryGSchool.php">School <br><span
                                        style="color: rgb(18, 18, 161);">Trường học</span></a></li>

                        </ul>


                    </li>

                </ul>
            </div>