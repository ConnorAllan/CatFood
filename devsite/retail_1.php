<?php
include('top.php');
//session_start();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href="CSS/retail_css.css" rel="stylesheet" type="text/css"/>



<h1>Retail Dining Facilities</h1>

<script>
    var str1 = "#card-container";
    var str2 = ".card-container";
    for(i=1;i<6;i++){
    jQuery(function ($) {
        //$(".navigation").addClass("js");
        //$(".navigation").addClass("js").before('<img src="img/menu.png" alt="mobile" width="50" height="50" id="mobile"/>');
        
        $(str1+i.toString()).click(function () {
            $(str2+i.toString()).toggleClass('open');
        });
    });
    }</script>


<div id="card-container1" class='card-container1'>
    <div id="card" >
        <h2 class="front" id='brennans'></h1>
        
        <figure class='back'
            <ul><strong><u>Hours:</u></strong>
                <li>Monday - Friday: 7:30 a.m. - 3:30 p.m.</li>
                <li>Saturday: Closed</li>
                <li>Sunday: 10:30 a.m. - 7:00 p.m.</li>
            </ul>
    </div>
</div>


<div id="card-container2" class='card-container2' >
    <div id="card">
        <h2 class="front" id='skinny'></h1>
        <figure class='back'>
            
        <ul>Hours:
                <li>Monday - Wednesday: 7:30 a.m. - 10:00 p.m.</li>
                <li>Thursday - Friday: 7:30 a.m. - 12:30 a.m.</li>
                <li>Saturday: 9:00 a.m. - 12:30 a.m.</li>
                <li>Sunday: 9:00 a.m. - 10:00 p.m.</li>
                

            </ul> 
         
            
             <a class="button" href="http://skinnypancake.com/menu/university-of-vermont/" role="button">Check out the menu</a>
        </figure>
    </div>
</div> 


<div id="card-container3" class='card-container3'>
    <div id="card">
        <h2 class="front" id='newWorld'></h2>
            <figure class="back">
                
        <ul>Hours:
                <li>Monday - Friday: 10:00 a.m. - 8:00 p.m.</li>
                <li>Saturday - Sunday: Closed</li>
                
            </ul>   
    <a class="button" href="http://www.newworldtortilla.com/index.php" role="button">Check out the menu</a>
            </figure>
    </div>
</div> 

<div id="card-container4" class='card-container4'>
    <div id="card">
        <h2 class="front" id='marche'></h2>
       <figure class="back">
        <ul>Hours:
                <li>Monday - Sunday: 8:00 a.m. - 10:00 p.m.</li>
            </ul>   
        <a class="button" href="https://uvmdining.sodexomyway.com/images/Marche_menu_tcm585-11661.pdf" role="button">Check out the menu</a>
    </figure>
    </div> 
</div>

<div id="card-container5" class='card-container5'>
    <div id="card">
        <h2 class="front" id='northside'></h2>
             <figure class="back">
        <ul>Hours:
                <li> Monday - Friday: 7:30 a.m. - 8:00 p.m.</li>
                <li>Saturday - Sunday: 10:00 a.m. - 8:00 p.m.</li>
                 
            </ul> 
             <a class="button" href="https://uvmdining.sodexomyway.com/images/Northside%20Menu_tcm585-11662.pdf" role="button">Check out the menu</a>
             </figure>
    </div> 
</div>
