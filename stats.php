<?php
include "top.php";

$myFileName="CSV/TestAccountFinal";

$fileExt=".csv";

$filename = $myFileName . $fileExt;
$file=fopen($filename, "r");

// the variable $file will be empty or false if the file does not open

    $headers[]=fgetcsv($file);
    
    
    while(!feof($file)){
        $records[]=fgetcsv($file);
    }
    
    //closes the file
    fclose($file);
    
    foreach ($records as $oneRecord) {   
     
        $planAmount = $oneRecord[0];
     $spent = $oneRecord[1];
}
$old_average;
$new_average;
$daysLeft = " ";
$remaining = $planAmount - $spent;
$percentage = $remaining / $planAmount * 100;
$percentage_final = number_format($percentage, 2);
$theseDays = 42;
$avgSpend = $remaining/$theseDays;
$avgSpendFinal = number_format($avgSpend,2);

?>
<!DOCTYPE HTML>
<head>
    <link href="CSS/graphstyle.css" rel="stylesheet" type="text/css"/>
</head>

<?php
 
    
?>

<body>
    <h1>Statistics</h1>
    <div class="graph">
        <div>
        <p class="statistics">You started the semester with <?php print($planAmount) ?> points.</p>
        <p class="statistics">You have <?php print($theseDays) ?> days left in the semester.</p>
        
        <p class="statistics">You can spend <?php print($avgSpendFinal) ?> points a day on average.</p>
        <ul class="pointsgraph">               
            <li class="start" style="height:350px;left:0px;"><?php print($planAmount); ?></li>
            <li class="points" style="height: <?php print(($remaining / $planAmount) * 350) ?>; left: 0px;"><?php print($remaining); ?></li>

        </ul>

        <figure class="key" >
            <h3>Key:</h3>
            <p><b>high bar</b>= Starting points</p>
            <p><b>low bar</b>= points left</p>
        </figure>
        <ul class="pointsPercentage">
            <li class="startPercentage" style="height: 350px; left: 0px;">100%</li>
            <li class="percentageLeft" style="height: <?php print($percentage * 3.5); ?>; left: 0px;"><?php print($percentage_final . "%"); ?></li>

        </ul>
        <figure class="key">
            <h3>Key:</h3>
            <p><b>high bar</b>= Starting percentage</p>
            <p><b>low bar</b>= percentage of points left</p>
        </figure> 
        </div>
    </div>
</body>


</html>