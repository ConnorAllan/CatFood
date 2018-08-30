<?php
include "top.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href="CSS/unlimited_css.css" rel="stylesheet" type="text/css"/>

<h1>Unlimited Dining Facilities</h1>

<script>
    jQuery(function ($) {
        //$(".navigation").addClass("js");
        //$(".navigation").addClass("js").before('<img src="img/menu.png" alt="mobile" width="50" height="50" id="mobile"/>');

        $("#card-container1").click(function () {
            $(".card-container1").toggleClass('open');
        });
    })</script>

<script>
    jQuery(function ($) {
        //$(".navigation").addClass("js");
        //$(".navigation").addClass("js").before('<img src="img/menu.png" alt="mobile" width="50" height="50" id="mobile"/>');

        $("#card-container2").click(function () {
            $(".card-container2").toggleClass('open');
        });
    })</script>

<script>
    jQuery(function ($) {
        //$(".navigation").addClass("js");
        //$(".navigation").addClass("js").before('<img src="img/menu.png" alt="mobile" width="50" height="50" id="mobile"/>');

        $("#card-container3").click(function () {
            $(".card-container3").toggleClass('open');
        });
    })</script>



<div id="card-container1" class='card-container1'>
    <div id="card" >
        <h2 class="front" id='cook'></h1>
            <figure class="back">
                <ul ><strong><u>Hours:</u></strong>
                    <li>Monday - Friday: 7:30 a.m. - 3:30 p.m.</li>
                    <li>Saturday: Closed</li>
                    <li>Sunday: 10:30 a.m. - 7:00 p.m.</li>
                </ul>
                <figure class='meals'>
                    <a href='dailymenus/cookBreakfast.php'><img src="images/Breakfast.jpg" class='menuItems' /></a>
                    <a href='dailymenus/lunchCook.php'><img src="images/Lunch.jpg"  class='menuItems'/></a>
                </figure>
                <figure class='meals'>
                    <ul class='mealsLabels'>
                        <li>Breakfast</li>
                        <li>Lunch</li>
                    </ul>
                </figure>
                <figure>
                    <p id='linkHelp'>(Click a picture to view the menu)</p>
                </figure>

            </figure>
    </div>
</div>


<div id="card-container2" class='card-container2' >
    <div id="card">
        <h2 class="front" id='harris'></h1>
            <figure class="back">
                <ul><strong><u>Hours:</u></strong>
                    <li>Monday - Wednesday: 7:30 a.m. - 12:30 a.m.</li>
                    <li>Thursday - Friday: 7:30 a.m. - 9:30 p.m.</li>
                    <li>Saturday - Sunday: 10:00 a.m. - 8:00 p.m.</li>
                </ul> 
                <figure class='meals'>
                    <a href='dailymenus/HMBfast.php'><img src="images/Breakfast.jpg" class='menuItems' /></a>
                    <a href='dailymenus/MHLunch.php'><img src="images/Lunch.jpg"  class='menuItems'/></a>
                    <a href='dailymenus/HMDinner.php'><img src="images/Dinner.jpg"  class='menuItems'/></a>
                </figure>
                <figure class='meals'>
                    <ul class='mealsLabels'>
                        <li>Breakfast</li>
                        <li>Lunch</li>
                        <li>Dinner</li>
                    </ul>
                </figure>
                <figure>
                    <p id='linkHelp'>(Click a picture to view the menu)</p>
                </figure>

            </figure>    
    </div> 
</div>

<div id="card-container3" class='card-container3'>
    <div id="card">
        <h2 class="front" id='redstone'></h2>
        <figure class="back">
            <ul><strong><u>Hours:</u></strong>
                <li>Monday - Friday: 7:30 a.m. - 8:00 p.m.</li>
                <li>Saturday - Sunday: 8:00 a.m. - 8:00 p.m.</li>
            </ul>   
            <figure class='meals'>

                <a href='dailymenus/simpsonBfast.php'><img src="./images/Breakfast.jpg" class='menuItems' /></a>
                <a href='dailymenus/simpsonlunch.php'><img src="./images/Lunch.jpg"  class='menuItems'/></a>
                <a href='dailymenus/simpsondinner.php'><img src="./images/Dinner.jpg"  class='menuItems'/></a>
            </figure>
            <figure class='meals'>
                <ul class='mealsLabels'>
                    <li>Breakfast</li>
                    <li>Lunch</li>
                    <li>Dinner</li>
                </ul>
            </figure>
            <figure>
                <p id='linkHelp'>(Click a picture to view the menu)</p>
            </figure>

        </figure>
    </div> 
</div>

</html>